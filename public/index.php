<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <title>Document</title>
</head>
<body>
    <!-- Header Section -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-50">
        <div class="w-full mx-auto sm:w-[500px] md:w-[700px] lg:w-[1000px]">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="" class="font-bold text-xl block py-6"><i>AjaxCoding</i></a>
                </div>
                
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left "></span>
                    </button>
                    
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block w-[400px] lg:flex justify-between">
                        <li class="group flex px-3">
                            <a href="#home" class="font-medium text-base text-slate-900 py-2 group-hover:font-bold border-b-violet-700">Home</a>
                        </li>
                        <li class="group flex px-3">
                            <a href="#about" class="font-medium text-base text-slate-900 py-2 group-hover:font-bold border-b-violet-700">About</a>
                        </li>
                        <li class="group flex px-3">
                            <a href="#portfolio" class="font-medium text-base text-slate-900 py-2 group-hover:font-bold border-b-violet-700">Portfolio</a>
                        </li>
                        <li class="group flex px-3">
                            <a href="#contact" class="font-medium text-base text-slate-900 py-2 group-hover:font-bold border-b-violet-700">Contact</a>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- end Header Section -->

    <!-- Home Section -->
    <section id="home">
        <div class="w-full pt-20 mx-auto md:mt-0 md:flex items-center justify-between sm:w-[500px] md:w-[700px] lg:w-[950px] h-screen">
            <div class="text-center">
                <h1 class="font-bold text-5xl text-slate-100">AjaxCoding</h1>
                <p class="mt-3 text-slate-100">Kami bantu onlinekan bisnis Anda</p>
            </div>
            <div class="w-full md:w-[400px] relative">
                <div class="mt-14">
                    <img src="img/icon_home.png" alt="" class="w-2/3 md:w-full mx-auto">
                </div>
            </div>
        </div>
    </section>
    <!-- end Home Section -->

    <script src="js/navbar.js"></script>
</body>
</html>