<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

define("APP_ROOT", "/" . basename(__DIR__) . "/");
$uri = explode("/", $_SERVER["REQUEST_URI"]);

require_once "vendor/autoload.php";
require_once "vendor/phpmailer/PHPMailer/src/Exception.php";
require_once "vendor/phpmailer/PHPMailer/src/PHPMailer.php";
require_once "vendor/phpmailer/PHPMailer/src/SMTP.php";
require_once "procedures/config.php";
require_once "procedures/utility.php";
require_once "models/Project.php";

$conn = createConnection();
$query = $stmt = "";

switch (true) {
    case (
        empty($uri[2]) && count($uri) === 3)
        || (str_starts_with($uri[2], "home")
    ):
        $projectArray = array();
        $query = "SELECT * FROM project LIMIT 10";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        foreach ($stmt as $row) {
            array_push($projectArray, new Project($row));
        }

        require_once "templates/home.php";
        break;
    case str_starts_with($uri[2], "projects"):
        $projectArray = array();
        $query = "SELECT * FROM project";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        foreach ($stmt as $row) {
            array_push($projectArray, new Project($row));
        }

        if (!empty($_GET)) {
            $filters = array('all', 'subdivision', 'business bldg.', 'hospital', 'malls', 'industrial', 'agricultural');

            if (isset($_GET['filter']) && in_array($_GET['filter'], $filters)) {
                $_GET['filter'] = htmlspecialchars(strtolower($_GET['filter']));

                if ($_GET['filter'] != "all") {
                    $filteredProjectArray = array();

                    foreach ($projectArray as $var) {
                        if (in_array($_GET['filter'], $var->tags)) {
                            array_push($filteredProjectArray, $var);
                        }
                    }
                } else {
                    $filteredProjectArray = $projectArray;
                }
            }

            if (count($filteredProjectArray) % 10) {
                $pages = (count($filteredProjectArray) / 10) + 1;
            } else {
                $pages = count($filteredProjectArray) / 10;
            }

            if (isset($_GET['p']) && $_GET['p'] >= 1 && $_GET['p'] <= $pages) {
                $projectArrayFinal = array();
                $start = ($_GET['p'] - 1) * 10;
                $end = $start + 10;
                $backValue = $_GET['p'] - 1;
                $nextValue = $_GET['p'] + 1;

                if ($end > count($filteredProjectArray)) {
                    $end = count($filteredProjectArray);
                }

                for ($i = $start; $i < $end; $i++) {
                    array_push($projectArrayFinal, $filteredProjectArray[$i]);
                }
            }
        } else {
            header("Location: " . APP_ROOT . "projects?p=1&filter=all");
            exit();
        }

        require_once "templates/project.php";
        break;
    case str_starts_with($uri[2], "project"):
        $query = "SELECT * FROM project WHERE ID = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([base64_decode($uri[3])]);
        $project = new Project($stmt->fetch());

        require_once "templates/project-template.php";
        break;
    case str_starts_with($uri[2], "partners"):
        switch (true) {
            case str_starts_with($uri[3], "arvin"):
                require_once "templates/partners/aci.php";
                break;
            case str_starts_with($uri[3], "devine"):
                require_once "templates/partners/dcr.php";
                break;
            case str_starts_with($uri[3], "graymark"):
                require_once "templates/partners/graymark.php";
                break;
            case str_starts_with($uri[3], "jarufarm"):
                require_once "templates/partners/jarufarm.php";
                break;
            case str_starts_with($uri[3], "aemm"):
                require_once "templates/partners/aemm.php";
                break;
            case str_starts_with($uri[3], "brucgt"):
                require_once "templates/partners/brucgt.php";
                break;
            
        }
        break;
    case str_starts_with($uri[2], "careers"):
        require_once "templates/careers.php";
        break;
    case str_starts_with($uri[2], "media"):
        require_once "templates/media.php";
        break;
    case str_starts_with($uri[2], "about"):
        require_once "templates/about-us.php";
        break;
    case str_starts_with($uri[2], "directors"):
        require_once "templates/directors.php";
        break;
    case str_starts_with($uri[2], "contact"):
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $error = array();

            // Clean data
            foreach ($_POST as $key => $value) {
                $_POST[$key] = trim(stripslashes(htmlspecialchars($value)));
                
                // for general keys
                if (empty($value)) {
                    $error[$key] = "Input is empty.";
                    continue;
                }

                // for specific keys
                if ($key === 'email' && !isEmailValid($value)) {
                    // validate e-mail here
                    $error[$key] = "E-mail is not formatted correctly";
                } else if($key == 'phone' && !isPhoneNumberValid(strval($value))){
                    echo "mali";
                }
            }
            
            if (count($error) === 0) {
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->isSMTP();
                    $mail->Host       = "smtp.gmail.com";
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'csdmail.north@gmail.com';
                    $mail->Password   = 'vaonblwwblocomdu';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    //Recipients
                    $mail->setFrom("csdmail.north@gmail.com", "CSD e-MAIL");
                    $mail->addReplyTo("csdmail.north@gmail.com");
                    $mail->addAddress($_POST['email']);

                    //Content
                    $mail->isHTML(true);
                    $mail->Subject = 'Here is the subject';
                    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
        }

        require_once "templates/contact.php";
        break;
    case str_starts_with($uri[2], "test"): {
        echo __DIR__;
        break;
    }
    default:
        require_once "templates/404.php";
}

function isEmailValid($email)
{
    $checkStart = str_starts_with($email, ".");
    $checkLen = (strlen($email) > 16);
    $findAt = substr_count($email, "@");
    $findDots = str_contains($email, "..");
    $isValid = (
        !$checkStart
        || $checkLen
        || $findAt === 1
        || $findDots === 0
    );
    
    return $isValid;
}




function isPhoneNumberValid($number){
    
        if(!preg_match('/^(09|\+639)\d{9}$/', $number));
}   

