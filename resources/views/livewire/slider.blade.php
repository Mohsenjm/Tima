<div class="container mx-auto mt-4 flex flex-col mb-4">

    <!-- top slide -->

    <div id="slideshow" class="container mx-auto flex flex-col lg:flex lg:flex-row mb-5 bg-white w-full">
        <!-- right-box -->
        <div class="bg-white inline-flex flex-col mb-4 lg:flex lg:flex-row lg:mb-0 rounded-md shadow-lg">
            <!-- right text -->
            <div class="mr-4 ml-8 my-auto  flex flex-col justify-center">
                <h2 class="font-bold flex justify-center mb-4 mt-4">محصولات&nbsp;ارگانیک</h2>
                <div class="mb-4 flex flex-col items-center lg:items-baseline">
                    <p class="text-gray-400 ">تولید&nbsp;محصولات&nbsp;کاملا&nbsp;ارگانیک&nbsp;</p>
                    <p class="text-gray-400">در&nbsp;مزارع&nbsp;تیما&nbsp;زعفران</p>
                </div>
                <div class="flex justify-center mb-4">
                    <a href="#"
                       class="flex justify-center items-center text-white w-24 h-10  bg-indigo-800 rounded-3xl">مشاهده</a>
                </div>

            </div>
            <!-- end right text -->

            <!-- left image -->
            <div class="bg-green-100 w-64 h-80 lg:my-auto lg:mx-8 rounded-3xl m-auto">
                <img class="w-56 h-56 mx-auto my-12" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>
            <!-- end left image -->

        </div>
        <!-- end right-box -->


        <!-- left-box -->
        <div class="flex flex-col mr-4 w-full">
            <!-- top-image -->
            <div class="mb-4 h-1/2 m-auto lg:m-0 lg:mb-4">
                <img class="img-fit w-full rounded-lg" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>

            <!-- bottom-image -->
            <div class="h-1/2 m-auto lg:m-0">
                <img class="img-fit w-full rounded-lg" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>
        </div>

        <!-- end left-box -->
    </div>

    <!-- carousel slide -->

    <div class="w-full h-64 flex bg-red-600">

        <!--  right menu -->

        <div class="relative bg-green-400 ml-8 mr-12 w-48 my-4 ">

            <!--    text -->

            <div class="flex flex-col font-bold items-center">
                <span>پیشنهاد</span>
                <span>شگفت</span>
                <span>انگیز</span>
            </div>

            <!--   image -->

            <div class="flex justify-center py-4">
                <img src="{{asset('/img/icon3.png')}}" alt="img" class="w-16 h-16">
            </div>

            <!--   button -->

            <div class=" right-1/2 flex justify-center">
                <button type="button" class="border px-4 py-1 rounded">مشاهده&nbsp;همه</button>
            </div>
        </div>

        <!--          carousel slider -->
        <div class="bg-yellow-300 w-full overflow-hidden inline-flex">
            <div x-data="{swiper: null}"
                 x-init="swiper = new Swiper($refs.container, {
      loop: true,
      autoplay:true,
      slidesPerView: 1,
      spaceBetween: 0,

      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
      },
    })"
                 class="relative w-10/12 mx-auto flex flex-row"
            >
                <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                    <button @click="swiper.slidePrev()"
                            class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="swiper-container" x-ref="container">
                    <div class="flex swiper-wrapper">
                        <div class="flex swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide p-4">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover"
                                             src="{{asset('/img/01.jpg')}}"
                                             alt="carousel">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide p-4">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover"
                                             src="{{asset('/img/02.jpg')}}"
                                             alt="carousel">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide p-4">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover"
                                             src="{{asset('/img/03.jpg')}}"
                                             alt="carousel">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide p-4">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover"
                                             src="{{asset('/img/04.jpg')}}"
                                             alt="carousel">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide p-4">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover"
                                             src="{{asset('/img/04.jpg')}}"
                                             alt="carousel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                        <button @click="swiper.slideNext()"
                                class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
