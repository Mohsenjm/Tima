<header class="bg-white shadow-lg container mx-auto z-10 md:pr-4 mb-4">

    {{--        top menu--}}
    <nav class="flex  items-center flex-wrap " x-data="{isOpen:false}">

        {{--        logo--}}
        <a href="#" class="px-4 py-4 lg:px-0 lg:py-0">
            <img class="w-16 h-16" src="{{asset('/img/icon3.png')}}" alt="logo">
        </a>
{{--        onclick="openFunction()"--}}
        {{--        button menu--}}
        <button @click="isOpen = !isOpen"
                class="open-btn w-9 h-9 hover:bg-gray-600 rounded lg:hidden xl:hidden mr-auto">
            <i class="fa fa-navicon fa-2x"></i>
        </button>
<!--        <button type="button" id="close"
                class="hidden w-9 h-9 hover:bg-gray-600 rounded lg:hidden mr-auto">
            <i class="fa fa-close fa-2x"></i>
        </button>-->

        {{--        top menu--}}
        <div id="topMenu" :class="isOpen ? 'show' : 'hidden' "
             class="w-full lg:flex lg:flex-row lg:flex-grow lg:w-auto lg:justify-between items-center justify-between flex flex-col">
            <div class="mb-4 lg:mb-0">
                <a href="#"
                   class=" fa fa-send-o fa-2x pl-4 px-4 py-1 hover:bg-gray-600 rounded hover:text-white"></a>
                <a href="#"
                   class=" fa fa-instagram fa-2x pl-4 px-4 py-1 hover:bg-gray-600 rounded hover:text-white"></a>
                <a href="#"
                   class=" fa fa-whatsapp fa-2x pl-4 px-4 py-1 hover:bg-gray-600 rounded hover:text-white"></a>
            </div>

            {{--            search form--}}
            <div class=" mb-4 lg:mb-0">
                <form action="#" class="relative w-max">
                    <input type="text" name="txt-search"
                           class="lg:w-96 w-80 h-10 pr-4  border py-2 px-3 bg-gray-300 rounded "
                           placeholder="جستجو در تیما زعفران ...">
                    <i class="fa fa-search text-gray-500 absolute top-3 left-2"></i>
                </form>
            </div>

            {{--            contact us--}}
            <div class=" mb-4 lg:mb-0 lg:ml-9">
                <ul class="flex pt-2">
                    <li class="px-4 ml-4 hover:bg-gray-600 rounded hover:text-white">
                        <i class="fa fa-phone"></i>
                        <a href="#">تماس&nbsp;با&nbsp;ما</a>
                    </li>
                    <li class="px-4 hover:bg-gray-600 rounded hover:text-white">
                        <i class="fa fa-align-left"></i>
                        <a href="#">سوالات&nbsp;متداول</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- bottom menu -->
        <div id="bottomMenu" :class="isOpen ? 'show' : 'hidden' "
             class="bottom-navbar  w-full lg:flex lg:flex-row lg:flex-grow lg:w-auto items-center justify-between flex flex-col">
            {{--            right menu--}}

            <div class="flex w-max mb-4 lg:inline-flex lg:mb-0 xl:mb-0 ">
                <ul class="flex flex-col  lg:flex lg:flex-row">
                    <li class="py-4 px-4 lg:px-0"><a href="#"
                                                     class="px-2 py-2  hover:bg-gray-600 rounded hover:text-white">صفحه&nbsp;اصلی</a>
                    </li>
                    <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">زعفران</a>
                    </li>
                    <li class="pr-6 px-4 py-4"><a href="#"
                                                  class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">زرشک</a>
                    </li>
                    <li class="pr-6 px-4 py-4"><a href="#"
                                                  class="px-2 py-2  hover:bg-gray-600 rounded hover:text-white">زرشک</a>
                    </li>
                    <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">سایر&nbsp;محصولات</a>
                    </li>
                    <li class="pr-6 px-4 py-4"><a href="#"
                                                  class="px-2 py-2  hover:bg-gray-600 rounded hover:text-white">مجوزها&nbsp;و&nbsp;تقدیرنامه</a>
                    </li>
                    <li class="pr-6 px-4 py-4"><a href="#" class="px-2 py-2 hover:bg-gray-600 rounded hover:text-white">درباره&nbsp;ما</a>
                    </li>
                </ul>
            </div>

            {{--            left menu--}}

            <div class="flex ml-4">
                {{--                       shopping cart --}}
                <button class="ml-14">
                    <a href="#"
                       class="fa fa-shopping-cart fa-2x px-2 py-2 hover:bg-gray-600 rounded hover:text-white"></a>
                </button>

                {{--            register form--}}
                <button type="button" class="h-10 flex bg-blue-500 lg:mt-2 ml-4 hover:bg-gray-600 rounded ">
                    <a href="#"
                       class="fa fa-arrow-circle-left fa-2x w-9 pt-1 bg-blue-400 hover:bg-gray-600 hover:text-white "></a>
                    <span class="mt-0 mx-4 pt-2 font-bold text-white">ورود / ثبت نام</span>
                </button>
            </div>

        </div>

    </nav>


</header>
