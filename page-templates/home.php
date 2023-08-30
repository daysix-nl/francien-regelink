<?php
/**
 * Template name: Homepage
 */


 get_header(); ?>
 
 <!-- HEADER SECTION -->
 <section>
    <div class="relative mt-[12px] mx-[12px] w-[calc(100vw-24px)] h-[calc(100vh-12px)] md:mt-[25px] md:mx-[25px] md:w-[calc(100vw-50px)] md:h-[calc(100vh-25px)] lg:mt-[21px] lg:mx-[21px] lg:w-[calc(100vw-42px)] lg:h-[calc(100vh-21px)] xl:mt-[26px] xl:mx-[26px] xl:w-[calc(100vw-52px)] xl:h-[calc(100vh-26px)] md:max-h-[998px] max-h-[722px] lg:max-h-[701px] xl:max-h-[791px] header-bg rounded-[28px] overflow-hidden">
        <!-- HEADER CONTAINER -->
        <header class="mx-auto z-[2] relative">
            <!-- NAVBAR CONTAINER -->
            <div class="pl-[22px] pr-2 md:pl-4 md:pr-3 lg:pl-7 lg:pr-5 xl:pl-[75px] xl:pr-[53px] py-2 md:py-[25px] lg:py-[22px] xl:py-[28px]">
                <!-- NAVBAR -->
                <div class="h-[41.21px] md:h-[42.54px] xl:h-[48px] flex items-center justify-between">
                    <!-- MENU -->
                    <div class="hidden lg:flex lg:space-x-[55px] xl:space-x-6">
                        <a href="#over" class="lg:text-17 lg:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal">Over</a>
                        <a href="#pakketten" class="lg:text-17 lg:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal">Pakketten</a>
                        <a href="#media" class="lg:text-17 lg:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal">Media</a>
                        <a href="#indeklas" class="lg:text-17 lg:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal">In de klas</a>
                        <a href="#reviews" class="lg:text-17 lg:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal">Reviews</a>
                        <a href="#boeken" class="lg:text-17 lg:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal">Boeken</a>
                      
                    </div>
                    <!-- HAMBURGER -->
                    <button class="relative lg:hidden w-[49.44px] h-[46.07px] md:w-[53.9px] md:h-[50.22px] bg-[#FFFFFF] rounded-[6px] p-[13px] flex justify-center items-center button-navbar">
                       <div class="space-y-[5px] w-[inherit]"> 
                            <span class="h-[2px] bg-black border-md w-full block"></span>
                            <span class="h-[2px] bg-black border-md w-full block"></span>
                            <span class="h-[2px] bg-black border-md w-full block"></span>
                        </div>
                        <span class="text-16 leading-16 md:text-17 md:leading-17 font-satoshi font-normal w-[49.44px] md:w-[53.9px] text-center absolute left-0 right-0 bottom-[-25px]">Menu</span>
                    </button>
                    <!-- BUTTON -->
                    <a href="#contact" class="h-[41.21px] w-[123.47px] md:h-[42.54px] md:w-[147.12px] xl:h-[48px] xl:w-[166px] bg-black flex items-center justify-center rounded-[9px] text-white hover:bg-[#B5F964] hover:text-black duration-300"><span class="text-16 leading-16 md:text-17 md:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal">Contact</span></a>
                </div>
            </div>
        </header>
        <div class="navbar-overlay lg:hidden">
            <div class="px-3 py-5 relative h-full">
                <div class="flex w-full">          
                    <button class="flex  ml-auto close-button w-3 h-3 z-10 relative">
                        <span class="h-[2px] w-[23px] bg-black border-md block rotate-[-45deg] absolute top-0 mt-1"></span>
                        <span class="h-[2px] w-[23px] bg-black border-md block rotate-[45deg] absolute top-0 translate-x-[0px] translate-y-[0px] mt-1"></span>
                    </button>   
                </div>
                <div class="w-full block flex-col items-center overflow-y-scroll element-navbar pb-4 pt-7">
                    <ul class="w-full space-y-4 pb-4 ul-animation">
                        <li class="flex justify-center"><a class="navbar-link text-[#222222] text-30 leading-35 text-center" href="#over">Over</a></li>
                        <li class="flex justify-center"><a class="navbar-link text-[#222222] text-30 leading-35 text-center" href="#pakketten">Pakketten</a></li>
                        <li class="flex justify-center"><a class="navbar-link text-[#222222] text-30 leading-35 text-center" href="#media">Media</a></li>
                        <li class="flex justify-center"><a class="navbar-link text-[#222222] text-30 leading-35 text-center" href="#indeklas">In de klas</a></li>
                        <li class="flex justify-center"><a class="navbar-link text-[#222222] text-30 leading-35 text-center" href="#reviews">Reviews</a></li>
                        <li class="flex justify-center"><a class="navbar-link text-[#222222] text-30 leading-35 text-center" href="#boeken">Boeken</a></li>
                    </ul>
                    <a href="#contact" class="contact-button h-[41.21px] w-[123.47px] md:h-[42.54px] md:w-[147.12px] xl:h-[48px] xl:w-[166px] bg-black flex items-center justify-center rounded-[9px] text-white hover:bg-[#B5F964] hover:text-black duration-300 mt-0 mx-auto"><span class="text-16 leading-16 md:text-17 md:leading-17 xl:text-20 xl:leading-20 font-satoshi font-normal ">Contact</span></a>
                </div>
            </div>
        </div>
        <!-- HEADER TEKST -->
        <div class="h-[calc(100%-81.21px)] md:h-[calc(100%-92.54px)] lg:h-[calc(100%-86.54px)] xl:h-[calc(100%-104px)] z-[4] relative">
            <div class="container h-full grid items-start lg:items-center pt-4 lg:pt-[unset]"> 
                <div class="text-center lg:text-left col-span-1 w-fit mx-auto lg:mx-[unset] pb-[66px]">
                    <h1 class="text-[82px] leading-[60px] md:text-[100px] md:leading-[70px] lg:text-[130px] lg:leading-[100px] xl:text-[150px] xl:leading-[110px] max-w-[325px] md:max-w-[583px] lg:max-w-[520px] xl:max-w-[672px] mx-auto lg:mx-[unset] font-darker font-bold">Francien Regelink</h1>
                    <p class="text-[20px] leading-[30px] md:text-[18px] md:leading-[30px] lg:text-[25px] lg:leading-[45px] xl:text-[28px] xl:leading-[50px] max-w-[298px] md:max-w-[583px] lg:max-w-[498px] xl:max-w-[599px] mx-auto lg:mx-[unset] font-satoshi font-semibold pt-4 xl:pt-[65px]">De ervaringsdeskundige van online shame sexting. Staat wekelijks voor de klas in Nederland en België.</p>
                 </div> 
             </div>
        </div>
        <!-- HEADER AFBEELDING -->
        <div class="absolute bottom-0 left-0 right-0 top-0 z-[1]">
            <div class="container flex justify-end items-end h-full">
                <div class="relative mx-auto lg:mr-[-20px] xl:mr-[-20px]">
                    <!-- PROFIEL AFBEELDING -->
                    <img src="/wp-content/themes/day-six/img/local/francien-header.png" alt="" class="h-[298.14px] min-w-[253.74px] md:h-[582px] xl:h-[657px] px-4">
                    <!-- BERICHT: VOORLICHTING OVER ONLINE SHAMING & SEXTING -->
                    <div class="absolute left-[-10px] top-5 md:left-0 md:top-[45%]">
                        <div class="relative">
                            <svg class="w-[134px] h-[34px] md:w-[194px] md:h-[52px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194.001 52.288">
                                <g id="Group_52" data-name="Group 52" transform="translate(0)">
                                    <rect id="Rectangle_119" data-name="Rectangle 119" width="184.337" height="52.288" rx="16" transform="translate(9.664 0)" fill="#e4e3e9"/>
                                    <path id="Path_3" data-name="Path 3" d="M8.806,3.831c2.172,6.81,10.472,7.461,10.522,8.9s-8.746,3.282-10.522,8.129S0,23.007,0,23.007V1.366S6.633-2.979,8.806,3.831Z" transform="translate(19.327 46.133) rotate(180)" fill="#e4e3e9"/>
                                </g>
                            </svg>
                            <p class="text-8 leading-11 md:text-13 md:leading-20 max-w-[114px] md:max-w-[198px] text-[#000000] absolute top-1/2 left-[60%] md:left-[62%] transform -translate-x-1/2 -translate-y-1/2 w-full">Voorlichting over online shaming & sexting.</p>
                        </div>
                    </div>
                    <!-- BERICHT: MET ELKAAR IN GESPREK GAAN -->
                    <div class="absolute right-[-10px] top-6 md:right-6 md:top-[45%]">
                        <div class="relative">
                            <svg class="w-[120px] h-[42px] md:w-[185px] md:h-[63px]" id="Group_61" data-name="Group 61" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185.139 63.857">
                                <g id="Group_53" data-name="Group 53" transform="translate(185.139 63.857) rotate(180)">
                                    <rect id="Rectangle_119" data-name="Rectangle 119" width="176.361" height="48.791" rx="18" transform="translate(8.777)" fill="#2499f3"/>
                                    <path id="Path_3" data-name="Path 3" d="M8.806,3.831c2.172,6.81,10.472,7.461,10.522,8.9s-8.746,3.282-10.522,8.129S0,23.007,0,23.007V1.366S6.633-2.979,8.806,3.831Z" transform="translate(19.327 30.181) rotate(180)" fill="#2499f3"/>
                                </g>
                                <div class="w-[20px] h-[20px] md:w-[30px] md:h-[30px] bg-[#e61010] rounded-full absolute top-0 md:top-[0px] right-[15px] md:right-[20px] flex justify-center items-center text-white text-11  md:text-14 font-bold bounce">
                                        17
                                </div>
                            </svg>
                            <p class="text-8 leading-11 md:text-13 md:leading-20 max-w-[114px] md:max-w-[124px] text-[#fff] absolute top-[61%] left-[58%] md:left-[45%] transform -translate-x-1/2 -translate-y-1/2 w-full">Met elkaar het </br> gesprek aan aan.</p>
                        </div>
                    </div>
                    <!-- BERICHT: 🍆📱🤤🍒🍑 -->
                    <div class="absolute left-[25px] top-12 md:top-[60%] md:left-[35px] z-[-1]">
                        <div class="relative">
                            <svg class="w-[93px] h-[25px] md:w-[144px] md:h-[38px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 144.12 38.686">
                                <g id="Group_70" data-name="Group 70" transform="translate(0)">
                                    <g id="Group_59" data-name="Group 59" transform="translate(0 0)">
                                    <g id="Group_51" data-name="Group 51">
                                        <rect id="Rectangle_119" data-name="Rectangle 119" width="135.343" height="38.686" rx="17" transform="translate(8.777 0)" fill="#e4e3e9"/>
                                        <path id="Path_3" data-name="Path 3" d="M8.806,3.831c2.172,6.81,10.472,7.461,10.522,8.9s-8.746,3.282-10.522,8.129S0,23.007,0,23.007V1.366S6.633-2.979,8.806,3.831Z" transform="translate(19.327 34.612) rotate(180)" fill="#e4e3e9"/>
                                    <rect id="Image_53" data-name="Image 53" width="109" height="27" transform="translate(22.769 5.645)" fill="url(#pattern)"/>
                                </g>
                            </svg>
                            <div class="absolute text-12 leading-13 md:text-16 md:leading-18 max-w-[114px] md:max-w-[198px] top-[50%] left-[67%] md:left-[67%] transform -translate-x-1/2 -translate-y-1/2 w-full bg-transparent">🍆📱🤤🍒🍑</div>
                        </div>
                    </div>
                    <!-- BERICHT: 🤳🤳🤳🤳🤳 -->
                    <div class="absolute right-[5px] top-[140px] md:right-[30px] md:top-[62%] z-[-1]">
                        <div class="relative">
                            <svg class="w-[94px] h-[20px] md:w-[149px] md:h-[32px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 149.573 32.158">
                                <g id="Group_62" data-name="Group 62" transform="translate(0 0)">
                                    <g id="Group_60" data-name="Group 60" transform="translate(149.022 32.158) rotate(180)">
                                    <rect id="Rectangle_119" data-name="Rectangle 119" width="139.359" height="32.158" rx="10" transform="translate(9.664)" fill="#2499f3"/>
                                    <path id="Path_3" data-name="Path 3" d="M8.806,3.831c2.172,6.81,10.472,7.461,10.522,8.9s-8.746,3.282-10.522,8.129S0,23.007,0,23.007V1.366S6.633-2.979,8.806,3.831Z" transform="translate(19.327 26.89) rotate(180)" fill="#2499f3"/>
                                    </g>
                                </g>
                            </svg>
                            <div class="absolute text-12 leading-13 md:text-16 md:leading-18  md:max-w-[198px] top-[70%] md:top-1/2 right-[-46%] md:right-[-53%] transform -translate-x-1/2 -translate-y-1/2 w-full">🤳🤳🤳🤳🤳🤳🤳🤳</div>
                        </div>
                    </div>
                    <!-- BERICHT: OOK VOOR OUDERS -->
                    <div class="absolute right-[-15px] top-[190px] md:right-[20%] md:top-[71%]">
                        <svg class="w-[121px] h-[17px] md:w-[169px] md:h-[26px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 169.962 26.844">
                            <g id="Group_54" data-name="Group 54" transform="translate(169.962 26.844) rotate(180)">
                                <rect id="Rectangle_119" data-name="Rectangle 119" width="163.921" height="26.844" rx="10" transform="translate(6.042)" fill="#2499f3"/>
                                <path id="Path_3" data-name="Path 3" d="M7.156,3.831c1.765,6.81,8.51,7.461,8.55,8.9S8.6,16.012,7.156,20.859,0,23.007,0,23.007V1.366S5.39-2.979,7.156,3.831Z" transform="translate(15.706 25.133) rotate(180)" fill="#2499f3"/>
                            </g>
                            <text id="Ook_voor_de_ouders." data-name="Ook voor de ouders." transform="translate(12.842 16.937)" fill="#fff" font-size="13" font-family="Helvetica"><tspan x="0" y="0">Ook voor de ouders.</tspan></text>
                        </svg>
                    </div>
                    <!-- BERICHT: HOEZO DAN? -->
                    <div class="absolute left-[5px] top-[195px] md:top-[76%] md:left-[-25px]">
                        <div class="relative">
                            <svg class="w-[89px] h-[23px] md:w-[116px] md:h-[36px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.591 36.485">
                                <g id="Group_56" data-name="Group 56" transform="translate(0)">
                                    <rect id="Rectangle_119" data-name="Rectangle 119" width="106.928" height="36.485" rx="14" transform="translate(9.664 0)" fill="#e4e3e9"/>
                                    <path id="Path_3" data-name="Path 3" d="M8.806,3.831c2.172,6.81,10.472,7.461,10.522,8.9s-8.746,3.282-10.522,8.129S0,23.007,0,23.007V1.366S6.633-2.979,8.806,3.831Z" transform="translate(19.327 31.882) rotate(180)" fill="#e4e3e9"/>
                                </g>
                            </svg>
                            <div class="absolute text-9 leading-13 md:text-14 md:leading-18 max-w-[114px] md:max-w-[198px] top-[50%] left-[75%] md:left-[70%] transform -translate-x-1/2 -translate-y-1/2 w-full">Hoezo dan?</div>
                        </div>
                    </div>
                    <!-- BERICHT: OMDAT IK ZELF SLACHTOFFER BEN -->
                    <div class="absolute right-[25px] top-[230px] md:right-[3px] md:top-[83%]">
                        <div class="relative">
                            <svg class="w-[110px] h-[31px] md:w-[170px] md:h-[48px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170.147 48.826">
                                <g id="Group_55" data-name="Group 55" transform="translate(170.147 48.826) rotate(180)">
                                    <rect id="Rectangle_119" data-name="Rectangle 119" width="160.483" height="48.826" rx="10" transform="translate(9.664)" fill="#2499f3"/>
                                    <path id="Path_3" data-name="Path 3" d="M8.806,3.831c2.172,6.81,10.472,7.461,10.522,8.9s-8.746,3.282-10.522,8.129S0,23.007,0,23.007V1.366S6.633-2.979,8.806,3.831Z" transform="translate(19.327 33.919) rotate(180)" fill="#2499f3"/>
                                </g>
                            </svg>
                            <div class="absolute text-9 leading-13 md:text-14 md:leading-18 max-w-[114px] md:max-w-[198px] top-[50%] md:top-1/2 right-[-58%] md:right-[-57%] transform -translate-x-1/2 -translate-y-1/2 w-full text-white">
                                Omdat ik zelf </br> slachtoffer ben.
                            </div>
                        </div>
                    </div>
                    <!-- BERICHT: IS AAN HET TYPEN... -->
                    <div class="absolute left-[35px] top-[225px] md:top-[88%] md:left-[15%]">
                        <div class="relative">
                             <svg class="w-[56px] h-[76px] md:w-[106px] md:h-[39px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.153 39.211">
                                <g id="Group_58" data-name="Group 58" transform="translate(0)">
                                    <rect id="Rectangle_119" data-name="Rectangle 119" width="96.489" height="39.211" rx="14" transform="translate(9.664 0)" fill="#e4e3e9"/>
                                    <path id="Path_3" data-name="Path 3" d="M8.806,3.831c2.172,6.81,10.472,7.461,10.522,8.9s-8.746,3.282-10.522,8.129S0,23.007,0,23.007V1.366S6.633-2.979,8.806,3.831Z" transform="translate(19.327 34.608) rotate(180)" fill="#e4e3e9"/>
                                </g>
                            </svg>
                            <div class="absolute left-[5px] md:left-1 right-0 top-0 bottom-0 flex items-center justify-center">
                                <div class="loader">
                                    <span class="loader__element"></span>
                                    <span class="loader__element"></span>
                                    <span class="loader__element"></span>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
 </section>

 <section id="pakketten" class="">
    <div class="container xl:mt-10 xl:mb-7 lg:mt-8 lg:mb-[65px] md:mt-[65px] md:mb-[55px] mt-[75px] mb-[45px]  w-[300px] md:w-full">
        <h2 class="text-center font-satoshi font-black text-35 leading-50 md: md:text-40 md:leading-48 lg:text-52 lg:leading-62 xl:text-60 xl:leading-72 text-[#222222]">Verschillende mogelijkheden</h2>
    </div>
    <div class="swiper-overflow-container overflow-hidden">
        <div class="container">

            <div class="swiper-container relative md:pb-5 pb-7 lg:pb-0 overflow-hidden">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <!-- Slides -->
                    <div class="swiper-slide cursor-pointer relative pt-[15px] flex flex-col h-[auto_!important]">
                        <div class="item cursor-pointer h-full bg-white flex flex-col pt-[35px] lg:pt-4 pb-2 px-2 lg:px-[25px] lg:pb-[25px] xl:pt-5 xl:pb-3 rounded-[8px] relative">

                            <h3 class="font-satoshi font-bold text-24 leading-26 md:text-20 md:leading-24 lg:text-28 lg:leading-35 xl:text-32 xl:leading-40 mb-1">Voorlichting</h3>
                            <p class="flex font-satoshi font-medium text-13 leading-20 md:text-12 md:leading-21 lg:text-16 lg:leading-25 xl:text-19 xl:leading-30 text-[#222222]">Social media gebruik</p>
                            <div class="mt-[15px] mb-[25px] flex">
                                <p class="font-darker text-35 leading-21 md:text-32 md:leading-19 lg:text-44 lg:leading-26 xl:text-50 xl:leading-30 font-semibold">€150</p>
                                <p class="flex font-satoshi font-medium text-15  md:text-12  lg:text-15 xl:text-17  text-[#222222] leading-[6px] text-end  items-end ml-[10px]">Per klas </p>
                            </div>
                            <p class="flex font-satoshi font-medium text-15 leading-20 md:text-12 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">70 - 90 minuten</p>
                            <div class="h-[0.5px] bg-[#707070]/[0.15] mt-2 mb-2 md:mb-[15px] lg:mb-2"></div>
                            <h4 class="pb-[10px] text-16 leading-29 md:text-13 md:leading-27 lg:text-16 lg:leading-36 xl:text-18 xl:leading-40 font-satoshi font-bold">Inclusief:</h4>
                            <ul class="pb-5 md:pb-2 lg:pb-3 xl:pb-[35px]">
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Interactief lesprogramma</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Voorlichting</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Vragen / Napraat</li>
                            </ul>
                            <a class="mt-auto bg-[#79314E] rounded-[6px] lg:rounded-[11px] text-center h-5 md:h-[44px] lg:h-[56px] xl:h-[62px] text-white flex justify-center items-center font-satoshi text-15 md:text-13 lg:text-17 font-medium hover:opacity-80 transition-opacity" href="">Offerte aanvragen</a>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer relative pt-[15px] flex flex-col h-[auto_!important]">
                        <div class="w-fit ml-[25px] md:ml-[15px] relative mt-[-11px] lg:mt-[-15px] xl:mt-[-16px] z-10 bg-[#B5F964] h-[22px] lg:h-[29px] xl:h-[32px] rounded-3xl px-2 flex justify-center items-center">
                            <p class="text-10 leading-22 lg:text-12 lg:leading-34 xl:text-14 xl:leading-40 font-bold font-satoshi text-[#000000]">Meest gekozen</p>
                        </div>
                        <div class="item cursor-pointer h-full mt-[-11px] lg:mt-[-15px] xl:mt-[-16px] bg-white flex flex-col pt-[35px] lg:pt-4 pb-2 px-2 lg:px-[25px] lg:pb-[25px] xl:pt-5 xl:pb-3 rounded-[8px] relative">

                            <h3 class="font-satoshi font-bold text-24 leading-26 md:text-20 md:leading-24 lg:text-28 lg:leading-35 xl:text-32 xl:leading-40 mb-1">Voorlichting</h3>
                            <p class="flex font-satoshi font-medium text-13 leading-20 md:text-12 md:leading-21 lg:text-16 lg:leading-25 xl:text-19 xl:leading-30 text-[#222222]">Shame sexting</p>
                            <div class="mt-[15px] mb-[25px] flex">
                                <p class="font-darker text-35 leading-21 md:text-32 md:leading-19 lg:text-44 lg:leading-26 xl:text-50 xl:leading-30 font-semibold">€150</p>
                                <p class="flex font-satoshi font-medium text-15  md:text-12  lg:text-15 xl:text-17  text-[#222222] leading-[6px] text-end  items-end ml-[10px]">Per klas </p>
                            </div>
                            <p class="flex font-satoshi font-medium text-15 leading-20 md:text-12 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">70 - 90 minuten</p>
                            <div class="h-[0.5px] bg-[#707070]/[0.15] mt-2 mb-2 md:mb-[15px] lg:mb-2"></div>
                            <h4 class=" pb-[10px] text-16 leading-29 md:text-13 md:leading-27 lg:text-16 lg:leading-36 xl:text-18 xl:leading-40 font-satoshi font-bold">Inclusief:</h4>
                            <ul class="pb-5 md:pb-2 lg:pb-3 xl:pb-[35px]">
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Interactief lesprogramma</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Voorlichting</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Vragen / Napraat</li>
                            </ul>
                            <a class="mt-auto bg-[#79314E] rounded-[6px] lg:rounded-[11px] text-center h-5 md:h-[44px] lg:h-[56px] xl:h-[62px] text-white flex justify-center items-center font-satoshi text-15 md:text-13 lg:text-17 font-medium hover:opacity-80 transition-opacity" href="">Offerte aanvragen</a>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer pt-[15px] flex flex-col h-[auto_!important]">
                        <div class="item cursor-pointer bg-white h-full flex flex-col pt-[35px] lg:pt-4 pb-2 px-2 lg:px-[25px] lg:pb-[25px] xl:pt-5 lg:pb-3 rounded-[8px]">
                            <h3 class="font-satoshi font-bold text-24 leading-26 md:text-20 md:leading-24 lg:text-28 lg:leading-35 xl:text-32 xl:leading-40 mb-1">Ouderavond</h3>
                            <p class="flex font-satoshi font-medium text-13 leading-20 md:text-12 md:leading-21 lg:text-16 lg:leading-25 xl:text-19 xl:leading-30 text-[#222222]">Social media gebruik kind</p>
                            <div class="mt-[15px] mb-[25px] flex">
                                <p class="font-darker text-35 leading-21 md:text-32 md:leading-19 lg:text-44 lg:leading-26 xl:text-50 xl:leading-30 font-semibold">€450</p>
                            </div>
                            <p class="flex font-satoshi font-medium text-15 leading-20 md:text-12 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">70 - 90 minuten</p>
                            <div class="h-[0.5px] bg-[#707070]/[0.15] mt-2 mb-2 md:mb-[15px] lg:mb-2"></div>
                            <h4 class=" pb-[10px] text-16 leading-29 md:text-13 md:leading-27 lg:text-16 lg:leading-36 xl:text-18 xl:leading-40 font-satoshi font-bold">Inclusief:</h4>
                            <ul class="pb-5 md:pb-2 lg:pb-3 xl:pb-[35px]">
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Interactief lesprogramma</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Voorlichting</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Vragen / Napraat</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">5 Boeken</li>
                            </ul>
                            <a class="mt-auto bg-[#79314E] rounded-[6px] lg:rounded-[11px] text-center h-5 md:h-[44px] lg:h-[56px] xl:h-[62px] text-white flex justify-center items-center font-satoshi text-15 md:text-13 lg:text-17 font-medium hover:opacity-80 transition-opacity" href="">Offerte aanvragen</a>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer pt-[15px] flex flex-col h-[auto_!important]">
                        <div class="item cursor-pointer bg-white h-full flex flex-col pt-[35px] lg:pt-4 pb-2 px-2 lg:px-[25px] lg:pb-[25px] xl:pt-5 lg:pb-3 rounded-[8px]">
                            <h3 class="font-satoshi font-bold text-24 leading-26 md:text-20 md:leading-24 lg:text-28 lg:leading-35 xl:text-32 xl:leading-40 mb-1">Combi Pakket</h3>
                            <p class="flex font-satoshi font-medium text-13 leading-20 md:text-12 md:leading-21 lg:text-16 lg:leading-25 xl:text-19 xl:leading-30 text-[#222222]">Voorlichting + ouderavond</p>
                            <div class="mt-[15px] mb-[25px] flex">
                                <p class="font-darker text-35 leading-21 md:text-32 md:leading-19 lg:text-44 lg:leading-26 xl:text-50 xl:leading-30 font-semibold">€600</p>
                            </div>
                            <p class="flex font-satoshi font-medium text-15 leading-20 md:text-12 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">70 - 90 minuten</p>
                            <div class="h-[0.5px] bg-[#707070]/[0.15] mt-2 mb-2 md:mb-[15px] lg:mb-2"></div>
                            <h4 class=" pb-[10px] text-16 leading-29 md:text-13 md:leading-27 lg:text-16 lg:leading-36 xl:text-18 xl:leading-40 font-satoshi font-bold">Inclusief:</h4>
                            <ul class="pb-5 md:pb-2 lg:pb-3 xl:pb-[35px]">
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Interactief lesprogramma</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Voorlichting</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">Vragen / Napraat</li>
                                <li class="flex font-satoshi font-medium text-15 leading-20 md:text-11 md:leading-18 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 text-[#222222]">5 Boeken</li>
                            </ul>
                            <a class="mt-auto bg-[#79314E] rounded-[6px] lg:rounded-[11px] text-center h-5 md:h-[44px] lg:h-[56px] xl:h-[62px] text-white flex justify-center items-center font-satoshi text-15 md:text-13 lg:text-17 font-medium hover:opacity-80 transition-opacity " href="">Offerte aanvragen</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>
 </section>

<section  class="bg-card xl:pt-9 xl:pb-[160px] lg:pt-8 lg:pb-[140px] md:pt-7 md:pb-[130px] pt-6 pb-5">
    <div class=" flex">
        <img class="h-auto mx-auto w-full max-w-[296px] md:max-w-[364px] lg:max-w-[488px] xl:max-w-[531px]" src="/wp-content/themes/day-six/img/local/francien.png" alt="">
    </div>
   <section class="lottie-francien-trigger h-[40vw] mt-[-20vw] relative z-10">
            <div class="w-[120vw] translate-x-[-6vw]" id="lottie-francien"></div>
    </section>
    <section id="reviews" class="section-par pt-5 md:pt-0">
        <div class="grid-cols-3 gap-x-5  xl:max-w-[1200px] lg:max-w-[1064px] container hidden lg:grid">
            <div class="md:col-span-3 lg:col-span-1">
                <div class="parralax-box pt-[300px] mb-[-300px] lg:space-y-4 xl:space-y-4">
                    <article class="rounded-[63px] py-6 px-4 xl:py-7 xl:px-5 lg:h-[444px] xl:h-[500px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="xl:text-22 xl:leading-25 lg:text-19 lg:leading-22 text-[#222222] font-darker font-medium my-auto">Hallo Francien, Ik wil je heel erg bedanken voor je supertoffe les, je deed het geweldig! Ik heb na schooltijd nog meerdere enthousiaste reacties gehad en heb de klas nog nooit zo lang betrokken gezien bij een les. Echt helemaal top! </p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Nikki,  docent de Vijverberg</p>
                    </article>
                    <article class="rounded-[63px] py-6 px-4 xl:py-7 xl:px-5 lg:h-[444px] xl:h-[500px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="xl:text-22 xl:leading-25 lg:text-19 lg:leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
            </div>
            <div class="md:col-span-3 lg:col-span-1">
                <div class="lg:space-y-4 xl:space-y-4">
                    <article class="rounded-[63px] py-6 px-4 xl:py-7 xl:px-5 lg:h-[444px] xl:h-[500px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="xl:text-22 xl:leading-25 lg:text-19 lg:leading-22 text-[#222222] font-darker font-medium my-auto">We hoorden alleen maar positieve reacties, je hebt echt een indruk achtergelaten. Hopelijk wil je volgend schooljaar ook weer terugkeren!  </p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Naam, recensie</p>
                    </article>
                    <article class="rounded-[63px] py-6 px-4 xl:py-7 xl:px-5 lg:h-[444px] xl:h-[500px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="xl:text-22 xl:leading-25 lg:text-19 lg:leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
            </div>
            <div class="md:col-span-3 lg:col-span-1">
                <div class="parralax-box pt-[300px] mb-[-300px]">
                    <div class=" lg:space-y-4 xl:space-y-4">
                    <article class="rounded-[63px] py-6 px-4 xl:py-7 xl:px-5 lg:h-[444px] xl:h-[500px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="xl:text-22 xl:leading-25 lg:text-19 lg:leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                    <article class="rounded-[63px] py-6 px-4 xl:py-7 xl:px-5 lg:h-[444px] xl:h-[500px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="xl:text-22 xl:leading-25 lg:text-19 lg:leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="container md:max-w-[698px] hidden md:grid lg:hidden grid-cols-2 gap-x-[35px] gap-y-3">
            <div class="parralax-box pt-[300px] mb-[-300px] col-span-1">
                <div>
                    <article class="rounded-[63px] py-6 px-4 h-[444px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-19 leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                    <article class="rounded-[63px] py-6 px-4 h-[444px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-19 leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
            </div>
            <div class="col-span-1">
                <div>
                    <article class="rounded-[63px] py-6 px-4 h-[444px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-19 leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                    <article class="rounded-[63px] py-6 px-4 h-[444px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-19 leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-16 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
            </div>
        </div>

        <div class="swiper mySwiper relative md:hidden-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class=" rounded-[35px] py-5 px-[45px] h-[377px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-16 leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-14 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class=" rounded-[35px] py-5 px-[45px] h-[377px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-16 leading-22 text-[#222222] font-darker font-medium my-auto">Hallo Francien, Ik wil je heel erg bedanken voor je supertoffe les, je deed het geweldig! Ik heb na schooltijd nog meerdere enthousiaste reacties gehad en heb de klas nog nooit zo</p>
                        </div>
                        <p class="text-14 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class=" rounded-[35px] py-5 px-[45px] h-[377px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-16 leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-14 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class=" rounded-[35px] py-5 px-[45px] h-[377px] bg-white mt-3 flex flex-col justify-between">
                        <div class="h-full flex">
                            <p class="text-16 leading-22 text-[#222222] font-darker font-medium my-auto">Wat bijzonder is, is dat Francien erg open is over haar eigen valkuilen en zaken waar zij tegenaan loopt in het leven, hetgeen voor herkenning zorgt bij de jongeren en zodoende verbindend werkt. Jongeren die normaliter moeizaam hun verhaal durven te doen, lijken te openen bij Francien</p>
                        </div>
                        <p class="text-14 leading-30 text-[#222222] font-satoshi font-bold">Wendy, oud-behandelaar YWCC</p>
                    </article>
                </div>
            </div>

            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="67.414" height="67.414" viewBox="0 0 67.414 67.414">
                    <g id="Ellipse_25" data-name="Ellipse 25" transform="translate(67.414 67.414) rotate(180)" fill="none" stroke="#fff" stroke-width="2">
                        <circle cx="33.707" cy="33.707" r="33.707" stroke="none"/>
                        <circle cx="33.707" cy="33.707" r="32.707" fill="none"/>
                    </g>
                    <line id="Line_32" data-name="Line 32" y1="11.504" x2="13.25" transform="translate(43.029 46.218) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                    <line id="Line_33" data-name="Line 33" x1="13.25" y1="11.504" transform="translate(43.029 34.525) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="67.414" height="67.414" viewBox="0 0 67.414 67.414">
                    <g id="Ellipse_26" data-name="Ellipse 26" fill="none" stroke="#fff" stroke-width="2">
                        <circle cx="33.707" cy="33.707" r="33.707" stroke="none"/>
                        <circle cx="33.707" cy="33.707" r="32.707" fill="none"/>
                    </g>
                    <line id="Line_34" data-name="Line 34" y1="11.983" x2="13.802" transform="translate(24.193 21.154)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                    <line id="Line_35" data-name="Line 35" x1="13.802" y1="11.983" transform="translate(24.193 32.763)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                </svg>
            </div>
    </div>


    </section>
</section>


<section id="boeken" class="grid grid-cols-2 lg:grid-cols-4">
    <article class="col-span-1 aspect-square h-auto w-full flex bg-[#FACFE1]">
        <img class="mx-auto my-auto h-auto w-full max-w-[71px] md:max-w-[140px] lg:max-w-[117px] xl:max-w-[132px]" src="/wp-content/themes/day-six/img/local/boek-3.png" alt="">
    </article>
    <article class="col-span-1 aspect-square h-auto w-full flex bg-[#ACBFFF] ">
        <img class="mx-auto my-auto h-auto w-full max-w-[100px] md:max-w-[197px] lg:max-w-[164px] xl:max-w-[185px]" src="/wp-content/themes/day-six/img/local/boek-2.png" alt="">
    </article>
    <article class="col-span-1 aspect-square h-auto w-full flex bg-[#FFDF57] ">
        <img class="mx-auto my-auto h-auto w-full max-w-[85px] md:max-w-[168px] lg:max-w-[140px] xl:max-w-[157px]" src="/wp-content/themes/day-six/img/local/boek-4.png" alt="">
    </article>
    <article class="col-span-1 aspect-square h-auto w-full flex bg-[#ACE9FF]">
        <img class="mx-auto my-auto h-auto w-full max-w-[78px] md:max-w-[153px] lg:max-w-[127px] xl:max-w-[143px]" src="/wp-content/themes/day-six/img/local/boek-1.png" alt="">
    </article>
</section>

<section id="indeklas" class="pt-8 pb-[55px] md:pt-[73px] md:pb-[110px] lg:pt-[85px] lg:pb-[111px] xl:pt-[110px] xl:pb-[128px]">
    <div class="container">
        <h3 class="font-satoshi font-black text-35 leading-50 md: md:text-40 md:leading-48 lg:text-52 lg:leading-62 xl:text-60 xl:leading-72 text-[#222222]">Voor de klas</h3>
        <p class="text-[#222222] font-satoshi text-16 leading-30 font-medium w-full max-w-[328px] mb-4 mt-3 md:text-20 md:leading-40 md:max-w-[637px] md:mt-4 md:mb-5 lg:text-20 lg:leading-40 lg:max-w-[874px] lg:mt-5 lg:mb-5 xl:text-23 xl:leading-45 xl:max-w-[986px] xl:mt-5 xl:mb-6">Ik sta nagenoeg elke week voor de klas of een groep in Nederland en België. Ik vertel dan in levenden lijve mijn ervaringsverhaal. Dit doe ik op middelbare scholen, jongereninstellingen, mbo’s en basisscholen.</p>
    </div>
    <div class="container space-y-[15px]">
        <div class="accordion-item"> 
            <button class="accordion text-24 leading-35 md:text-28 md:leading-35 lg:text-42 lg:leading-35 xl:text-46 xl:leading-35 font-darker text-[#222222] font-bold  h-[78px] md:h-[88px]  lg:h-[115px] xl:h-[130px] px-4 lg:px-7 xl:px-[75px] flex items-center">
                <p class="mb-[5px]">Voorlichting</p>
            </button>
            <div class="panel px-4 lg:px-7 xl:px-[75px]">
                <p class="text-[#222222] font-satoshi text-16 leading-30 font-medium w-full max-w-[328px]  md:text-20 md:leading-40 md:max-w-[637px]  lg:text-20 lg:leading-40 lg:max-w-[874px] xl:text-23 xl:leading-45 xl:max-w-[986px] ">Ik sta nagenoeg elke week voor de klas of een groep in Nederland en België. Ik vertel dan in levenden lijve mijn ervaringsverhaal. Dit doe ik op middelbare scholen, jongereninstellingen, mbo’s en basisscholen.</p>
                <div class="pt-2 md:pt-3 lg:pt-4"></div>
            </div>
        </div>
        <div class="accordion-item"> 
            <button class="accordion text-24 leading-35 md:text-28 md:leading-35 lg:text-42 lg:leading-35 xl:text-46 xl:leading-35 font-darker text-[#222222] font-bold h-[78px] md:h-[88px]  lg:h-[115px] xl:h-[130px] px-4 lg:px-7 xl:px-[75px] flex items-center">
                <p class="mb-[5px]">Victim blaming</p>
            </button>
            <div class="panel px-4 lg:px-7 xl:px-[75px]">
                <p class="text-[#222222] font-satoshi text-16 leading-30 font-medium w-full max-w-[328px]  md:text-20 md:leading-40 md:max-w-[637px]  lg:text-20 lg:leading-40 lg:max-w-[874px] xl:text-23 xl:leading-45 xl:max-w-[986px] ">Ik sta nagenoeg elke week voor de klas of een groep in Nederland en België. Ik vertel dan in levenden lijve mijn ervaringsverhaal. Dit doe ik op middelbare scholen, jongereninstellingen, mbo’s en basisscholen.</p>
                <div class="pt-2 md:pt-3 lg:pt-4"></div>
            </div>
        </div>
        <div class="accordion-item"> 
            <button class="accordion text-24 leading-35 md:text-28 md:leading-35 lg:text-42 lg:leading-35 xl:text-46 xl:leading-35 font-darker text-[#222222] font-bold h-[78px] md:h-[88px]  lg:h-[115px] xl:h-[130px] px-4 lg:px-7 xl:px-[75px] flex items-center">
                <p class="mb-[5px]">Interactieve Sessie</p>
            </button>
            <div class="panel px-4 lg:px-7 xl:px-[75px]">
                <p class="text-[#222222] font-satoshi text-16 leading-30 font-medium w-full max-w-[328px]  md:text-20 md:leading-40 md:max-w-[637px]  lg:text-20 lg:leading-40 lg:max-w-[874px] xl:text-23 xl:leading-45 xl:max-w-[986px] ">Ik sta nagenoeg elke week voor de klas of een groep in Nederland en België. Ik vertel dan in levenden lijve mijn ervaringsverhaal. Dit doe ik op middelbare scholen, jongereninstellingen, mbo’s en basisscholen.</p>
                <div class="pt-2 md:pt-3 lg:pt-4"></div>
            </div>
        </div>
       <div class="accordion-item"> 
            <button class="accordion text-24 leading-35 md:text-28 md:leading-35 lg:text-42 lg:leading-35 xl:text-46 xl:leading-35 font-darker text-[#222222] font-bold h-[78px] md:h-[88px]  lg:h-[115px] xl:h-[130px] px-4 lg:px-7 xl:px-[75px] flex items-center">
                <p class="mb-[5px]">Bespreekbaar maken</p>
            </button>
            <div class="panel px-4 lg:px-7 xl:px-[75px]">
                <p class="text-[#222222] font-satoshi text-16 leading-30 font-medium w-full max-w-[328px]  md:text-20 md:leading-40 md:max-w-[637px]  lg:text-20 lg:leading-40 lg:max-w-[874px] xl:text-23 xl:leading-45 xl:max-w-[986px] ">Ik sta nagenoeg elke week voor de klas of een groep in Nederland en België. Ik vertel dan in levenden lijve mijn ervaringsverhaal. Dit doe ik op middelbare scholen, jongereninstellingen, mbo’s en basisscholen.</p>
                <div class="pt-2 md:pt-3 lg:pt-4"></div>
            </div>
        </div>
        <div class="accordion-item"> 
            <button class="accordion text-24 leading-35 md:text-28 md:leading-35 lg:text-42 lg:leading-35 xl:text-46 xl:leading-35 font-darker text-[#222222] font-bold h-[78px] md:h-[88px]  lg:h-[115px] xl:h-[130px] px-4 lg:px-7 xl:px-[75px] flex items-center">
                <p class="mb-[5px]">Ouderavond</p>
            </button>
            <div class="panel px-4 lg:px-7 xl:px-[75px]">
                <p class="text-[#222222] font-satoshi text-16 leading-30 font-medium w-full max-w-[328px]  md:text-20 md:leading-40 md:max-w-[637px]  lg:text-20 lg:leading-40 lg:max-w-[874px] xl:text-23 xl:leading-45 xl:max-w-[986px] ">Ik sta nagenoeg elke week voor de klas of een groep in Nederland en België. Ik vertel dan in levenden lijve mijn ervaringsverhaal. Dit doe ik op middelbare scholen, jongereninstellingen, mbo’s en basisscholen.</p>
                <div class="pt-2 md:pt-3 lg:pt-4"></div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#FFFFFF]">
    <div class="container pt-[95px] pb-[83px] md:pt-[116px] md:pb-[110px] lg:pt-[125px] lg:pb-[116px] xl:pt-[122px] xl:pb-[128px] space-y-4 md:space-y-5 lg:space-y-6 xl:space-y-6">
        <h4 class="text-35 text-[#0F1010] leading-50 md:text-40 md:leading-50 lg:text-52 lg:leading-62 xl:text-60 xl:leading-72 font-black font-satoshi max-w-[291px] w-full md:max-w-[574px] lg:max-w-[715px] xl:max-w-[793px] text-center mx-auto ">Klaar voor een voorlichting die indruk maakt?</h4>
        <p class=" text-[#000000] w-full max-w-[304px] md:max-w-[522px] lg:max-w-[671px] xl:max-w-[754px] text-center font-satoshi text-16 leading-30 font-medium md:text-20 md:leading-40 xl:text-23 xl:leading-50 mx-auto ">Met mijn voorlichting ‘Francien laat je tieten nog eens zien!’ deel ik dus mijn persoonlijke verhaal. Waaruit ik veel wijze lessen heb geleerd. Nu is het tijd om daar anderen deelgenoot van te maken.</p>
        <a class="flex justify-center items-center mx-auto hover:opacity-80 transition-opacity text-[#000000] bg-[#B5F964] rounded-[10px] font-satoshi font-medium text-16 md:text-20 lg:text-22 xl:text-[25px]  px-2 md:px-5 xl:px-6 w-fit h-[48px] md:h-[64px] xl:h-[72px]" href="">hello@francienregelink.nl</a>
    </div>
</section>

<section class="bg-[#FFBD93]">
    <div class="container grid-cols-1 md:grid-cols-5 grid gap-6 md:gap-7 xl:gap-[112px] pt-[75px] pb-6 md:py-7 lg:py-10">
        <div class="col-span-1 md:col-span-2">
            <h5 class="text-25 leading-30 md:text-24 md:leading-29 lg:text-35 lg:leading-42 xl:text-40 xl:leading-48 font-satoshi font-bold text-[#0F1010] text-center md:text-left">Werkt samen met:</h5>
        </div>
        <div class="col-span-1 flex">
            <img class="mx-auto mix-blend-darken w-[136px] md:w-[91px] lg:w-[115px]" src="/wp-content/themes/day-six/img/local/samen-werking-4.png" alt="">
        </div>
        <div class="col-span-1 flex">
            <img class="mx-auto mix-blend-darken w-[99px] md:w-[108px] lg:w-[163px] xl:w-[182px]" src="/wp-content/themes/day-six/img/local/samen-werking-2.png" alt="">
        </div>
        <div class="col-span-1 flex">
            <img  class="mx-auto mix-blend-darken w-[114px] md:w-[104px] lg:w-[148px] xl:w-[165px]" src="/wp-content/themes/day-six/img/local/samen-werking-3.png" alt="">
        </div>
    </div>
</section>

<section id="over" class="bg-white">
    <div class="container pt-6 pb-[125px] md:pt-8 md:pb-[115px] lg:pt-[140px] lg:pb-[110px] xl:pt-[125px] xl:pb-[160px] flex flex-col lg:flex-row gap-5 md:gap-8 lg:gap-[150px] xl:gap-[160px]">
        <div class="">
            <h4 class="text-35 text-[#222222] leading-50 md:text-40 md:leading-50 lg:text-52 lg:leading-62 xl:text-60 xl:leading-72 font-black font-satoshi w-full pb-[30px] md:pb-[50px] lg:pb-[55px] xl:pb-6">Over</h4>
            <p class="text-[#222222] font-satoshi text-16 leading-30 font-medium w-full md:text-20 md:leading-40  lg:text-20 lg:leading-40  xl:text-23 xl:leading-45 max-w-[331px] md:max-w-[674px] lg:max-w-[520px] xl:max-w-[610px]">Ik ben Francien Regelink. Online marketeer, content strategist en dé deskundige op het gebied van shame sexting. Hoezo dat? Omdat ik er zelf slachtoffer van ben. Toen ik vijftien jaar oud was, liet ik via de webcam mijn borsten zien aan de coolste jongen van de school. Van de ene op de andere dag was ik dat meisje van die tietenfoto inclusief de bijnaam ‘Francien laat je tieten nog eens zien!’. En iedereen vond daar wat van, vond vooral wat van mij. Alsof het allemaal mijn eigen schuld was. Dat ging ik zelf ook geloven door al die waardeoordelen. Vandaag de dag weet ik dat het niet mijn schuld is.</p>
        </div>
        <img class="w-full md:hidden lg:flex max-w-[274px] lg:max-w-[370px] xl:max-w-[414px] mx-auto" src="/wp-content/themes/day-six/img/local/over.png" alt="">
        <img class="w-full hidden md:flex lg:hidden  mx-auto max-w-[471px]" src="/wp-content/themes/day-six/img/local/over-tablet.png" alt="">
    </div>
</section>

<section id="media" class="bg-[#1D1D19] pt-8 pb-10 md:pt-10 md:pb-6 lg:pt-11 lg:pb-9 xl:pt-11 xl:pb-9">
    <div class="container">
        <h4 class="text-35 text-[#fff] leading-50 md:text-40 md:leading-50 lg:text-52 lg:leading-62 xl:text-60 xl:leading-72 font-black font-satoshi w-full">In de media</h4>
        <p class="text-[#fff] font-satoshi text-16 leading-30 font-medium w-full md:text-20 md:leading-40  lg:text-20 lg:leading-40  xl:text-23 xl:leading-45 max-w-[324px] md:max-w-[674px] lg:max-w-[1069px] xl:max-w-[1191px] pt-3 pb-6 md:pt-5 md:pb-6 lg:pt-[55px] lg:pb-8 xl:pt-6 xl:pb-8">Pas toen ik 12 jaar na dato het heft in eigen handen nam door mijn verhaal te doen bij Nieuwsuur werd ik het boegbeeld van shame sexting. Inmiddels ben ik een veelgevraagde expert en ervaringsdeskundige op dit gebied. Waardoor ik veelvuldig te horen en zien ben op radio en tv. Of plaatsneem in panels en praatprogramma’s. </p>
    </div>
    <div class="swiper mySwiper-media relative ">

        <div class="swiper-wrapper">
            <div data-modal-id="modal-1" class="swiper-slide relative">
                <img class="w-full rounded-[8px] h-[400px] md:h-[531px] object-cover lg:h-auto lg:aspect-square" src="/wp-content/themes/day-six/img/local/eva-slider.jpg" alt="">
                <p class="text-23 leading-20 md:text-34 md:leading-29 lg:text-34 lg:leading-29 xl:text-40 xl:leading-35 font-bold font-satoshi text-white md:mt-5 lg:mt-3 mt-2">Talkshow Jinek</p>
                <div class="px-2 flex absolute rounded-full w-fit min-w-[160px] bg-[#FFE3E3] justify-center items-center h-[26px] md:h-[36px] xl:h-[42px] top-2 right-[5px] md:top-3 md:right-1 lg:top-4 lg:right-3 xl:top-4 xl:right-4">
                    <p class="font-satoshi text-[#FF3B00] font-bold text-13 leading-23 md:text-18 md:leading-32 lg:text-16 lg:leading-32 xl:text-20 xl:leading-40">TV uitzending</p>
                </div>
            </div>
            
            <div data-modal-id="modal-2" class="swiper-slide relative">
                <img class="w-full rounded-[8px] h-[400px] md:h-[531px] object-cover lg:h-auto lg:aspect-square" src="/wp-content/themes/day-six/img/local/podcast.png" alt="">
                <p class="text-23 leading-20 md:text-34 md:leading-29 lg:text-34 lg:leading-29 xl:text-40 xl:leading-35 font-bold font-satoshi text-white md:mt-5 lg:mt-3 mt-2">Podcast</p>
                <div class="px-2 flex absolute rounded-full w-fit min-w-[160px] bg-[#FFE3E3] justify-center items-center h-[26px] md:h-[36px] xl:h-[42px] top-2 right-[5px] md:top-3 md:right-1 lg:top-4 lg:right-3 xl:top-4 xl:right-4">
                    <p class="font-satoshi text-[#FF3B00] font-bold text-13 leading-23 md:text-18 md:leading-32 lg:text-16 lg:leading-32 xl:text-20 xl:leading-40">Radio</p>
                </div>
            </div>
            <div data-modal-id="modal-3" class="swiper-slide relative">
                <img class="w-full rounded-[8px] h-[400px] md:h-[531px] object-cover lg:h-auto lg:aspect-square" src="/wp-content/themes/day-six/img/local/Uitzending.png" alt="">
                <p class="text-23 leading-20 md:text-34 md:leading-29 lg:text-34 lg:leading-29 xl:text-40 xl:leading-35 font-bold font-satoshi text-white md:mt-5 lg:mt-3 mt-2">Uitzending</p>
                <div class="px-2 flex absolute rounded-full w-fit min-w-[160px] bg-[#FFE3E3] justify-center items-center h-[26px] md:h-[36px] xl:h-[42px] top-2 right-[5px] md:top-3 md:right-1 lg:top-4 lg:right-3 xl:top-4 xl:right-4">
                    <p class="font-satoshi text-[#FF3B00] font-bold text-13 leading-23 md:text-18 md:leading-32 lg:text-16 lg:leading-32 xl:text-20 xl:leading-40">TV uitzending</p>
                </div>
            </div>
            <div data-modal-id="modal-4" class="swiper-slide relative">
                <img class="w-full rounded-[8px] h-[400px] md:h-[531px] object-cover lg:h-auto lg:aspect-square" src="/wp-content/themes/day-six/img/local/eva-slider.jpg" alt="">
                <p class="text-23 leading-20 md:text-34 md:leading-29 lg:text-34 lg:leading-29 xl:text-40 xl:leading-35 font-bold font-satoshi text-white md:mt-5 lg:mt-3 mt-2">Talkshow Jinek</p>
                <div class="px-2 flex absolute rounded-full w-fit min-w-[160px] bg-[#FFE3E3] justify-center items-center h-[26px] md:h-[36px] xl:h-[42px] top-2 right-[5px] md:top-3 md:right-1 lg:top-4 lg:right-3 xl:top-4 xl:right-4">
                    <p class="font-satoshi text-[#FF3B00] font-bold text-13 leading-23 md:text-18 md:leading-32 lg:text-16 lg:leading-32 xl:text-20 xl:leading-40">TV uitzending</p>
                </div>
            </div>
        </div>

        <div class="pb-5 md:pb-8 lg:pb-[85px] xl:pb-9"></div>

        <div class="swiper-button-next-media">
            <svg xmlns="http://www.w3.org/2000/svg" width="67.414" height="67.414" viewBox="0 0 67.414 67.414">
                <g id="Ellipse_25" data-name="Ellipse 25" transform="translate(67.414 67.414) rotate(180)" fill="none" stroke="#fff" stroke-width="2">
                    <circle cx="33.707" cy="33.707" r="33.707" stroke="none"/>
                    <circle cx="33.707" cy="33.707" r="32.707" fill="none"/>
                </g>
                <line id="Line_32" data-name="Line 32" y1="11.504" x2="13.25" transform="translate(43.029 46.218) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                <line id="Line_33" data-name="Line 33" x1="13.25" y1="11.504" transform="translate(43.029 34.525) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
            </svg>
        </div>
        <div class="swiper-button-prev-media">
            <svg xmlns="http://www.w3.org/2000/svg" width="67.414" height="67.414" viewBox="0 0 67.414 67.414">
                <g id="Ellipse_26" data-name="Ellipse 26" fill="none" stroke="#fff" stroke-width="2">
                    <circle cx="33.707" cy="33.707" r="33.707" stroke="none"/>
                    <circle cx="33.707" cy="33.707" r="32.707" fill="none"/>
                </g>
                <line id="Line_34" data-name="Line 34" y1="11.983" x2="13.802" transform="translate(24.193 21.154)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                <line id="Line_35" data-name="Line 35" x1="13.802" y1="11.983" transform="translate(24.193 32.763)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
            </svg>
        </div>
    </div>
</section>

<section id="contact"  class="bg-[#FFFFFF]">
    <div class="container py-7 md:pt-[116px] md:pb-[80px] lg:pt-[125px] lg:pb-[130px] xl:pt-[150px] xl:pb-[150px] space-y-4 md:space-y-6 lg:space-y-6 xl:space-y-7">
        <h4 class="text-35 text-[#0F1010] leading-50 md:text-40 md:leading-50 lg:text-52 lg:leading-62 xl:text-60 xl:leading-72 font-black font-satoshi max-w-[291px] w-full md:max-w-[574px] lg:max-w-[715px] xl:max-w-[793px] text-center mx-auto ">Contact met Francien</h4>
        <p class=" text-[#000000]  w-full max-w-[304px] md:max-w-[522px] lg:max-w-[671px] xl:max-w-[754px] text-center font-satoshi text-16 leading-30 font-medium md:text-20 md:leading-40 lg:text-20 lg:leading-40 xl:text-23 xl:leading-45 mx-auto ">Vragen? Interesse? Neem contact met mij op via onderstaand mailadres om de mogelijkheden te bespreken.
</br> </br>
Oh, en ben jij die jongen die ooit die foto van mijn tieten heeft doorgestuurd naar de rest van de school? Excuses maken kan altijd nog. Is het onderstaand emailadres een prima optie voor.
</p>
        <a class="flex justify-center items-center mx-auto hover:opacity-80 transition-opacity text-[#000000] bg-[#B5F964] rounded-[10px] font-satoshi font-medium text-16 md:text-20 lg:text-22 xl:text-[25px]  px-2 md:px-5 xl:px-6 w-fit h-[48px] md:h-[64px] xl:h-[72px]" href="">hello@francienregelink.nl</a>
    </div>
</section>

<div id="modal-1" class="hidden screen-h bg-[#1D1D19]/[0.85] overflow-x-hidden fixed z-[15] top-0 right-0 left-0 bottom-0 w-screen h-screen modals">
  <div class="relative px-0 h-screen flex items-center justify-center">
    <div class="bg-[#070706] w-[95vw] max-w-[1102px] md:mx-auto p-2 md:p-4 flex flex-col   z-50 relative">

        <button class="block close-modals ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.121" height="24.121" viewBox="0 0 24.121 24.121">
                <g id="Group_202" data-name="Group 202" transform="translate(-1207.439 -108.939)">
                    <path id="Line_32" data-name="Line 32" d="M1.061,23.061l-2.121-2.121,22-22,2.121,2.121Z" transform="translate(1208.5 110)" fill="#fff"/>
                    <path id="Line_33" data-name="Line 33" d="M20.939,23.061l-22-22L1.061-1.061l22,22Z" transform="translate(1208.5 110)" fill="#fff"/>
                </g>
            </svg>
        </button>
      <div class="p-1 md:p-2">
        <iframe class="w-full aspect-video h-full" src="https://www.youtube.com/embed/4kLXEZWFkPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>

<div id="modal-2" class="hidden screen-h bg-[#1D1D19]/[0.85] overflow-x-hidden fixed z-[15] top-0 right-0 left-0 bottom-0 w-screen h-screen modals">
  <div class="relative px-0 h-screen flex items-center justify-center">
    <div class="bg-[#070706] w-[95vw] max-w-[1102px] md:mx-auto p-2 md:p-4 flex flex-col   z-50 relative">

        <button class="block close-modals ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.121" height="24.121" viewBox="0 0 24.121 24.121">
                <g id="Group_202" data-name="Group 202" transform="translate(-1207.439 -108.939)">
                    <path id="Line_32" data-name="Line 32" d="M1.061,23.061l-2.121-2.121,22-22,2.121,2.121Z" transform="translate(1208.5 110)" fill="#fff"/>
                    <path id="Line_33" data-name="Line 33" d="M20.939,23.061l-22-22L1.061-1.061l22,22Z" transform="translate(1208.5 110)" fill="#fff"/>
                </g>
            </svg>
        </button>
      <div class="p-1 md:p-2">
        <iframe class="w-full aspect-video h-full" src="https://www.youtube.com/embed/4kLXEZWFkPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>


<div id="modal-3" class="hidden screen-h bg-[#1D1D19]/[0.85] overflow-x-hidden fixed z-[15] top-0 right-0 left-0 bottom-0 w-screen h-screen modals">
  <div class="relative px-0 h-screen flex items-center justify-center">
    <div class="bg-[#070706] w-[95vw] max-w-[1102px] md:mx-auto p-2 md:p-4 flex flex-col   z-50 relative">

        <button class="block close-modals ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.121" height="24.121" viewBox="0 0 24.121 24.121">
                <g id="Group_202" data-name="Group 202" transform="translate(-1207.439 -108.939)">
                    <path id="Line_32" data-name="Line 32" d="M1.061,23.061l-2.121-2.121,22-22,2.121,2.121Z" transform="translate(1208.5 110)" fill="#fff"/>
                    <path id="Line_33" data-name="Line 33" d="M20.939,23.061l-22-22L1.061-1.061l22,22Z" transform="translate(1208.5 110)" fill="#fff"/>
                </g>
            </svg>
        </button>
      <div class="p-1 md:p-2">
        <iframe class="w-full aspect-video h-full" src="https://www.youtube.com/embed/4kLXEZWFkPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>

<div id="modal-4" class="hidden screen-h bg-[#1D1D19]/[0.85] overflow-x-hidden fixed z-[15] top-0 right-0 left-0 bottom-0 w-screen h-screen modals">
  <div class="relative px-0 h-screen flex items-center justify-center">
    <div class="bg-[#070706] w-[95vw] max-w-[1102px] md:mx-auto p-2 md:p-4 flex flex-col z-50 relative">

        <button class="block close-modals ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.121" height="24.121" viewBox="0 0 24.121 24.121">
                <g id="Group_202" data-name="Group 202" transform="translate(-1207.439 -108.939)">
                    <path id="Line_32" data-name="Line 32" d="M1.061,23.061l-2.121-2.121,22-22,2.121,2.121Z" transform="translate(1208.5 110)" fill="#fff"/>
                    <path id="Line_33" data-name="Line 33" d="M20.939,23.061l-22-22L1.061-1.061l22,22Z" transform="translate(1208.5 110)" fill="#fff"/>
                </g>
            </svg>
        </button>
      <div class="p-1 md:p-2">
        <iframe class="w-full aspect-video h-full" src="https://www.youtube.com/embed/4kLXEZWFkPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
