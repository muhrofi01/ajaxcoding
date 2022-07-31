<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/output.css">
    <script src="https://kit.fontawesome.com/a92deab626.js" crossorigin="anonymous"></script>
    <style>
        .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
    </style>
    <title>AjaxCoding</title>
</head>

<body>
    <!-- Header Section -->
    <header class="absolute top-0 left-0 z-50 flex items-center w-full bg-transparent">
        <div class="w-full mx-auto sm:w-[500px] md:w-[700px] lg:w-[1000px]">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="" class="block py-6 text-xl font-bold brand-logo text-slate-100"><i>AjaxCoding</i></a>
                </div>

                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
                        <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
                        <span class="transition duration-300 ease-in-out hamburger-line"></span>
                        <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line "></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block w-[400px] lg:flex justify-between">
                            <li class="flex px-3 group">
                                <a href="#home"
                                    class="py-2 text-base font-medium text-slate-100 group-hover:font-bold nav-item">Home</a>
                            </li>
                            <li class="flex px-3 group">
                                <a href="#about"
                                    class="py-2 text-base font-medium text-slate-100 group-hover:font-bold nav-item">About</a>
                            </li>
                            <li class="flex px-3 group">
                                <a href="#product"
                                    class="py-2 text-base font-medium text-slate-100 group-hover:font-bold nav-item">Product</a>
                            </li>
                            <li class="flex px-3 group">
                                <a href="#portfolio"
                                    class="py-2 text-base font-medium text-slate-100 group-hover:font-bold nav-item">Portfolio</a>
                            </li>
                            <li class="flex px-3 group">
                                <a href="#contact"
                                    class="py-2 text-base font-medium text-slate-100 group-hover:font-bold nav-item">Contact</a>
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
            <img src="img/bg_home.png" class="absolute hidden -translate-y-2 lg:block -z-10" alt="">
        </div>
        <div class="w-full pt-20 mx-auto md:flex items-center justify-between sm:w-[500px] md:w-[700px] lg:w-[950px]">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-slate-100">AjaxCoding</h1>
                <p class="mt-3 text-slate-100">Kami bantu onlinekan bisnis Anda</p>
            </div>
            <div class="w-full md:w-[400px]">
                <div class="mt-14">
                    <img src="img/icon_home.png" alt="" class="w-2/3 mx-auto md:w-full">
                </div>
            </div>
        </div>
    </section>
    <!-- end Home Section -->

    <!-- About Section -->
    <section id="about" class="py-24">
        <div class="">
            <div
                class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-900 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-10">
            </div>
            <div
                class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-700 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-20 scale-x-[1.1]">
            </div>
            <div
                class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-500 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-30 scale-x-[1.2]">
            </div>
            <div
                class="w-[180px] h-[50px] -translate-y-[2px] bg-sky-300 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-40 scale-x-[1.3]">
            </div>
            <h1 class="text-5xl font-bold text-center text-slate-100">About</h1>
        </div>
        <div class="justify-around w-full px-6 m-auto mt-9 md:flex md:w-4/5 text-slate-900">
            <div class="px-4 mt-5 md:w-1/2">
                <h4 class="text-3xl font-semibold">Yuk, onlinekan bisnismu di AjaxCoding</h4>
                <p class="mt-2 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis porro
                    deserunt cumque, asperiores corrupti aperiam cupiditate blanditiis voluptate ipsam, hic doloremque
                    veritatis vero omnis at aspernatur quia neque eius ipsa.</p>
            </div>
            <div class="px-4 mt-5 md:w-1/2">
                <h4 class="text-2xl font-semibold">Mari menyewa jasa kami</h4>
                <p class="mt-2 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus animi
                    laboriosam corrupti esse quia perspiciatis natus quasi molestiae quos quo.</p>
                <div class="flex justify-start mt-4">
                    <a target="_blank" href="https://www.instagram.com/ajaxcoding.id/"><span
                            class="w-12 h-12 mr-4 border-[3px] border-slate-500 flex justify-center items-center rounded-full hover:border-sky-700"><i
                                class="fab fa-instagram fa-2x"></i></span></a>
                    <a href="mailto:ajaxcodingid@gmail.com"><span
                            class="w-12 h-12 mr-4 border-[3px] border-slate-500 flex justify-center items-center rounded-full hover:border-sky-700"><i
                                class="fas fa-envelope fa-2x"></i></span></a>
                    <a target="_blank" href="https://wa.me/6289691077371"><span
                            class="w-12 h-12 mr-4 border-[3px] border-slate-500 flex justify-center items-center rounded-full hover:border-sky-700"><i
                                class="fab fa-whatsapp fa-2x"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end About Section -->

    <!-- Product Section -->
    <section id="product" class="py-24">
        <div class="relative z-0">
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-900 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-10">
            </div>
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-700 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-20 scale-x-[1.1]">
            </div>
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-500 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-30 scale-x-[1.2]">
            </div>
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-300 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-40 scale-x-[1.3]">
            </div>
            <h1 class="text-5xl font-bold text-center text-slate-100">Product</h1>
        </div>
        <div class="w-full px-6 m-auto mt-9">
            <div class="grid grid-cols-1 gap-2 m-auto sm:w-[600px] sm:grid-cols-3 md:w-[700px]">
                <div class="w-full py-2 font-semibold text-center rounded-full bg-grayAjax hover:bg-yellowAjax">
                    Invitation</div>
                <div class="w-full py-2 font-semibold text-center rounded-full bg-grayAjax hover:bg-yellowAjax">Online
                    Shop</div>
                <div class="w-full py-2 font-semibold text-center rounded-full bg-grayAjax hover:bg-yellowAjax">Company
                    Profile</div>
            </div>
        </div>
        <!-- Swiper -->
        

            <div class="px-5">
                <div class="image-container xl:w-[850px] lg:w-[750px] md:w-[650px] h-[300px] bg-slate-400 rounded-2xl m-auto mt-9 flex justify-evenly items-center px-7"
                    id="imgs">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 1</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 2</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 3</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 4</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 5</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 6</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 7</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 8</div>
                                <div class="swiper-slide h-64 m-auto rounded-lg">Slide 9</div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                </div>
            </div>
    </section>
    <!-- end Product Section -->

    
        

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 w-100" style="background-image: url('img/Union.png'); background-size: 660px;">
        <div class="relative z-0">
            <div
                class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-900 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-10">
            </div>
            <div
                class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-700 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-20 scale-x-[1.1]">
            </div>
            <div
                class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-500 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-30 scale-x-[1.2]">
            </div>
            <div
                class="w-[250px] h-[50px] -translate-y-[2px] bg-sky-300 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-40 scale-x-[1.3]">
            </div>
            <h1 class="text-5xl font-bold text-center text-slate-100">Portfolio</h1>
        </div>
        <div class="w-[850px] m-auto mt-9 flex justify-evenly items-center relative">
            <div class="w-[350px] h-[200px] bg-slate-400 rounded-2xl group">
                <div
                    class="w-[350px] h-16 hidden bg-sky-500 absolute z-10 top-1/2 -translate-y-1/2 opacity-90 group-hover:block">
                    <h1 class="absolute w-full text-3xl font-bold text-center -translate-y-1/2 text-slate-100 top-1/2">
                        Ini Portfolio Pertama</h1>
                </div>
            </div>
            <div class="w-[350px] h-[200px] bg-slate-400 rounded-2xl group">
                <div
                    class="w-[350px] h-16 hidden bg-sky-500 absolute z-10 top-1/2 -translate-y-1/2 opacity-90 group-hover:block">
                    <h1 class="absolute w-full text-3xl font-bold text-center -translate-y-1/2 text-slate-100 top-1/2">
                        Ini Portfolio Pertama</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="pt-24">
        <div class="">
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-900 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-10">
            </div>
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-700 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-20 scale-x-[1.1]">
            </div>
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-500 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-30 scale-x-[1.2]">
            </div>
            <div
                class="w-[220px] h-[50px] -translate-y-[2px] bg-sky-300 -skew-x-12 absolute left-1/2 -translate-x-1/2 -z-40 scale-x-[1.3]">
            </div>
            <h1 class="text-5xl font-bold text-center text-slate-100">Contact</h1>
        </div>
        <div class="relative">
            <svg class="absolute bottom-0 -z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0C4A6E" fill-opacity="1" d="M0,96L1440,64L1440,320L0,320Z"></path>
            </svg>
            <!-- <svg class="absolute bottom-0 -z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0C4A6E" fill-opacity="1" d="M0,160L12.6,154.7C25.3,149,51,139,76,138.7C101.1,139,126,149,152,160C176.8,171,202,181,227,165.3C252.6,149,278,107,303,106.7C328.4,107,354,149,379,181.3C404.2,213,429,235,455,218.7C480,203,505,149,531,112C555.8,75,581,53,606,74.7C631.6,96,657,160,682,165.3C707.4,171,733,117,758,85.3C783.2,53,808,43,834,58.7C858.9,75,884,117,909,149.3C934.7,181,960,203,985,213.3C1010.5,224,1036,224,1061,202.7C1086.3,181,1112,139,1137,144C1162.1,149,1187,203,1213,234.7C1237.9,267,1263,277,1288,272C1313.7,267,1339,245,1364,213.3C1389.5,181,1415,139,1427,117.3L1440,96L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path></svg> -->
            <div class="w-full mt-9 m-auto bg-blueformAjax rounded-2xl sm:w-[500px] md:w-[700px]">
                <form action="" class="p-5 ">
                    <div class="my-3">
                        <label for="" class="text-slate-100">
                            Nama
                            <input class="w-full p-1 rounded-md" type="text" name="name" placeholder="Nama Lengkap">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="" class="text-slate-100">
                            Email
                            <input class="w-full p-1 rounded-md" type="email" name="email" placeholder="Alamat Email">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="" class="text-slate-100">
                            No Telepon
                            <input class="w-full p-1 rounded-md" type="text" name="no-telp" placeholder="Nomor Telepon">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="" class="text-slate-100">
                            Pesan
                            <textarea name="pesan" id="pesan" class="w-full rounded-md" rows="5"
                                placeholder="Pesan"></textarea>
                        </label>
                    </div>
                    <div class="my-3">
                        <input type="submit"
                            class="w-full py-2 rounded-full bg-grayAjax hover:bg-yellowAjax hover:cursor-pointer"
                            value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end Contact Section -->


    

    <!-- Footer -->
    <section class="py-8 bg-blueoldAjax"></section>
    <footer class="py-5 w-100 bg-blueoldAjax">
        <div class="m-auto font-semibold w-fit text-slate-100">Copyright&copy; AjaxCoding. All right reserved</div>
    </footer>

    <script src="js/navbar.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>

</html>