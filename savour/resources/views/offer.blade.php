<div class="_container bg-[#DFDFDF] py-4 mx-auto">

    <div class="_wrap flex m-4">

        <div class="_filter hidden md:flex w-[250px] flex-col gap-4 ">
            <h3 class="text-2xl py-3 pl-4">Filter</h3>
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
        <div class="_mainlist flex flex-col items-center">
            <div class="_infoBarLine flex flex-col md:flex-row px-5 justify-between items-center">
                {{-- search bar --}}
                <div class="flex text-gray-600 py-5 gap-3">
                    <input type="search" name="serch" placeholder="Search"
                        class="bg-white h-10 left-0 w-[300px] lg:w-[600px] rounded-full text-sm focus:outline-none ">
                    <button type="submit">
                        <svg class="h-4 w-4 mr-10 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                            y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
                <a href="#">
                    <div
                        class="w-[150px] px-5 py-2 bg-green-800 hover:bg-[#D49A3D] rounded-lg text-white cursor-pointer">
                        Nearby me</div>
                </a>


            </div>
            {{-- cards --}}
            <div class="_cards flex flex-wrap px-3">

                <div class="_productCard flex scale-100 transition-all hover:scale-105">
                    <div class="flex flex-col items-center rounded-lg shadow-lg bg-white max-w-[320px] m-4">
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg w-48"
                                src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png" alt="" />
                            {{-- should add heart for save? --}}
                        </a>
                        <div class="p-6">
                            <div class="flex justify-between">
                                <h5 class="_foodName text-gray-900 text-2xl font-medium mb-2">Big Burger</h5>
                                <p class="_price text-red-500 text-3xl">$50</p>
                            </div>
                            <p class="_restaurant text-gray-700 text-base mb-1">
                                Restaurant Name :
                            </p>
                            <p class="_pickup text-gray-700 text-base mb-4">
                                <span>19:00 12/12</span>
                            </p>
                            <div class="flex justify-between items-end">
                                <a class="mr-3 text-sm" href="#">View Detail</a>
                                <button type="button"
                                    class="_addBtn inline-block px-6 py-2.5 bg-green-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#D49A3D] hover:shadow-lgfocus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_productCard flex scale-100 transition-all hover:scale-105">
                    <div class="flex flex-col items-center rounded-lg shadow-lg bg-white max-w-[320px] m-4">
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg w-48"
                                src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png" alt="" />
                            {{-- should add heart for save? --}}
                        </a>
                        <div class="p-6">
                            <div class="flex justify-between">
                                <h5 class="_foodName text-gray-900 text-2xl font-medium mb-2">Big Burger</h5>
                                <p class="_price text-red-500 text-3xl">$50</p>
                            </div>
                            <p class="_restaurant text-gray-700 text-base mb-1">
                                Restaurant Name
                            </p>
                            <p class="_pickup text-gray-700 text-base mb-4">
                                <span>19:00 12/12</span>
                            </p>
                            <div class="flex justify-between items-end">
                                <a class="mr-3 text-sm" href="#">View Detail</a>
                                <button type="button"
                                    class="_addBtn inline-block px-6 py-2.5 bg-green-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#D49A3D] hover:shadow-lgfocus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_productCard flex scale-100 transition-all hover:scale-105">
                    <div class="flex flex-col items-center rounded-lg shadow-lg bg-white max-w-[320px] m-4">
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg w-48"
                                src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png" alt="food pic" />
                            {{-- should add heart for save? --}}
                        </a>
                        <div class="p-6">
                            <div class="flex justify-between">
                                <h5 class="_foodName text-gray-900 text-2xl font-medium mb-2">Big Burger</h5>
                                <p class="_price text-red-500 text-3xl">$50</p>
                            </div>
                            <p class="_restaurant text-gray-700 text-base mb-1">
                                Restaurant Name :
                            </p>
                            <p class="_pickup text-gray-700 text-base mb-4">
                                <span>19:00 12/12</span>
                            </p>
                            <div class="flex justify-between items-end">
                                <a class="mr-3 text-sm" href="#">View Detail</a>
                                <button type="button"
                                    class="_addBtn inline-block px-6 py-2.5 bg-green-800 hover:bg-[#D49A3D] text-white font-medium text-xs leading-tight uppercase rounded shadow-md  hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- shopping cart --}}

<div class="cartBox hidden fixed overflow-hidden mx-5 bg-gray-200 shadow-2xl top-[86px] right-0 rounded p-5">
    <div class="cart ">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="_cartItemsList min-w-full">
                            <thead class="border-b">
                                <tr>

                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Item
                                    </th>
                                    <th scope="col"
                                        class="hidden md:inline-block text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Restaurant
                                    </th>
                                    <th scope="col"
                                        class="hidden md:inline-block text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Pick-Up time
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        QUANTITY
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Price
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="_itemWrap">

                            </tbody>
                        </table>
                        <div class="flex justify-end items-center gap-4 m-4">
                            <div class="cart-total">
                                <strong class="cart-total-title">Total</strong>
                                <span class="cart-total-price">$0</span>
                            </div>
                            <button class="_purchaseBtn px-4 py-2 bg-green-400 rounded mr-4"
                                type="button">PURCHASE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    //toggle the cart list
    const cartBtns = document.querySelectorAll(".cartBtn");
    const cartList = document.querySelector(".cartBox");

    cartBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            cartList.classList.toggle("hidden");
        });
    });

    // purchase click
    document.querySelector('._purchaseBtn').addEventListener('click', function purchaseClicked(event) {

        alert('Thank you for your purchase!')
        let cartItems = document.getElementsByClassName('_itemWrap')[0]
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)
        }
        updateCartTotal()
    })

    // remove items

    let removeCartItemBtns = document.getElementsByClassName('_removeBtn')

    for (let i = 0; i < removeCartItemBtns.length; i++) {
        let btn = removeCartItemBtns[i]
        btn.addEventListener('click', function(event) {
            let btnClicked = event.target;
            btnClicked.parentElement.parentElement.remove();
            updateCartTotal();
        })

    }
    // update cart total
    function updateCartTotal() {
        let cartItemContainer = document.getElementsByClassName('_cartItemsList')[0]
        let cartRows = cartItemContainer.querySelectorAll('._cart-row')
        let total = 0
        for (let i = 0; i < cartRows.length; i++) {
            let cartRow = cartRows[i]
            let priceElement = cartRow.getElementsByClassName('_price')[0]
            let quantityElement = cartRow.getElementsByClassName('_cart-quantity-input')[0]

            let price = parseFloat(priceElement.innerText.replace('$', ''))
            let quantity = quantityElement.value
            total = total + (price * quantity);
        }
        total = Math.round(total * 100) / 100
        document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
    }

    // update and avoid minus quantity

    let quantityInputs = document.getElementsByClassName('_cart-quantity-input')
    for (let i = 0; i < quantityInputs.length; i++) {
        let input = quantityInputs[i]
        input.addEventListener('change', function quantityChanged(event) {
            let input = event.target
            if (isNaN(input.value) || input.value <= 0) {
                input.value = 1
            }
            updateCartTotal();
        })

    }

    ////// count the items in the cart and display on the icon (not working)
    // function updateIconTotal() {
    //     let cartItemContainer = document.getElementsByClassName('_cartItemsList')[0]
    //     let cartRows = cartItemContainer.querySelectorAll('._cart-row')
    //     let totalItems = 0
    //     let quantityInputs = document.getElementsByClassName('_cart-quantity-input')

    //     for (let i = 0; i < quantityInputs.length; i++) {
    //         let input = quantityInputs[i]
    //         input.addEventListener('change', function(event){
    //             let input = event.target
    //             totalItems += input.value
    //             console.log(totalItems)
    //         })


    //     }
    // }




    // add to the cart

    let addToCartButtons = document.getElementsByClassName('_addBtn')


    for (let i = 0; i < addToCartButtons.length; i++) {
        let btn = addToCartButtons[i]

        btn.addEventListener('click', function addToCartClicked(event) {

            let btn = event.target

            let shopItem = btn.parentElement.parentElement;
            let title = shopItem.getElementsByClassName('_foodName')[0].innerText
            let price = shopItem.getElementsByClassName('_price')[0].innerText
            let restaurant = shopItem.getElementsByClassName('_restaurant')[0].innerText
            let pickup = shopItem.getElementsByClassName('_pickup')[0].innerText



            addItemToCart(title, price, restaurant, pickup);
            updateCartTotal()
        })

    }

    function addItemToCart(title, price, restaurant, pickup) {
        let cartRow = document.createElement('tr')
        cartRow.classList.add("border-b", "_cart-row")

        let cartItems = document.getElementsByClassName('_cartItemsList')[0]
        let cartItemNames = cartItems.getElementsByClassName('_foodInCart')

        // not working with add quantity!!!!!!!
        for (let i = 0; i < cartItemNames.length; i++) {
            if (cartItemNames[i].innerText == title){
                
                let quantityElement = cartRow.getElementsByClassName('_cart-quantity-input')[0]
                let quantity = quantityElement.value
                quantity++
               
            }
            console.log(quantity)
        }
        let cartRowContents = `                   
                                <td class="align-baseline _foodInCart text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">${title}
                                </td>
                                <td class="align-baseline hidden md:inline-block text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    ${restaurant}
                                </td>
                                <td class="align-baseline hidden md:inline-block text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    ${pickup}
                                </td>
                                <td class="align-baseline text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <input class="_cart-quantity-input w-[50px]" type="number" value="1">
                                </td>
                                <td class="align-baseline _price text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    ${price}
                                </td>
                                <td class="align-baseline text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <button class="_removeBtn bg-green-400 px-4 py-2 rounded"
                                        type="button">REMOVE</button>
                                </td>
                            `
        cartRow.innerHTML = cartRowContents
        cartItems.append(cartRow)

        // to remove
        cartRow.getElementsByClassName('_removeBtn')[0].addEventListener('click', function(event) {
            let btnClicked = event.target;
            btnClicked.parentElement.parentElement.remove();
            updateCartTotal();
        })

        // update the quantity
        cartRow.getElementsByClassName('_cart-quantity-input')[0].addEventListener('change', function quantityChanged(
            event) {
            let input = event.target
            if (isNaN(input.value) || input.value <= 0) {
                input.value = 1
            }
            updateCartTotal();
        })
    }
</script>
