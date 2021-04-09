<div class="flex flex-col mt-4">

    <!-- top slide -->

    <div class="container mx-auto max-w-61 flex flex-col lg:flex lg:flex-row mb-5 w-full font-display">
        <!-- right-box -->
        <div class="bg-white inline-flex flex-col md:flex md:flex-row mb-4 lg:flex lg:flex-row lg:mb-0 rounded-md shadow-lg">
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
            <div class="bg-green-100 lg:w-64 h-80 lg:my-auto lg:mx-8 rounded-3xl m-auto">
                <img class="w-56 h-56 mx-auto my-12" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>
            <!-- end left image -->

        </div>
        <!-- end right-box -->


        <!-- left-box -->
        <div class="flex flex-col lf:flex lg:flex-col md:flex md:flex-row lg:mr-4 lg:w-full">
            <!-- top-image -->
            <div class="mb-4 h-1/2 m-auto lg:m-0 lg:mb-4">
                <img class="img-fit lg:w-full rounded-lg" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>

            <!-- bottom-image -->
            <div class="h-1/2 m-auto lg:m-0">
                <img class="img-fit lg:w-full rounded-lg" src="{{asset('/img/02.jpg')}}" alt="img">
            </div>
        </div>
        <!-- end left-box -->
    </div>

    <!-- carousel slide -->

    <div class="w-full h-auto flex flex-col">

        <div class="relative max-w-980 flex flex-col lg:flex lg:flex-row container mx-auto bg-red-600">

            <!--  right menu -->
            <div class="w-full my-2 lg:mr-6 flex flex-row lg:flex lg:flex-col mx-auto">
                <!--    text -->
                <div class="flex flex-col items-center text-medium mr-auto lg:mx-auto pt-4">
                    <span>پیشنهاد</span>
                    <span>شگفت</span>
                    <span>انگیز</span>
                </div>
                <!--   image -->

                <div class="flex justify-center mr-auto lg:mx-auto py-4">
                    <img src="{{asset('/img/icon3.png')}}" alt="img" class="w-16 h-16">
                </div>

                <!--   button -->

                <div class="mr-auto lg:mx-auto ml-4  flex justify-center">
                    <button type="button" class="border px-4 py-1 rounded text-ultralight hover:bg-gray-500 hover:border-gray-400 ">مشاهده&nbsp;همه</button>
                </div>
            </div>

            <!--          carousel slider -->
            <div class="container max-w-53 h-96 lg:mr-5">
                <div class="swiper-container  overflow-hidden inline-flex">
                    <div class="swiper-wrapper">
                       <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/01.jpg')}}">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span></div>
                            <div class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 rounded px-1 py-1 mr-4">
                                    <span>20</span><span>%</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/02.jpg')}}">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span></div>
                            <div class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 rounded px-1 py-1 mr-4">
                                    <span>20</span><span>%</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/03.jpg')}}">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span></div>
                            <div class="swiper-price-offer font-display flex items-center flex-col lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 rounded px-1 py-1 mr-4">
                                    <span>20</span><span>%</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/04.jpg')}}">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span></div>
                            <div class="swiper-price-offer font-display flex items-center flex-col lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 rounded px-1 py-1 mr-4">
                                    <span>20</span><span>%</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/05.jpg')}}">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span></div>
                            <div class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 rounded px-1 py-1 mr-4">
                                    <span>20</span><span>%</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image">
                                <img class="swiper-img" src="{{asset('/img/06.jpg')}}">
                            </div>
                            <div class="swiper-product-name"><span class="font-display text-bold">زرشک ارگانیک</span></div>
                            <div class="swiper-price-offer font-display flex flex-col items-center lg:flex md:flex md:flex-row">
                                <span class="text-gray-400 line-through text-regular">54000</span>
                                <span class="bg-red-600 rounded px-1 py-1 mr-4">
                                    <span>20</span><span>%</span>
                                </span>
                            </div>
                            <div class="swiper-price font-display">
                                <span>50000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                    </div>
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
