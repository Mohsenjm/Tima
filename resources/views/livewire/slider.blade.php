<div class="flex flex-col mt-4">

    <!-- top slide -->

    <div class="container mx-auto max-w-1200 flex flex-col lg:flex lg:flex-row mb-5 w-full font-display">
        <!-- right-box -->
        <div
            class="bg-white inline-flex flex-col md:flex md:flex-row mb-4 lg:flex lg:flex-row lg:w-3/5 lg:mb-0 lg:ml-4 rounded-md shadow-lg">
            <!-- right text -->
            <div class="mr-4 ml-8 my-auto  flex flex-col justify-center text-regular">
                <h2 class="flex justify-center mb-4 mt-4 text-medium">محصولات&nbsp;ارگانیک</h2>
                <div class="mb-4 flex flex-col items-center lg:items-baseline">
                    <p class="text-gray-400 ">تولید&nbsp;محصولات&nbsp;کاملا&nbsp;ارگانیک&nbsp;</p>
                    <p class="text-gray-400">در&nbsp;مزارع&nbsp;تیما&nbsp;زعفران</p>
                </div>
                <div class="flex justify-center mb-4">
                    <a href="#"
                       class="flex justify-center items-center text-white w-24 h-10  bg-indigo-800 rounded-2xl text-light hover:bg-blue-400">مشاهده</a>
                </div>

            </div>
            <!-- end right text -->

            <!-- left image -->
            <div class="bg-green-100 mx-8 lg:w-68 h-80 lg:my-auto lg:mx-8 rounded-3xl lg:mr-auto md:mr-auto">
                <img class="w-56 h-56 mx-auto my-12" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>
            <!-- end left image -->

        </div>
        <!-- end right-box -->


        <!-- left-box -->
        <div class="flex flex-col mx-4 lg:mx-0 lg:flex lg:flex-col md:flex md:flex-row lg:mr-auto lg:w-2/5">
            <!-- top-image -->
            <div class="mb-4 h-1/2 w-full lg:mr-auto md:ml-2">
                <img class="img-fit w-full rounded-lg" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>

            <!-- bottom-image -->
            <div class="h-1/2 w-full lg:mr-auto">
                <img class="img-fit w-full rounded-lg" src="{{asset('/img/02.jpg')}}" alt="img">
            </div>
        </div>
        <!-- end left-box -->
    </div>

    <!-- carousel slide -->

    <div class="w-full h-auto flex flex-col bg-red-500 ">

        <div class="relative max-w-1200 mx-auto flex flex-col lg:flex lg:flex-row">

            <!--  right menu -->
            <div
                class="w-full my-2 lg:ml-8 flex flex-row lg:justify-between md:justify-center lg:flex lg:flex-col lg:mx-auto">
                <!--    text -->
                <div class="flex flex-col items-center mr-4 text-bold text-white lg:mr-auto lg:mx-auto pt-4">
                    <span class="mb-3">پیشنهاد</span>
                    <span class="mb-3">شــگفـت</span>
                    <span class="mb-3">انـگیـز</span>
                </div>
                <!--   image -->

                <div class="flex justify-center mx-8 lg:mr-auto lg:mx-auto py-4">
                    <img src="{{asset('/img/icon3.png')}}" alt="img" class="w-16 h-16">
                </div>

                <!--   button -->

                <div class="lg:mr-auto h-1/6 lg:h-10 lg:mx-auto ml-4 mt-8 lg:mt-0 mb-4 flex flex-row justify-center">
                    <button type="button"
                            class="border px-4 py-1 text-white rounded-lg text-ultralight hover:bg-gray-500 hover:border-gray-400 ">
                        مشاهده&nbsp;همه
                    </button>
                </div>
            </div>

            <!--          carousel slider -->
            <div class="container lg:w-4/5 md:w-95 h-96 md:mx-auto">
                <div class="swiper-container  overflow-hidden inline-flex">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/01.jpg')}}" alt="img-banner">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span>
                            </div>
                            <div
                                class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 text-white rounded px-1 py-1 mr-4">
                                  <span>%</span><span>20</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/02.jpg')}}" alt="img-slider1">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span>
                            </div>
                            <div
                                class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 text-white rounded px-1 py-1 mr-4">
                                    <span>%</span><span>20</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/03.jpg')}}" alt="sd">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span>
                            </div>
                            <div
                                class="swiper-price-offer font-display flex items-center flex-col lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 text-white rounded px-1 py-1 mr-4">
                                   <span>%</span><span>20</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/04.jpg')}}" alt="sdf">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span>
                            </div>
                            <div
                                class="swiper-price-offer font-display flex items-center flex-col lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 text-white rounded px-1 py-1 mr-4">
                                 <span>%</span><span>20</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/05.jpg')}}" alt="mnb">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span>
                            </div>
                            <div
                                class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 text-white rounded px-1 py-1 mr-4">
                                    <span>%</span><span>20</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/06.jpg')}}" alt="zvc">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span>
                            </div>
                            <div
                                class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 text-white rounded px-1 py-1 mr-4">
                                   <span>%</span><span>20</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- pagination -->
                    <div class="swiper-pagination"></div>

                </div>

            </div>

        </div>
    </div>
</div>
