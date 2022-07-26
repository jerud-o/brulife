<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$uri = explode("/", $_SERVER["REQUEST_URI"]);
$conn = createConnection();
$query = $stmt = "";

if ($uri[1] === "brulife" || $_SERVER['SERVER_NAME'] === "localhost") {
    define("APP_ROOT", "/brulife/");
    $baseIndex = 2;
} else {
    define("APP_ROOT", "/");
    $baseIndex = 1;
}

$requestFromAPI = (isset($uri[$baseIndex]) && $uri[$baseIndex] === "api");

switch (true) {
    case (
        (empty($uri[$baseIndex]) && count($uri) === ($baseIndex + 1))
        || ($uri[$baseIndex] === "home")
    ):
        $projectArray = array();
        $query = "SELECT * FROM project LIMIT 10";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        foreach ($stmt as $row) {
            array_push($projectArray, new Project($row));
        }
        break;
    case (
        str_starts_with($uri[$baseIndex], "projects")
        || ($requestFromAPI && str_starts_with($uri[$baseIndex + 1], "projects"))
    ):
        $projectArray = array();
        $query = "SELECT * FROM project";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        foreach ($stmt as $row) {
            array_push($projectArray, new Project($row));
        }

        if (!empty($_GET)) {
            $filters = array('all', 'subdivision', 'business bldg.', 'hospital', 'malls', 'industrial', 'agricultural');
            $filteredProjectArray = array();

            if (isset($_GET['filter']) && in_array($_GET['filter'], $filters)) {
                $_GET['filter'] = htmlspecialchars(strtolower($_GET['filter']));

                if ($_GET['filter'] != "all") {
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
            if ($requestFromAPI) {
                header("Location: " . APP_ROOT . "api/projects?p=1&filter=all");
            } else {
                header("Location: " . APP_ROOT . "projects?p=1&filter=all");
            }
            exit();
        }

        if ($requestFromAPI) {
            json($projectArrayFinal);
            exit();
        }
        break;
    case (
        str_starts_with($uri[$baseIndex], "project")
        || ($requestFromAPI && str_starts_with($uri[$baseIndex + 1], "project"))
    ):
        $query = "SELECT * FROM project WHERE ID = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([base64_decode($uri[$baseIndex + 1])]);
        $project = new Project($stmt->fetch());

        if ($requestFromAPI) {
            json($project);
            exit();
        }
        break;
    case str_starts_with($uri[$baseIndex], "contact"):
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
                } else if($key == 'phone'){
                    
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
        break;
}