<div class="container mx-auto mt-4  bg-blue-500 flex flex-col mb-4">

    <!-- top slide -->

    <div id="slideshow" class="container mx-auto flex mb-5 bg-green-300">
        sdf
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

        <!--  card -->

        <div class="bg-white flex flex-col w-64 h-auto shadow-lg rounded-2xl">


            <!-- product image -->
            <div class=" px-4 mt-1 mb-4">
                <img class="object-cover rounded" src="{{asset('/img/01.jpg')}}" alt="carouselImage">
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
    </div>
</div>
