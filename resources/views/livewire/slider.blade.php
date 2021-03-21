<div class="container mx-auto mt-4  bg-blue-500 flex flex-col mb-4">

    <!-- top slide -->

    <div id="slideshow" class="container mx-auto flex flex-col lg:flex lg:flex-row mb-5 bg-white w-full">
        <!-- right-box -->
        <div class="bg-white inline-flex flex-col lg:flex lg:flex-row rounded shadow-2xl">
            <!-- right text -->
            <div class="mr-4 ml-8 my-auto  flex flex-col justify-center">
                <h2 class="font-bold flex justify-center mb-4 mt-4">محصولات&nbsp;ارگانیک</h2>
                <div class="mb-4 flex flex-col items-center">
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
            <div class="bg-green-400 w-64 h-80 lg:my-8 lg:mx-8 rounded-3xl m-auto">
                <img class="w-56 h-56 mx-auto my-12" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>
            <!-- end left image -->

        </div>
        <!-- end right-box -->


        <!-- left-box -->
        <div class="bg-green-400 flex flex-col mt-4 mr-4 w-full">
            <!-- top-image -->
            <div class="bg-black mb-4 h-1/2 m-auto lg:m-0">
                <img class="img-fit w-full object-cover rounded-2xl" src="{{asset('/img/01.jpg')}}" alt="img">
            </div>

            <!-- bottom-image -->
            <div class="bg-yellow-300 h-1/2 m-auto lg:m-0">
                <img class="img-fit w-full object-cover rounded-2xl" src="{{asset('/img/01.jpg')}}" alt="img">
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
        <div class="bg-yellow-300 w-full overflow-hidden inline-flex ">
            {{--
            <!--  card -->
            <div class="bg-white mx-4 post-wrapper inline-block shadow-lg rounded-2xl">

                <!-- product image -->
                <div class=" px-4 mt-1 mb-4">
                    <img class="object-cover rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                </div>

                <!-- product name -->
                <div class="flex justify-center mb-4">
                    <span class="font-bold">زرشک ارگانیک</span>
                </div>

                <!--   price offer -->
                <div class="bg-green-400 flex flex-row-reverse items-center">

                    <!--  offer text -->
                    <div class="bg-green-600 w-max mr-8 ml-4  rounded">
                        <span><i class="fa fa-percent fa-lg"></i>20</span>
                    </div>
                    <div class="bg-white">
                        <span class="line-through text-gray-400">54000</span>
                    </div>
                </div>

                <!--  product price -->
                <div class="flex flex-row-reverse mt-4 bg-red-300">

                    <!--  price letter -->
                    <div class="bg-gray-400 mr-8 ml-6">
                        <span class="font-bold">تومان</span>
                    </div>


                    <!--  price number -->
                    <div class="bg-blue-500">
                        <span>50000</span>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!--  card -->
            <div class="bg-white post-wrapper inline-block shadow-lg rounded-2xl">

                <!-- product image -->
                <div class=" px-4 mt-1 mb-4">
                    <img class="object-cover rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                </div>

                <!-- product name -->
                <div class="flex justify-center mb-4">
                    <span class="font-bold">زرشک ارگانیک</span>
                </div>

                <!--   price offer -->
                <div class="bg-green-400 flex flex-row-reverse items-center">

                    <!--  offer text -->
                    <div class="bg-green-600 w-max mr-8 ml-4  rounded">
                        <span><i class="fa fa-percent fa-lg"></i>20</span>
                    </div>
                    <div class="bg-white">
                        <span class="line-through text-gray-400">54000</span>
                    </div>
                </div>

                <!--  product price -->
                <div class="flex flex-row-reverse mt-4 bg-red-300">

                    <!--  price letter -->
                    <div class="bg-gray-400 mr-8 ml-6">
                        <span class="font-bold">تومان</span>
                    </div>


                    <!--  price number -->
                    <div class="bg-blue-500">
                        <span>50000</span>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!--  card -->
            <div class="bg-white post-wrapper inline-block shadow-lg rounded-2xl">

                <!-- product image -->
                <div class=" px-4 mt-1 mb-4">
                    <img class="object-cover rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                </div>

                <!-- product name -->
                <div class="flex justify-center mb-4">
                    <span class="font-bold">زرشک ارگانیک</span>
                </div>

                <!--   price offer -->
                <div class="bg-green-400 flex flex-row-reverse items-center">

                    <!--  offer text -->
                    <div class="bg-green-600 w-max mr-8 ml-4  rounded">
                        <span><i class="fa fa-percent fa-lg"></i>20</span>
                    </div>
                    <div class="bg-white">
                        <span class="line-through text-gray-400">54000</span>
                    </div>
                </div>

                <!--  product price -->
                <div class="flex flex-row-reverse mt-4 bg-red-300">

                    <!--  price letter -->
                    <div class="bg-gray-400 mr-8 ml-6">
                        <span class="font-bold">تومان</span>
                    </div>


                    <!--  price number -->
                    <div class="bg-blue-500">
                        <span>50000</span>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!--  card -->
            <div class="bg-white post-wrapper inline-block shadow-lg rounded-2xl">

                <!-- product image -->
                <div class=" px-4 mt-1 mb-4">
                    <img class="object-cover rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                </div>

                <!-- product name -->
                <div class="flex justify-center mb-4">
                    <span class="font-bold">زرشک ارگانیک</span>
                </div>

                <!--   price offer -->
                <div class="bg-green-400 flex flex-row-reverse items-center">

                    <!--  offer text -->
                    <div class="bg-green-600 w-max mr-8 ml-4  rounded">
                        <span><i class="fa fa-percent fa-lg"></i>20</span>
                    </div>
                    <div class="bg-white">
                        <span class="line-through text-gray-400">54000</span>
                    </div>
                </div>

                <!--  product price -->
                <div class="flex flex-row-reverse mt-4 bg-red-300">

                    <!--  price letter -->
                    <div class="bg-gray-400 mr-8 ml-6">
                        <span class="font-bold">تومان</span>
                    </div>


                    <!--  price number -->
                    <div class="bg-blue-500">
                        <span>50000</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!--  card -->
            <div class="bg-white post-wrapper inline-block shadow-lg rounded-2xl">

                <!-- product image -->
                <div class=" px-4 mt-1 mb-4">
                    <img class="object-cover rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                </div>

                <!-- product name -->
                <div class="flex justify-center mb-4">
                    <span class="font-bold">زرشک ارگانیک</span>
                </div>

                <!--   price offer -->
                <div class="bg-green-400 flex flex-row-reverse items-center">

                    <!--  offer text -->
                    <div class="bg-green-600 w-max mr-8 ml-4  rounded">
                        <span><i class="fa fa-percent fa-lg"></i>20</span>
                    </div>
                    <div class="bg-white">
                        <span class="line-through text-gray-400">54000</span>
                    </div>
                </div>

                <!--  product price -->
                <div class="flex flex-row-reverse mt-4 bg-red-300">

                    <!--  price letter -->
                    <div class="bg-gray-400 mr-8 ml-6">
                        <span class="font-bold">تومان</span>
                    </div>


                    <!--  price number -->
                    <div class="bg-blue-500">
                        <span>50000</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

        </div>--}}
            {{--
            <div class="inline-flex slick-list dra">
                <div class="sli">محسن جعفری مقدم </div>
                <div>محسن جعفری مقدم </div>
                <div>محسن جعفری مقدم </div>

            </div>
--}}

            <!-- Single Card -->
              <div class="slick-initialized slick-slider inline-flex post-wrapper">
                  <div class="slick-list">
                      <div class="slick-track">
                          <div class="slick-slide slick-current slick-active">
                              <div class=" px-4 mt-1 mb-4 w-64 h-64">
                                  <img class="object-cover w-64 h-64 rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                <!-- Single Card -->
                <div class="slick-initialized slick-slider inline-flex post-wrapper">
                    <div class="slick-list">
                        <div class="slick-track">
                            <div class="slick-slide slick-current">
                                <div class=" px-4 mt-1 mb-4 w-64 h-64">
                                    <img class="object-cover w-64 h-64 rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Single Card -->
                <div class="slick-initialized slick-slider inline-flex post-wrapper">
                    <div class="slick-list">
                        <div class="slick-track">
                            <div class="slick-slide slick-current">
                                <div class=" px-4 mt-1 mb-4 w-64 h-64">
                                    <img class="object-cover w-64 h-64 rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Single Card -->
                <div class="slick-initialized slick-slider inline-flex post-wrapper">
                    <div class="slick-list">
                        <div class="slick-track">
                            <div class="slick-slide">
                                <div class=" px-4 mt-1 mb-4 w-64 h-64">
                                    <img class="object-cover w-64 h-64 rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Single Card -->
                <div class="slick-initialized slick-slider inline-flex post-wrapper">
                    <div class="slick-list">
                        <div class="slick-track">
                            <div class="slick-slide slick-current">
                                <div class=" px-4 mt-1 mb-4 w-64 h-64">
                                    <img class="object-cover w-64 h-64 rounded w-20" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>
</div>
