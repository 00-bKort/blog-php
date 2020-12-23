<!--NAVBAR-->
<nav
    class="relative flex flex-col md:flex-row md:justify-between lg:justify-around py-3 px-2 w-full h-auto bg-green-400">
    <h1 class="text-2xl text-center md:text-left font-thin uppercase text-white cursor-pointer">
      BlogWeb
    </h1>

    <!--input-->
    <div class="flex justify-center md:flex-row flex-row-reverse mt-4 md:mt-0">
      <input type="search"
        class="font-thin border rounded h-8 w-56 md:w-72 pl-3 border-transparent focus:outline-none focus:ring-2 focus:rign-purple-600 focus:border-transparent placeholder-gray-200"
        placeholder="Search" />
      <button
        class="focus:outline-none hover:bg-outline-none bg-green-600 hover:bg-green-500 md:mr-0 text-white md:h-8 md:ml-1 py-1 px-2 rounded">
        <span class="icon-search text-sm"></span>
      </button>
    </div>
    <!--user-->
    <div class="md:flex md:items-center">
      <h1 class="invisible md:visible md:inline-block hidden font-semibold text-white text-normal md:mr-14 lg:-mr-10">
        Bryan Cortez
      </h1>
      <div
        class="absolute lg:inline top-1 right-1 w-12 h-12 lg:mr-14 cursor-pointer bg-no-repeat bg-center bg-cover rounded-full bg-transparent"
        style="background-image: url('./src/img/profile.jpg')"></div>
    </div>
  </nav>

  <!--BACKGROUND IMAGE-->
  <div class="w-full h-72 bg-center bg-cover bg-no-repeat bg-fixed" style="background-image: url('./src/img/fondo.jpg')">
    <div class="flex justify-center items-center bg-blue-500 bg-opacity-50 w-full h-full">
      <h1 class="uppercase font-semibold text-gray-200 text-4xl md:text-5xl text-center overflow-ellipsis">
        Bienvenid@s a Mi Blog
      </h1>
    </div>
  </div>