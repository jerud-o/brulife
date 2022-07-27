<?php require_once __DIR__ . "/includes/header.php"; ?>
<?php require_once __DIR__ . "/includes/navbar.php"; ?>
<?php if(isset($sentStatus)):?>
            <div><?= $sentStatus?></div>
          <?php endif ?>
  <div class="mt-0 py-20 bg-primary-green p-4 px-20 flex flex-col gap-4 md:flex-row md:my-14 max-w-screen-lg mx-auto">
    <div class="basis-1/2">
      <h3 class="text-xl text-white font-medium">Contact Information</h3>
      <div class="mt-6 flex">
        <span class="text-slate-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
        </span>
        <p class="ml-4 text-white">510-511 5th Floor West City Plaza. West Avenue Quezon City, Philippines</p>
      </div>
      <div class="flex mt-6">
        <span class="text-slate-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
        </span>
        <p class="ml-4 text-white">+63 966-465-6998 <br><a class="w-full" href="#">http://brulifegreatholdings.com</a></p>

      </div>
    </div>

    <div class="basis-1/2">
    <h3 class="text-xl text-white font-medium">Contact Us</h3>

      <form class="mt-6 grid grid-cols-2 gap-2 pr-8" action="<?= APP_ROOT . "contact"?>" method="POST">
        <div class="col-span-2 md:col-span-1">
          <input class="personal-info w-full" autocomplete="off"  placeholder="First Name" type="text" name="firstname" <?php if(isset($_POST['firstname'])):?> value = "<?= $_POST['firstname']?>" <?php endif?>>
          <?php if(isset($error['firstname'])):?> 
            <div><?= $error['firstname']?></div>
          <?php endif ?>
        </div>
        <div class="col-span-2 md:col-span-1">
          <input class="personal-info w-full" autocomplete="off"  placeholder="Last Name" type="text" name="lastname"<?php if(isset($_POST['lastname'])):?> value = "<?= $_POST['lastname']?>" <?php endif?>>
          <?php if(isset($error['lastname'])):?>
            <div><?= $error["lastname"]?></div>
          <?php endif ?>
        </div>
        <div class="col-span-2 md:col-span-1">
          <input class="personal-info w-full" autocomplete="off"  placeholder="E-mail" type="email" name="email"<?php if(isset($_POST['email'])):?> value = "<?= $_POST['email']?>" <?php endif?>>
          <?php if(isset($error['email'])):?>
            <div><?= $error["email"]?></div>
          <?php endif ?>
        </div>
        <div class="col-span-2 md:col-span-1">
          <input class="personal-info w-full" autocomplete="off"  placeholder="Phone Number" type="text" name="phone"<?php if(isset($_POST['phone'])):?> value = "<?= $_POST['phone']?>" <?php endif?>>
          <?php if(isset($error['phone'])):?>
            <div><?= $error["phone"]?></div>
          <?php endif ?>
        </div>
        <div class="col-span-2">
          <textarea class="w-full placeholder:personal-info  resize-none " placeholder="Message:" name="message" rows="3"><?php if(isset($_POST['message'])):?> <?= $_POST['message']?> <?php endif?></textarea>
          <?php if(isset($error['message'])):?>
            <div><?= $error["message"]?></div><br>
          <?php endif ?>
        </div>
        <button class="transition duration-150 py-2 px-8 w-fit text-white font-medium border border-white hover:bg-white col-start-1 col-end-2 hover:text-primary-green" type="submit">Submit</button>
      </form>
    </div>

  </div>
  <?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>

</body>

</html>