
<div class="_container bg-white py-4">

<div class="_wrap flex m-4">
   
    <div class="_filter hidden md:flex w-[250px] flex-col gap-4">
        <h3 class="text-2xl pl-4">Filter</h3>
        <hr>
        <div class="pl-4">
            <p class="text-xl my-4">By Category</p>
            <div class="_categories flex flex-col">
                <div>
                    <input type="checkbox" name="appetizer" id="appetizer">
                    <label for="appetizer">Appetizer</label>
                </div>
                <div>
                    <input type="checkbox" name="meal" id="Meal">
                    <label for="Meal">Meal</label>
                </div>
                <div>
                    <input type="checkbox" name="dessert" id="dessert">
                    <label for="dessert">Dessert</label>
                </div>
                <div>
                    <input type="checkbox" name="soup" id="soup">
                    <label for="soup">Soup</label>
                </div>
            </div>
        </div>
        <div class="pl-4">
            <p class="text-xl my-4">By Restaurant</p>
            <div class="_categories flex flex-col">
                <div>
                    <input type="checkbox" name="burger" id="burger">
                    <label for="burger">Burger King</label>
                </div>
                <div>
                    <input type="checkbox" name="partigiano" id="partigiano">
                    <label for="partigiano">Partigiano</label>
                </div>
                <div>
                    <input type="checkbox" name="kfc" id="kfc">
                    <label for="kfc">KFC</label>
                </div>

            </div>
        </div>




    </div>
    <div class="_mainlist">
        <div class="_infoBarLine flex flex-col px-5">
        {{-- search bar --}}
        <div class="flex text-gray-600 py-5 gap-3">
            <input type="search" name="serch" placeholder="Search"
                class="bg-white h-10 left-0 w-[300px] lg:w-[600px] rounded-full text-sm focus:outline-none ">
            <button type="submit">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                    y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                    xml:space="preserve" width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </div>
        <a href="#"><div class="w-[150px] px-5 py-2 bg-green-800 rounded-lg text-white cursor-pointer">Nearby me</div></a>


    </div>
    {{-- cards --}}
        <div class="_cards flex flex-wrap px-3">
        
        <div class="_productCard flex">
            <div class="rounded-lg shadow-lg bg-white max-w-[320px] m-4">
                <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img class="rounded-t-lg w-48" src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png"
                        alt="" />
                    {{-- should add heart for save? --}}
                </a>
                <div class="p-6">
                    <div class="flex justify-between">
                        <h5 class="text-gray-900 text-2xl font-medium mb-2">Food name</h5>
                        <p class="text-red-500 text-3xl">$50</p>
                    </div>
                    <p class="text-gray-700 text-base mb-4">
                        Restaurant Name :
                    </p>
                    <p class="text-gray-700 text-base mb-4">
                        pick-up time: <span>19:00 12/12</span>
                    </p>
                    <div class="flex justify-between items-end">
                        <a href="#">View Detail</a>
                        <button type="button"
                            class="_addBtn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="_productCard flex">
            <div class="rounded-lg shadow-lg bg-white max-w-[320px] m-4">
                <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img class="rounded-t-lg w-48" src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png"
                        alt="" />
                    {{-- should add heart for save? --}}
                </a>
                <div class="p-6">
                    <div class="flex justify-between">
                        <h5 class="text-gray-900 text-2xl font-medium mb-2">Food name</h5>
                        <p class="text-red-500 text-3xl">$50</p>
                    </div>
                    <p class="text-gray-700 text-base mb-4">
                        Restaurant Name :
                    </p>
                    <p class="text-gray-700 text-base mb-4">
                        pick-up time: <span>19:00 12/12</span>
                    </p>
                    <div class="flex justify-between items-end">
                        <a href="#">View Detail</a>
                        <button type="button"
                            class="_addBtn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>