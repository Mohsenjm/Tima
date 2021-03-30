<div class="container max-w-5xl mx-auto h-auto my-4">

    <!-- Breadcrumb -->
    <div class="mb-2">
        <nav class="bg-white border rounded text-black font-bold" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex p-2">
                <li class="flex items-center">
                    <a href="#" class="px-2">فروشگاه</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li class="flex items-center">
                    <a href="#" class="px-2">زعفران ارگانیک</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <a href="#" class="text-gray-500 px-2" aria-current="page">خاتم 1 مثقالی</a>
                </li>
            </ol>
        </nav>

    </div>
    <!-- end Breadcrumb -->

    <!-- product page -->
    <div class="bg-white lg:w-full lg:h-auto rounded border">

        <!-- header-->
        <div class="py-2 pr-4">
            <span>خاتم 1 مثقالی</span>
        </div>
        <!-- end header -->
        <hr class="border-gray-300">

        <!-- product box -->
        <div class="lg:flex lg:h-auto lg:flex-row lg:mt-4 ">
            <div class="lg:w-full lg:h-auto lg:flex lg:flex-row">
                <!-- image box -->
                <div class="lg:w-4/6 lg:h-auto lg:flex">
                    <!-- right box -->
                    <div class="lg:w-4/6 lg:h-auto lg:flex">
                        <!-- image thumbnails -->
                        <div class="lg:w-28 lg:h-full lg:flex lg:flex-col box-border lg:mr-4
                         flex">
                            <div class="my-2 mx-2">
                                <img src="{{asset('/img/s1.jpg')}}" alt="product-image"
                                     class="box-border h-16 w-32 p-1 rounded border">
                            </div>
                            <div class="my-2 mx-2">
                                <img src="{{asset('/img/s2.jpg')}}" alt="product-image"
                                     class="box-border h-16 w-32 p-1 rounded border">
                            </div>
                            <div class="my-2 mx-2">
                                <img src="{{asset('/img/s3.jpg')}}" alt="product-image"
                                     class="box-border h-16 w-32 p-1 rounded border">
                            </div>
                            <div class="my-2 mx-2">
                                <img src="{{asset('/img/s4.jpg')}}" alt="product-image"
                                     class="box-border h-16 w-32 p-1 rounded border">
                            </div>
                        </div>
                        <!-- end image thumbnails -->

                        <!-- image preview -->
                        <div class="relative lg:w-full lg:h-auto lg:mr-2 lg:box-border">
                            <img src="{{asset('/img/s5.jpg')}}" alt="product-image"
                                 class="absolut box-border lg:w-full lg:h-full">
                        </div>
                        <!-- image preview -->
                    </div>
                    <!-- end right box -->

                    <!-- left box -->
                    <div
                        class="lg:w-1/3 lg:h-auto lg:mr-4 lg:mb-0 lg:flex lg:flex-col flex justify-center my-2 ">
                        <ul>
                            <li class="pt-2 text-gray-500">
                                <span>وضعیت :</span>
                                <span class="bg-green-400 px-2 text-white">موجود</span>
                            </li>
                            <li class="py-2 text-gray-500">
                                <span>وزن خالص :</span>
                                <span>1 مثقال معادل 4.6 گرم</span>
                            </li>
                            <li class="py-2 text-gray-500">
                                <span>وزن با بسته بندی :</span>
                                <span>10 گرم</span>
                            </li>
                            <li class="py-2 text-gray-500">
                                <span>نوع بسته بندی :</span>
                                <span>خاتم</span>
                            </li>
                            <li class="py-2 text-gray-500">
                                <span>ابعاد :</span>
                                <span>70 * 50</span>
                            </li>
                            <li class="bg-gray-300 text-gray-500 rounded w-max">
                                <span class="pr-1">برند :</span>
                                <span class="pl-2">تیما زعفران</span>
                            </li>
                        </ul>
                    </div>
                    <!-- end left box -->
                </div>
                <!-- end image box -->

                <!-- send box -->
                <div class="lg:w-1/3 lg:h-full lg:mr-2 flex flex-col justify-center">
                    <ul class="flex flex-col mr-4">
                        <li class="flex items-center">
                            <img src="{{asset('/img/buy-icon.png')}}" class="w-8 h-12">
                            <span class="text-gray-500 mr-4">ضمانت محصول ارگانیک</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa fa-check-square-o text-4xl text-blue-400"></i>
                            <span class="text-gray-500 mr-4">آماده ارسال از انبار فروشگاه</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa fa-check-square-o text-4xl text-blue-400"></i>
                            <span class="text-gray-500 mr-4">ضمانت بازگشت وجه و اصالت کالا</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{asset('/img/box.png')}}" class="w-8 h-8 text-blue-400">
                            <span class="text-gray-500 mr-4">امکن خرید و پرداخت در محل</span>
                        </li>

                    </ul>

                    <!-- form box -->
                    <div class="mt-6">
                        <!-- price  box -->
                        <div class="flex justify-between items-center">
                            <span class="mr-4 text-gray-400 line-through">75000 تومان</span>
                            <span class="bg-red-600 rounded px-2 py-2">20 %</span>
                            <span class="ml-4 text-gray-500">65000 تومان</span>
                        </div>
                        <!-- end price box -->

                        <!-- form quantity -->
                        <form accept-charset="#" method="get">
                            <div class="input-group bg-gray-300 flex justify-center rounded my-2 flex-shrink">
                                <input type="button" value="+" class="button-plus text-lg bg-gray-300"
                                       data-field="quantity">
                                <input type="text" step="1" max="" value="1" name="quantity"
                                       class="flex text-center mx-1 bg-gray-300 w-12">
                                <input type="button" value="-" class="button-minus text-lg bg-gray-300"
                                       data-field="quantity">
                            </div>
                            <button type="submit"
                                    class="text-center mt-4 rounded hover:bg-blue-400 h-8 w-full block bg-blue-500 ">ثبت
                            </button>
                        </form>
                        <!-- end form quantity -->
                    </div>
                    <!-- end form box -->
                </div>
                <!-- end sen box -->

            </div>
            <!-- end product box -->
        </div>
        <!-- end product page -->

        <!-- comment box  -->
                @livewire('commit')
    <!-- end comment box -->
    </div>
</div>
