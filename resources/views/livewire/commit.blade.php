<div class="bg-green-400 mt-6 flex flex-col justify-center">

    <!-- comment form -->
    <div
        x-data="{
            openTab:2,
            activeClasses:'border-b-2 border-blue-500',
            inactiveClasses:'text-black hover:text-gray-500'

        }"
        class="w-full h-full flex flex-col items-center bg-black">

        <!-- tab list -->
        <ul class="flex bg-white">
            <li @click="openTab =1" class="mx-6">
                <a :class="openTab === 1 ? activeClasses : inactiveClasses " href="#">مشخصات</a>
            </li>
            <li @click="openTab =2" class="mx-6">
                <a :class="openTab === 2 ? activeClasses : inactiveClasses " href="#">نظر کاربران</a>
            </li>
            <li @click="openTab =3" class="mx-6">
                <a :class="openTab === 3 ? activeClasses : inactiveClasses " href="#">پرسش و پاسخ</a>
            </li>
        </ul>
        <!-- end tab list -->

        <!-- tab content -->
        <div class="bg-blue-400 w-full h-full flex">

            <!-- specifications  -->
            <div class="mx-auto mt-4 flex" x-show="openTab === 1">بزودی</div>
            <!-- end specifications  -->

            <!-- commit tab -->
            <div id="commit-container" class="container mx-auto mt-4 flex" x-show="openTab === 2">
                <!-- submit form -->
                <div class="flex flex-col w-full bg-gray-200 rounded">

                    <div class="flex justify-center">
                        <h3>ثبت دیدگاه</h3>
                    </div>

                    <form action="#" method="get">
                        <div class="flex flex-col justify-between mt-4">
                            <!-- full-name and mobile -->
                            <div class="flex justify-between">
                                <!-- full-name -->
                                <div class="mr-4 ">
                                    <label for="full-name">نام و نام خانوادگی </label>
                                    <input type="text" class="border border-gray-400 rounded">
                                </div>
                                <!-- end full-name -->

                                <!-- mobile/email -->
                                <div class="ml-5">
                                    <label for="full-name">موبایل / ایمیل </label>
                                    <input type="text" class="border border-gray-400 rounded">
                                </div>
                                <!-- mobile/email -->
                            </div>
                            <!-- end full-name and mobile -->

                            <!-- commit -->
                            <div class="flex mt-4">
                                <label for="full-name" class="mr-14">ثبت دیدگاه</label>
                                <textarea cols="2" class="mr-1 border border-gray-400 rounded w-5/6"></textarea>
                            </div>
                            <div class="flex justify-end">
                                <span class="ml-8 text-gray-500">100 / 0</span>
                            </div>
                            <!-- commit -->

                            <!-- bottom -->
                            <div class="w-1/4 mx-auto mb-4">
                                <button type="submit"
                                        class="text-center text-white rounded hover:bg-blue-400 w-full h-8 block bg-blue-500 ">
                                    ثبت دیدکاه
                                </button>
                            </div>

                            <!-- end bottom -->
                        </div>

                    </form>
                </div>
                <!-- end submit form -->
            </div>
            <!-- end commit tab -->

            <!-- question and answer -->
            <div class="mx-auto mt-4 flex" x-show="openTab === 3">بزودی</div>
            <!-- end question and answer -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end comment form -->

    <!-- show comment -->
    <div class="bg-pink-600 flex mt-8">
        <div id="show-container" class="bg-white mx-auto mt-6 flex px-4">
            <!-- image user -->
            <div>
                <img src="{{asset('/img/01.jpg')}}" class="w-20 h-16" alt="img-user">
            </div>
            <!-- end image user -->

            <!-- comment box -->
            <div class="border w-full mr-4">
                <!-- feature -->
                <div class="w-full mt-4 flex justify-between">
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
                        <div class="w-max mr-4">
                            <span>پاسخ به این نظر</span>
                            <i class="fa fa-share-square-o text-gray-300"></i>
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

                <!-- answer text -->
                <div class="mt-8 mr-4">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .</p>
                </div>
                <!-- end answer text -->


                <!-- -->
                <div class="flex justify-end ml-6">
                    <div class="pl-4">
                        <i class="fa fa-thumbs-o-down text-gray-300"></i>
                        <spna class="text-gray-300">2</spna>
                    </div>
                    <di>
                        <i class="fa fa-thumbs-o-up text-gray-300"></i>
                        <spna class="text-gray-300">10</spna>
                    </di>

                </div>
                <!-- -->
            </div>
            <!-- comment box -->
        </div>
        <!-- end show comment -->
    </div>
</div>
