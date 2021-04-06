<div class="mt-6 flex flex-col justify-center font-display">

    <!-- comment form -->
    <div class="w-full h-full flex flex-col items-center">

        <!-- tab content -->
        <div class="w-full h-full flex">

            <!-- commit tab -->
            <div class="container mx-auto mt-4 flex flex-col font-display" x-show="openTab === 2">
                <!-- submit form -->
                <div class="flex flex-col container mx-auto w-5/6 bg-gray-200 rounded">

                    <div class="flex justify-center">
                        <h3 class="mt-2 ml-8 text-regular text-gray-600">ثبت دیدگاه</h3>
                    </div>
                    <div class="w-full lg:w-full mx-auto">
                        <form action="#" method="get">
                            <div class="flex flex-col justify-between mt-4">
                                <!-- full-name and mobile -->
                                <div class="flex flex-col w-full lg:flex lg:flex-row md:flex md:flex-row">
                                    <!-- full-name -->
                                    <div class="lg:mr-4 mx-1 lg:flex lg:flex-row lg:w-auto">
                                        <label for="family" class="text-regular text-gray-600 lg:ml-2 ">نام و نام خانوادگی </label>
                                        <input type="text" name="family" class="w-full lg:w-auto border border-gray-400 h-8 rounded text-regular text-gray-600 pr-2">
                                    </div>
                                    <!-- end full-name -->

                                    <!-- mobile/email -->
                                    <div class="lg:mt-0 md:mt-0 mt-2 mx-1 lg:w-auto lg:flex lg:flex-row md:ml-3">
                                        <label for="mobile" class="text-regular text-gray-600 lg:ml-2 ">موبایل / ایمیل </label>
                                        <input type="text" name="mobile" class="w-full lg:w-auto border border-gray-400 h-8 rounded text-regular text-gray-600 pr-2">
                                    </div>
                                    <!-- mobile/email -->
                                </div>
                                <!-- end full-name and mobile -->

                                <!-- commit -->
                                <div class="relative lg:flex lg:flex-row lg:w-full flex flex-col mt-4 mb-8 md:flex md:flex-col">
                                    <label for="full-name" class="lg:mr-14 md:w-max md:mr-2 text-regular text-gray-600">ثبت دیدگاه</label>
                                    <textarea cols="2"
                                              class="lg:mr-1 lg:w-78 pr-2 border border-gray-400 rounded md:w-full"></textarea>
                                    <span class="absolute left-4 lg:left-4 lg:ml-4 lg:top-16 md:top-16 top-16 mt-3 ml-8 text-gray-500">100 / 0</span>
                                </div>
                                <div class="flex justify-end">

                                </div>
                                <!-- commit -->

                                <!-- bottom -->
                                <div class="w-full flex mx-auto mb-4">
                                    <button type="submit"
                                            class="flex mx-auto justify-center py-1 w-1/5 h-auto text-center text-white rounded hover:bg-blue-400 h-8 block bg-blue-300 ">
                                        ثبت دیدگاه
                                    </button>
                                </div>

                                <!-- end bottom -->
                            </div>

                        </form>
                    </div>
                </div>
                <!-- end submit form -->

                <!-- show comment -->
                <div class="flex flex-col mt-8">

                    <!--- new-comment -->
                    <div class="container mx-auto mt-6 lg:flex lg:flex-row flex flex-col lg:w-4/5">
                        <!-- image user -->
                        <div class="md:mb-2 mb-2 lg:mb-0 lg:mr-0 mr-2">
                            <img src="{{asset('/img/01.jpg')}}" class="w-20 h-16" alt="img-user">
                        </div>
                        <!-- end image user -->

                        <!-- comment section -->
                        <div class="border lg:w-full w-11/12 mr-4">
                            <!-- feature -->
                            <div class="w-full mt-4 lg:flex lg:flex-row flex flex-col justify-between">
                                <!-- user & date -->
                                <div class="flex mr-8">
                                    <!-- user name -->
                                    <div class="w-max">
                                        <span class="text-gray-600 font-normal text-light">ناصر شرافتی نیا</span>
                                    </div>
                                    <!-- end user name -->

                                    <!-- date -->
                                    <div class="mr-8">
                                        <span class="text-gray-500">1399/11/24</span>
                                    </div>
                                    <!-- end date -->
                                </div>
                                <!-- end user & date -->

                                <!-- answer comment -->
                                <div class="flex">
                                    <!-- user name -->
                                    <div class="w-max lg:mr-4 lg:ml-4 mr-8 mt-2">
                                        <a href="#" class="text-gray-600 font-normal text-light">پاسخ به این نظر<i class="fa fa-share-square-o text-gray-300 mr-2"></i></a>
                                    </div>
                                    <!-- end user name -->
                                </div>
                                <!-- end answer comment -->
                            </div>
                            <!-- end feature -->

                            <!-- body -->
                            <div class="mt-8 mr-4">
                                <p class="text-gray-600 text-light font-normal">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .</p>
                            </div>
                            <!-- end body -->

                            <!-- vote -->
                            <div class="flex justify-end ml-6 mb-2">
                                <ul class="pl-4 my-2 flex flex-row">
                                    <li class="ml-8">
                                        <a href="#" class="text-gray-400"> <i
                                                class="fa fa-thumbs-o-down text-gray-400 ml-2 text-light font-normal"></i>2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-400"><i
                                                class="fa fa-thumbs-o-up text-gray-400 ml-2 text-light font-normal"></i>10</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end vote -->
                        </div>
                        <!-- comment section -->
                    </div>
                    <!-- end new-comment -->

                    <!-- replay -->
                    <div class="container lg:mr-auto lg:ml-20 lg:w-71 mt-6 mb-4 mr-8 lg:flex lg:flex-row flex flex-col">
                        <!-- image user -->
                        <div class="md:mb-2 mb-2 lg:mb-0 lg:ml-4">
                            <img src="{{asset('/img/01.jpg')}}" class="w-20 h-16" alt="img-user">
                        </div>
                        <!-- end image user -->

                        <!-- comment section -->
                        <div class="border lg:w-full w-90 ">
                            <!-- feature -->
                            <div class="w-full mt-4 lg:flex lg:flex-row flex flex-col lg:justify-between">
                                <!-- user & date -->
                                <div class="flex mr-8">
                                    <!-- user name -->
                                    <div class="w-max">
                                        <span class="text-gray-500 font-normal text-light">ناصر شرافتی</span>
                                    </div>
                                    <!-- end user name -->

                                    <!-- date -->
                                    <div class="mr-8">
                                        <span class="text-gray-500 font-normal text-light">1399/11/24</span>
                                    </div>
                                    <!-- end date -->
                                </div>
                                <!-- end user & date -->

                                <!-- answer comment -->
                                <div class="flex mt-2">
                                    <!-- user name -->
                                    <div class="w-max mr-8">
                                        <a href="#" class="text-gray-500 font-normal text-light">پاسخ به این نظر<i class="fa fa-share-square-o text-gray-300 mr-2"></i></a>
                                    </div>
                                    <!-- end user name -->

                                    <!-- date -->
                                    <div class="bg-blue-400 mr-8">
                                        <i class=""></i>
                                    </div>
                                    <!-- end date -->
                                </div>
                                <!-- end answer comment -->
                            </div>
                            <!-- end feature -->

                            <!-- body -->
                            <div class="mt-8 mr-4">
                                <p class="text-gray-600 text-light font-normal">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .</p>
                            </div>
                            <!-- end body -->

                            <!-- vote -->
                            <div class="flex justify-end ml-6">
                                <ul class="pl-4 my-2 flex flex-row">
                                    <li class="ml-8">
                                        <a href="#" class="text-gray-400"> <i
                                                class="fa fa-thumbs-o-down text-gray-400 ml-2 text-light font-normal"></i>2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-400"><i
                                                class="fa fa-thumbs-o-up text-gray-400 ml-2 text-light font-normal"></i>10</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end vote -->
                        </div>
                        <!-- comment section -->
                    </div>
                    <!-- end replay -->
                    <!-- end show comment -->
                </div>
                <!-- end show comment -->
            </div>
            <!-- end commit tab -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end comment form -->
</div>
