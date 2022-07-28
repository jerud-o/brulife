<?php require_once __DIR__ . "/includes/header.php"; ?>
<script>
  
  setInterval(() => {
    var width = document.documentElement.clientWidth;
    
    if (width <= 360) {
      document.body.style.backgroundColor = "#e0e0e0";
    } else{
      document.body.style.backgroundColor = "transparent";
    }
  }, 500);
</script>
<?php require_once __DIR__ . "/includes/navbar.php"; ?>
<div style="background-image: url(<?=APP_ROOT . 'assets/img/career-bg.jpg'?>);" class="-scale-x-100 bg-top fixed bg-cover bg-no-repeat blur-[5px] h-full w-full z-[-1] top-20"></div>
<div class="px-8 py-8 md:w-2/3 xl:w-2/5 md:mx-auto">
  <h1 class="text-3xl font-bold mb-4">Welcome to Our Career Center</h1>
  <p class="font-medium indent-10">On this page you will find information and resources about working at Brulife. There are exciting job opportunities and if you are looking for additional insights about our job functions, want to get to know the people of Brulife and out culture, or to get professional insights on your career, check out our Careers blog page for more.</p>
</div>
<div class="md:mb-12 sm:p-12 bg-primary-green lg:w-2/4 md:w-4/5 md:mx-auto">
  <h2 class="sm:mb-4 text-5xl text-center text-white">Jobs & Training</h2>
  <div class="flex justify-around md:justify-center md:gap-12 py-12 sm:py-0">
    <ul>
      <li class="text-white">➤ Skilled Workers</li>
      <li class="text-white">➤ Engineering</li>
      <li class="text-white">➤ Architectural</li>
      <li class="text-white">➤ Designer</li>
      <li class="text-white">➤ Project Managers</li>
      <li class="text-white">➤ Inspector</li>
      <li class="text-white">➤ Interior Design</li>
    </ul>
    <ul>
      <li class="text-white">➤ Agriculture</li>
      <li class="text-white">➤ Marine</li>
      <li class="text-white">➤ Medical Education</li>
      <li class="text-white">➤ Trading</li>
      <li class="text-white">➤ Management</li>
      <li class="text-white">➤ HRM</li>
      <li class="text-white">➤ Real Estate</li>
    </ul>
  </div>

</div>

<?php
require_once "includes/footer.php";
require_once "includes/scripts.php";
?>
</body>


</html>