<?php require_once __DIR__ . "/includes/header.php"; ?>
<?php require_once __DIR__ . "/includes/navbar.php"; ?>
  <div class="mt-0 py-20 bg-primary-green p-4 px-20 flex flex-col gap-4 md:flex-row md:mt-14 max-w-screen-lg mx-auto">
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
    <div>
    <h3 class="text-xl text-white font-medium">Contact Us</h3>
      <form class="mt-6 grid grid-cols-2 gap-2 pr-8" action="contact.php" method="POST">
        <input autocomplete="off" class="personal-info" placeholder="First Name" type="text" name="firstname">
        <input autocomplete="off" class="personal-info" placeholder="Last Name" type="text" name="lastname">
        <input autocomplete="off" class="personal-info" placeholder="E-mail" type="email" name="email">
        <input autocomplete="off" class="personal-info" placeholder="Phone Number" type="text" name="phone">
        <textarea class="personal-info  resize-none col-span-2"  placeholder="Message:" name="message" rows="3"></textarea>
        <!-- <button class="btn glass" type="submit" name="submit">Submit</button> -->
        <button class="transition duration-150 py-2 px-8 w-fit text-white font-medium border border-white hover:bg-white hover:text-primary-green" type="submit" name="submit">Submit</button>
      </form>
    </div>

  </div>
  <?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>

</body>

</html>