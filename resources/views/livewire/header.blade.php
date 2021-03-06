<header class="bg-white shadow-lg md:pr-4 mb-4">

    {{--        top menu--}}
    <nav  class="container max-w-1200 mx-auto flex  items-center flex-wrap font-display text-regular text-gray-500
                 " x-data="{isOpen:false}">

        {{--        logo--}}
        <a href="#" class="px-4 py-4 lg:px-0 lg:py-0">
            <img class="w-16 h-16" src="{{asset('/img/icon3.png')}}" alt="logo">
        </a>

        {{--        button menu--}}
        <button @click="isOpen = !isOpen"
                class="open-btn w-9 h-9 hover:bg-gray-600 rounded lg:hidden xl:hidden mr-auto">
            <i class="fa fa-navicon fa-2x"></i>
        </button>

        {{--        top menu--}}
        <div id="topMenu" :class="isOpen ? 'show' : 'hidden' "
             class="w-full lg:flex lg:flex-row lg:flex-grow lg:w-auto lg:justify-between items-center justify-between flex flex-col">

            <!-- social icon -->
            <div class="mb-4 lg:mb-0 lg:mr-12">
                <ul class="flex">
                    <li>
                        <a href="#"
                           class="fa fa-instagram fa-2x social"></a>
                    </li>
                    <li>
                        <a href="#"
                           class=" fa fa-send-o fa-2x social"></a>
                    </li>
                    <li>
                        <a href="#"
                           class="fa fa-whatsapp fa-2x social"></a>
                    </li>
                </ul>


            </div>

            {{--            search form--}}
            <div class="lg:w-2/4 w-90 flex mb-4 lg:mb-0">
                <form action="#" class="relative w-full">
                    <input type="text" name="txt-search"
                           class="w-full mx-auto h-10 py-2 px-3 bg-gray-100 rounded"
                           placeholder="جستجو در تیما زعفران ...">
                    <i class="fa fa-search text-gray-500 absolute top-3 left-2"></i>
                </form>
            </div>

            {{--            contact us--}}
            <div class=" mb-4 lg:mb-0">
                <ul class="flex pt-2 ml-2">
                    <li class="px-4 ml-4 hover:bg-gray-600 rounded hover:text-white">
                        <i class="fa fa-phone text-gray-300"></i>
                        <a href="#">تماس&nbsp;با&nbsp;ما</a>
                    </li>
                    <li class="pr-4hover:bg-gray-600 rounded hover:text-white">
                        <i class="fa fa-align-left text-gray-300"></i>
                        <a href="#">سوالات&nbsp;متداول</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- bottom menu -->
        <div id="bottomMenu" :class="isOpen ? 'show' : 'hidden' "
             class="bottom-navbar  w-full lg:flex lg:flex-row lg:flex-grow lg:w-auto items-center justify-between flex flex-col">
            {{--            right menu--}}

            <div class="flex mb-4 lg:w-max lg:inline-flex lg:mb-0 ">
                <ul class="flex flex-col w-full  lg:flex lg:flex-row">
                    <li class="py-4 px-4 lg:px-0"><a href="#"
                                                     class="px-2 lg:px-0 py-2  nav-menu">صفحه&nbsp;اصلی</a>
                    </li>
                    <li class="pr-6 py-4"><a href="#" class="nav-menu">زعفران</a>
                    </li>
                    <li class="pr-6 py-4"><a href="#"
                                             class="nav-menu">زرشک</a>
                    </li>
                    <li class="pr-6 py-4"><a href="#"
                                             class="nav-menu">زرشک</a>
                    </li>
                    <li class="pr-6 py-4"><a href="#" class="nav-menu">سایر&nbsp;محصولات</a>
                    </li>
                    <li class="pr-6 py-4"><a href="#"
                                             class="nav-menu">مجوزها&nbsp;و&nbsp;تقدیرنامه</a>
                    </li>
                    <li class="pr-6 py-4"><a href="#" class="nav-menu">درباره&nbsp;ما</a>
                    </li>
                </ul>
            </div>

            {{--            left menu--}}

            <div class="flex ml-2">
                {{--                       shopping cart --}}
                <button class="ml-6">
                    <a href="#"
                       class="fa fa-shopping-cart text-gray-400 fa-2x px-2 text-2xl hover:bg-gray-600 rounded hover:text-white"></a>
                </button>

                {{--            register form--}}
                <button type="button" class="w-44 h-10 flex bg-blue-400 hover:bg-blue-500 lg:mb-0 mb-2 ">
                    <a href="#"
                       class="fa fa-arrow-circle-left fa-2x w-12 pt-1 bg-blue-300 hover:bg-blue-500 hover:text-white "></a>
                    <span class="mt-0 mx-auto pt-2 text-white">ورود / ثبت نام</span>
                </button>
            </div>

        </div>

    </nav>


</header>
