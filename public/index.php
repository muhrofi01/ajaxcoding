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
                    <a href="" class="brand-logo font-bold text-xl block py-6 text-slate-100"><i>AjaxCoding</i></a>
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
                            <a href="#home" class="font-medium text-base text-slate-100 py-2 group-hover:font-bold nav-item">Home</a>
                        </li>
                        <li class="group flex px-3">
                            <a href="#about" class="font-medium text-base text-slate-100 py-2 group-hover:font-bold nav-item">About</a>
                        </li>
                        <li class="group flex px-3">
                            <a href="#portfolio" class="font-medium text-base text-slate-100 py-2 group-hover:font-bold nav-item">Portfolio</a>
                        </li>
                        <li class="group flex px-3">
                            <a href="#contact" class="font-medium text-base text-slate-100 py-2 group-hover:font-bold nav-item">Contact</a>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- end Header Section -->

    <!-- Home Section -->
    <section id="home" class="w-full">
        <div>
            <img src="img/bg_home.png" class="hidden md:block absolute -z-10 -translate-y-2" alt="">
        </div>
        <div class="w-full pt-20 mx-auto md:pt-0 md:flex items-center justify-between sm:w-[500px] md:w-[700px] lg:w-[950px] h-screen">
            <div class="text-center">
                <h1 class="font-bold text-5xl text-slate-100">AjaxCoding</h1>
                <p class="mt-3 text-slate-100">Kami bantu onlinekan bisnis Anda</p>
            </div>
            <div class="w-full md:w-[400px]">
                <div class="mt-14">
                    <img src="img/icon_home.png" alt="" class="w-2/3 md:w-full mx-auto">
                </div>
            </div>
        </div>
    </section>
    <!-- end Home Section -->

    <!-- About Section -->
    <section id="about" class="mt-24">
        <div class="">
            <div class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-900 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-10"></div>
            <div class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-700 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-20 scale-x-[1.1]"></div>
            <div class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-500 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-30 scale-x-[1.2]"></div>
            <div class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-300 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-40 scale-x-[1.3]"></div>
            <h1 class="text-center text-5xl font-bold text-slate-100">About</h1>
        </div>
        <div class="w-full mt-8 px-6 m-auto">
           <div class="grid grid-cols-1 gap-2 m-auto sm:w-[600px] sm:grid-cols-3 md:w-[700px]">
                <div class="w-full py-2 bg-slate-400 text-center rounded-full font-semibold hover:bg-sky-700 hover:text-slate-100">Invitation</div>
                <div class="w-full py-2 bg-slate-400 text-center rounded-full font-semibold hover:bg-sky-700 hover:text-slate-100">Online Shop</div>
                <div class="w-full py-2 bg-slate-400 text-center rounded-full font-semibold hover:bg-sky-700 hover:text-slate-100">Company Profile</div>
           </div>
        </div>
        <div class="w-[850px] h-[300px] bg-slate-400 rounded-2xl m-auto mt-9 flex justify-evenly items-center">
            <div class="w-[250px] h-[250px] bg-slate-100 rounded-2xl"></div>
            <div class="w-[250px] h-[250px] bg-slate-100 rounded-2xl"></div>
            <div class="w-[250px] h-[250px] bg-slate-100 rounded-2xl"></div>
        </div>
    </section>
    <!-- end About Section -->

    <!-- About Section -->
    <section id="about" class="mt-24">
        <div class="">
            <div class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-900 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-10"></div>
            <div class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-700 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-20 scale-x-[1.1]"></div>
            <div class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-500 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-30 scale-x-[1.2]"></div>
            <div class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-300 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-40 scale-x-[1.3]"></div>
            <h1 class="text-center text-5xl font-bold text-slate-100">Portfolio</h1>
        </div>
        <div class="w-[850px] m-auto mt-9 flex justify-evenly items-center relative">
            <div class="w-[350px] h-[200px] bg-slate-400 rounded-2xl group">
                <div class="w-[350px] h-16 hidden bg-sky-500 absolute z-10 top-1/2 -translate-y-1/2 opacity-90 group-hover:block">
                    <h1 class="text-3xl font-bold w-full text-slate-100 text-center absolute top-1/2 -translate-y-1/2">Ini Portfolio Pertama</h1>
                </div>
            </div>
            <div class="w-[350px] h-[200px] bg-slate-400 rounded-2xl group">
                <div class="w-[350px] h-16 hidden bg-sky-500 absolute z-10 top-1/2 -translate-y-1/2 opacity-90 group-hover:block">
                    <h1 class="text-3xl font-bold w-full text-slate-100 text-center absolute top-1/2 -translate-y-1/2">Ini Portfolio Pertama</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end About Section -->

     <!-- About Section -->
     <section id="about" class="mt-24">
        <div class="">
            <div class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-900 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-10"></div>
            <div class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-700 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-20 scale-x-[1.1]"></div>
            <div class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-500 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-30 scale-x-[1.2]"></div>
            <div class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-300 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-40 scale-x-[1.3]"></div>
            <h1 class="text-center text-5xl font-bold text-slate-100">Contact</h1>
        </div>
        <div class="relative">
            <div class="w-full h-[250px] bg-sky-700 absolute -z-10 bottom-0"></div>
            <div class="px-4">
                <div class="w-full mt-9 m-auto bg-sky-700 rounded-2xl sm:w-[500px] md:w-[700px]">
                    <form action="" class="p-5 ">
                        <div class="my-3">
                            <label for="" class="text-slate-100">
                                Nama
                                <input class="w-full rounded-md p-1" type="text" name="name">
                            </label>
                        </div>
                        <div class="my-3">
                            <label for="" class="text-slate-100">
                                Email
                                <input class="w-full rounded-md p-1" type="email" name="email">
                            </label>
                        </div>
                        <div class="my-3">
                            <label for="" class="text-slate-100">
                                No Telepon
                                <input class="w-full rounded-md p-1" type="text" name="no-telp">
                            </label>
                        </div>
                        <div class="my-3">
                            <label for="" class="text-slate-100">
                                Pesan
                                <textarea name="pesan" id="pesan" class="w-full rounded-md" rows="5"></textarea>
                            </label>
                        </div>
                        <div class="my-3">
                            <input type="submit" class="w-full rounded-full bg-sky-300 hover:bg-sky-500 hover:cursor-pointer py-2" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0369A1" fill-opacity="1" d="M0,96L40,96C80,96,160,96,240,122.7C320,149,400,203,480,202.7C560,203,640,149,720,154.7C800,160,880,224,960,213.3C1040,203,1120,117,1200,106.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> -->
    </section>
    <!-- end About Section -->

    <!-- Footer -->
    <footer class="w-full bg-sky-700 pt-5">
        <div class="m-auto w-fit font-semibold text-slate-100">&copy;Copyright AjaxCoding. All right reserved</div>
    </footer>

    <script src="js/navbar.js"></script>
</body>
</html>