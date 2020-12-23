<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Publicaciones</title>
  <!--AGREGANDO LOS ASSET: CSS Y JS-->
  <?php require "template/assetPost.php" ?>
</head>

<body class="bg-gray-200 font-sans" style="font-family: 'Roboto'">
  <?php require "template/navbarPost.php"?>

  <?php
  
  foreach ($posts as $key => $v) {
    echo '
    <div class="relative mx-3 md:mx-10 lg:mx-16 flex flex-col mt-5 p-10 h-auto">
    <div
      class="w-full rounded-lg h-90 md:h-auto lg:h-72 shadow-lg bg-white md:grid md:grid-cols-5 flex flex-col items-center">
      <div class="md:col-span-1 -mt-6 md:-ml-6 w-56 h-48 bg-cover shadow-lg bg-center object-cover"
        style="background-image: url(\'./src/img/background.jpg\')">
      </div>
      <div
        class="md:ml-16 lg:ml-2 p-5 md:h-full md:col-span-4 flex flex-col justify-between md:justify-evenly md:items-end lg:items-start">
        <div class="text-sm">
          <div class="font-medium flex flex-row-reverse lg:flex-row">
            <div class="text-gray-500">
              <span class="icon-man-user text-lg mx-2"></span>
            </div>
            <h3 class="text-cyan-600 capitalize">
              '.$v["author"].'
            </h3>
          </div>
          <div class="font-thin flex flex-row-reverse lg:flex-row">
            <div class="text-gray-500">
              <span class="icon-calendar text-lg mx-2"></span>
            </div>
            <h3 class="text-cyan-600 capitalize">'.$v["date"].'</h3>
          </div>
        </div>
        <h1 class="block hover:underline cursor-pointer text-blue-500 my-1 md:my-0 text-xl font-semibold uppercase">
          '.$v["title"].'
        </h1>
        <p class="my-2 md:my-1 text-sm md:text-right lg:text-left">
          '.$v["description"].'
        </p>
      </div>
    </div>
  </div>
    
    ';
  }
  
  ?>

</body>

</html>