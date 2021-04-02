<div class="mt-6 flex flex-col justify-center">

    <!-- comment form -->
    <div
        x-data="{
            openTab:2,
            activeClasses:'border-b-2 border-blue-500 pb-2',
            inactiveClasses:'text-black hover:text-gray-500'

        }"
        class="w-full h-full flex flex-col items-center">


        <!-- tab list -->
        <ul class="flex w-full justify-around bg-white lg:justify-center">
            <li @click="openTab =1">
                <a :class="openTab === 1 ? activeClasses : inactiveClasses " href="#">مشخصات</a>
            </li>
            <li @click="openTab =2" class="lg:mx-6">
                <a :class="openTab === 2 ? activeClasses : inactiveClasses " href="#">نظر کاربران</a>
            </li>
            <li @click="openTab =3">
                <a :class="openTab === 3 ? activeClasses : inactiveClasses " href="#">پرسش و پاسخ</a>
            </li>
        </ul>
        <!-- end tab list -->
        <hr class="border-blue-400">
        <!-- tab content -->
        <div class="w-full h-full flex">

            <!-- specifications  -->
            <div class="mx-auto mt-4 flex" x-show="openTab === 1">بزودی</div>
            <!-- end specifications  -->

            <!-- commit tab -->
            <div class="container mx-auto mt-4 flex flex-col" x-show="openTab === 2">
                <!-- submit form -->
                <div class="flex flex-col w-full bg-gray-200 rounded">

                    <div class="flex justify-center">
                        <h3>ثبت دیدگاه</h3>
                    </div>
                    <div>
                        <form action="#" method="get">
                            <div class="flex flex-col justify-between mt-4">
                                <!-- full-name and mobile -->
                                <div class="flex flex-col lg:flex lg:flex-row justify-between">
                                    <!-- full-name -->
                                    <div class="mr-4 ">
                                        <label for="full-name">نام و نام خانوادگی </label>
                                        <input type="text" class="border border-gray-400 rounded">
                                    </div>
                                    <!-- end full-name -->

                                    <!-- mobile/email -->
                                    <div class="lg:ml-5 mr-10 mt-2">
                                        <label for="full-name">موبایل / ایمیل </label>
                                        <input type="text" class="border border-gray-400 rounded">
                                    </div>
                                    <!-- mobile/email -->
                                </div>
                                <!-- end full-name and mobile -->

                                <!-- commit -->
                                <div class="relative lg:flex lg:flex-row flex flex-col mt-4 mb-8">
                                    <label for="full-name" class="lg:mr-14 mr-8">ثبت دیدگاه</label>
                                    <textarea cols="2"
                                              class="lg:mr-1 mr-5 w-80 border border-gray-400 rounded lg:w-5/6"></textarea>
                                    <span class="absolute  md:left-36 left-4 lg:left-0 top-16 mt-2 ml-8 text-gray-500">100 / 0</span>
                                </div>
                                <div class="flex justify-end">

                                </div>
                                <!-- commit -->

                                <!-- bottom -->
                                <div class="w-full flex mx-auto mb-4">
                                    <button type="submit"
                                            class="flex mx-auto justify-center py-1 w-30  text-center text-white rounded hover:bg-blue-400 h-8 block bg-blue-300 ">
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
                    <div class="container mx-auto mt-6 lg:flex lg:flex-row flex flex-col">
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
                                        <span>ناصر شرافتی</span>
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
                                    <div class="w-max lg:mr-4 mr-8 mt-2">
                                        <a href="#">پاسخ به این نظر<i class="fa fa-share-square-o text-gray-300 mr-2"></i></a>
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
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .</p>
                            </div>
                            <!-- end body -->

                            <!-- vote -->
                            <div class="flex justify-end ml-6 mb-2">
                                <ul class="pl-4 my-2 flex flex-row">
                                    <li class="ml-8">
                                        <a href="#" class="text-gray-300"> <i
                                                class="fa fa-thumbs-o-down text-gray-300 ml-2"></i>2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-300"><i
                                                class="fa fa-thumbs-o-up text-gray-300 ml-2"></i>10</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end vote -->
                        </div>
                        <!-- comment section -->
                    </div>
                    <!-- end new-comment -->

                    <!-- replay -->
                    <div class="mt-6 lg:mr-20 mr-8 lg:flex lg:flex-row flex flex-col">
                        <!-- image user -->
                        <div class="md:mb-2 mb-2 lg:mb-0">
                            <img src="{{asset('/img/01.jpg')}}" class="w-20 h-16" alt="img-user">
                        </div>
                        <!-- end image user -->

                        <!-- comment section -->
                        <div class="border lg:w-full w-11/12 mr-4">
                            <!-- feature -->
                            <div class="w-full mt-4 lg:flex lg:flex-row flex flex-col lg:justify-between">
                                <!-- user & date -->
                                <div class="flex mr-8">
                                    <!-- user name -->
                                    <div class="w-max">
                                        <span>ناصر شرافتی</span>
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
                                <div class="flex mt-2">
                                    <!-- user name -->
                                    <div class="w-max mr-4">
                                        <a href="#">پاسخ به این نظر<i class="fa fa-share-square-o text-gray-300 mr-2"></i></a>
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
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .</p>
                            </div>
                            <!-- end body -->

                            <!-- vote -->
                            <div class="flex justify-end ml-6">
                                <ul class="pl-4 my-2 flex flex-row">
                                    <li class="ml-8">
                                        <a href="#" class="text-gray-300"> <i
                                                class="fa fa-thumbs-o-down text-gray-300 ml-2"></i>2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-300"><i
                                                class="fa fa-thumbs-o-up text-gray-300 ml-2"></i>10</a>
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

            <!-- question and answer -->
            <div class="mx-auto mt-4 flex" x-show="openTab === 3">بزودی</div>
            <!-- end question and answer -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end comment form -->
</div>
