<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="flex flex-col lg:flex-row justify-center">
        <!-----------Mission session------------------>
        <section class="_mission flex flex-col w-15 mt-10 mb-20 lg:ml-10">
            <h2 class="text-6xl ml-3">OUR MISSION</h2>
            <div class="mt-10">
                <svg aria-hidden="true" class="ml-3 w-10 h-10 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                </svg>

                <p class="w-4/5 ml-3 text-xl lg:w-[550px]">In Luxembourg alone, an average of 118 kg of food waste per person ends up in the bin each year. Creating food consumes a lot of energy and often results in long transport routes.
                    <br>
                    Our goal is to offer restaurants the opportunity to sell meals through our website at a discounted price before they expire.
                </p>
            </div>
        </section>

        <!-- 3 Cards for Eco-Friendly -->

        <div class="flex flex-col items-center w-m-screen lg:flex-row lg:items-stretch lg:w-m-screen-lg bg-white lg:ml-10">
            <!-- Card1 Food Save-->
            <div class="flex flex-col lg:flex lg:flex-row">
                <div class="_wildCard mt-10 w-[250px] h-[250px] m-auto p-4  sm:p-8">
                    <svg class="w-[100px] h-[100px] mb-1 fill-black" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path d="M2423 4115 c-29 -8 -72 -24 -95 -36 -53 -27 -140 -113 -166 -165 -19
-38 -25 -41 -82 -52 -150 -28 -257 -127 -295 -272 l-11 -45 -82 -3 c-75 -3
-83 -5 -103 -30 -20 -25 -21 -34 -16 -152 13 -265 101 -480 271 -659 334 -350
861 -410 1263 -144 84 55 203 173 263 259 111 160 167 333 177 544 5 118 4
127 -16 152 -20 25 -28 27 -103 30 l-82 3 -11 45 c-44 172 -205 292 -372 278
l-54 -5 -26 50 c-51 101 -165 185 -282 207 -70 13 -114 12 -178 -5z m228 -161
c65 -35 113 -97 135 -170 10 -36 24 -60 40 -71 24 -15 29 -15 78 0 29 10 68
17 87 17 42 0 126 -39 156 -71 22 -24 53 -88 53 -109 0 -7 -207 -10 -640 -10
-711 0 -659 -6 -621 68 41 79 123 124 220 120 71 -3 84 6 107 75 23 69 103
150 170 171 70 22 150 15 215 -20z m755 -626 c-21 -223 -101 -399 -247 -547
-106 -106 -216 -172 -366 -218 -78 -23 -104 -26 -233 -26 -129 0 -155 3 -233
26 -150 46 -260 111 -367 219 -144 143 -227 326 -245 536 l-8 82 853 0 853 0
-7 -72z" />
                            <path d="M1903 2235 c-74 -20 -161 -66 -221 -117 -28 -24 -195 -211 -371 -416
-235 -273 -321 -380 -321 -398 0 -27 40 -74 64 -74 8 0 22 3 30 6 9 4 166 180
350 393 271 314 344 392 389 419 102 61 109 62 564 62 400 0 414 -1 433 -20
25 -25 26 -61 3 -89 -15 -18 -52 -28 -213 -58 -210 -38 -240 -51 -240 -103 0
-58 20 -64 349 -108 l305 -42 260 106 c636 257 666 269 684 257 19 -12 25 -33
14 -49 -13 -20 -945 -597 -995 -616 -43 -16 -85 -18 -495 -18 -359 0 -452 -3
-473 -14 -57 -29 -319 -256 -325 -281 -13 -53 49 -100 97 -75 12 7 81 61 154
121 l132 108 454 3 454 3 60 25 c34 15 241 138 460 275 624 388 595 367 616
447 30 111 -56 219 -173 218 -32 -1 -154 -46 -492 -183 l-449 -183 -69 10 -69
9 36 32 c43 40 74 107 75 161 0 58 -42 136 -92 170 l-41 29 -446 2 c-359 2
-456 -1 -498 -12z" />
                        </g>
                    </svg>
                    <div class="flex flex-row ml-5 items-center">
                        <div class="text-black text-[50px] font-normal">{{ round($soldMeals * 0.4, 2)}}</div>
                        <div class="text-black ml-3 text-[25px]">KGS</div>
                    </div>
                    <div class="text-slate-500 text-[20px] font-normal ml-5">Food Saved</div>
                </div>


                <!-- Card2 Emission Save-->
                <div class="flex flex-row">
                    <div class="_wildCard mt-10 w-[250px] h-[250px] m-auto p-4 sm:p-8">
                        <svg class=" w-[100px] h-[100px] mb-1 fill-black" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M1780 4313 c-343 -37 -681 -231 -888 -512 -190 -257 -285 -615 -242
-914 l10 -69 -77 -83 c-252 -269 -328 -641 -203 -988 91 -251 316 -476 567
-567 198 -71 442 -78 618 -17 l40 14 63 -58 c153 -143 352 -245 574 -295 107
-25 366 -25 478 0 237 51 458 173 618 339 l62 66 63 -29 c150 -69 364 -96 533
-66 195 34 365 119 507 255 276 264 368 661 237 1024 -86 236 -310 469 -531
552 l-47 17 -7 66 c-42 391 -338 710 -720 777 -145 25 -304 14 -425 -29 l-45
-16 -24 32 c-51 69 -229 237 -301 285 -251 168 -566 247 -860 216z m316 -168
c300 -52 542 -200 722 -440 39 -51 79 -94 93 -99 20 -7 44 -2 105 22 209 80
437 63 624 -45 83 -49 214 -180 263 -263 55 -96 87 -206 94 -327 7 -122 11
-126 123 -167 42 -14 109 -48 150 -75 373 -239 481 -736 240 -1104 -225 -345
-664 -462 -1034 -277 -43 22 -90 40 -105 40 -20 0 -46 -22 -115 -96 -106 -114
-187 -177 -304 -237 -339 -173 -719 -152 -1049 59 -29 18 -95 74 -147 124 -65
62 -102 90 -119 90 -13 0 -55 -11 -95 -24 -237 -81 -490 -50 -695 84 -368 240
-475 723 -242 1095 37 59 94 123 196 217 26 24 32 56 19 108 -20 87 -23 278
-6 384 59 358 274 655 593 818 218 113 461 152 689 113z" />
                                <path d="M1364 3351 c-48 -12 -133 -62 -160 -94 -14 -17 -37 -53 -52 -81 l-27
-51 0 -405 0 -405 34 -63 c38 -70 69 -100 145 -140 l51 -27 245 0 245 0 51 27
c28 15 65 38 81 52 45 38 92 134 99 204 6 56 5 62 -19 86 -56 56 -124 24 -138
-64 -9 -58 -29 -91 -73 -124 -26 -20 -41 -21 -245 -21 l-218 0 -37 29 c-67 50
-67 54 -64 461 3 349 4 365 24 391 50 67 56 69 279 72 229 4 254 -2 299 -61
16 -21 30 -56 35 -88 14 -87 83 -118 138 -63 24 24 25 30 19 85 -11 110 -69
196 -168 250 l-63 34 -225 2 c-124 1 -239 -2 -256 -6z" />
                                <path d="M2265 3335 l-25 -24 0 -591 0 -591 25 -24 c15 -16 36 -25 55 -25 19
0 40 9 55 25 l25 24 0 256 0 255 320 0 320 0 0 -255 0 -256 25 -24 c32 -33 78
-33 110 0 l25 24 0 591 0 591 -25 24 c-15 16 -36 25 -55 25 -19 0 -40 -9 -55
-25 l-25 -24 0 -256 0 -255 -320 0 -320 0 0 255 0 256 -25 24 c-15 16 -36 25
-55 25 -19 0 -40 -9 -55 -25z" />
                                <path d="M3797 2708 c-9 -7 -111 -146 -227 -308 -225 -316 -232 -329 -185
-375 24 -25 27 -25 200 -25 l175 0 0 -95 c0 -88 2 -98 25 -120 15 -16 36 -25
55 -25 19 0 40 9 55 25 23 22 25 32 25 117 l0 93 33 15 c38 18 55 58 41 98 -5
15 -23 33 -41 42 l-33 15 0 253 0 253 -25 24 c-26 27 -71 33 -98 13z m-40
-545 c-3 -2 -39 -3 -81 -1 l-77 3 78 110 78 110 3 -109 c1 -60 1 -110 -1 -113z" />
                            </g>
                        </svg>
                        <div class="flex flex-row ml-5 lg:ml-3 items-center">
                            <div class="text-black text-[50px] font-normal">{{ round($soldMeals * 0.4 * 0.065 * 1000, 2)}}</div>
                            <div class="text-black ml-3 text-[25px]">g</div>
                        </div>
                        <div class="text-slate-500 text-[20px] lg:text-[18px] font-normal ml-5">Reduced methane emissions</div>
                    </div>
                </div>
            </div>

            <!-- Card3 Savour warrior-->
            <div class="flex flex-row">
                <div class="_wildCard mt-10 w-[250px] h-[250px] m-auto p-4 sm:p-8">
                    <svg class=" w-[100px] h-[100px] mb-1" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path d="M2275 5019 c-405 -31 -793 -178 -1125 -427 -95 -71 -283 -254 -363
-352 -199 -246 -342 -549 -413 -873 -35 -157 -39 -349 -11 -472 11 -44 83
-237 162 -430 222 -542 317 -803 400 -1095 117 -417 151 -652 143 -998 l-6
-214 28 -32 c27 -29 32 -31 102 -31 568 0 2409 20 2425 26 12 4 30 20 39 34
16 25 17 49 6 348 -7 177 -15 370 -19 428 l-6 106 94 7 c194 15 337 95 431
240 76 119 81 147 86 534 l4 342 144 0 c182 0 229 15 303 96 60 66 86 139 78
218 -7 69 -52 266 -92 406 -33 116 -216 636 -275 785 -86 216 -232 461 -378
636 -348 415 -868 674 -1442 719 -139 11 -171 11 -315 -1z m339 -199 c246 -24
445 -79 662 -184 394 -191 668 -465 873 -874 66 -131 91 -194 218 -552 108
-304 156 -462 192 -637 27 -133 27 -154 -5 -186 l-25 -26 -209 -3 -210 -3 -27
-28 -28 -27 -5 -408 c-5 -390 -6 -409 -27 -454 -30 -67 -96 -133 -162 -164
-51 -25 -70 -28 -214 -33 -158 -6 -159 -6 -183 -34 -29 -34 -29 -40 -9 -502 8
-181 15 -345 15 -362 l0 -33 -485 0 -485 0 0 418 0 418 331 214 c182 118 335
222 340 231 5 10 9 36 9 57 0 33 -6 45 -31 66 -57 48 -69 43 -370 -152 l-274
-178 -3 249 -2 250 58 66 c343 389 522 832 522 1296 0 252 -46 458 -149 670
-73 148 -157 268 -268 380 -93 94 -204 182 -240 191 -45 12 -78 -7 -161 -94
-295 -309 -452 -581 -507 -877 -24 -124 -17 -359 15 -505 44 -208 127 -450
223 -650 79 -165 163 -297 290 -453 16 -20 17 -46 15 -273 l-3 -250 -274 178
c-301 195 -313 200 -370 152 -25 -21 -31 -33 -31 -66 0 -21 4 -47 9 -56 5 -10
158 -114 340 -232 l331 -214 0 -423 0 -423 -387 0 c-214 0 -445 -3 -515 -7
l-128 -6 0 164 c0 534 -149 1085 -565 2095 -156 378 -171 432 -162 599 16 292
150 637 355 915 66 89 230 260 322 335 212 173 479 306 746 373 220 55 432 72
648 52z m-117 -637 c329 -319 455 -771 353 -1260 -48 -231 -166 -491 -309
-682 l-41 -54 -2 661 -3 662 -27 26 c-37 37 -99 37 -136 0 l-27 -26 -5 -646
-5 -647 -42 74 c-128 225 -239 513 -289 754 -38 180 -38 366 -1 507 47 179
155 371 313 556 126 149 129 152 135 152 4 0 43 -35 86 -77z" />
                        </g>
                    </svg>

                    <div class="flex flex-row ml-5 items-center">
                        <div class="text-black text-[50px] font-normal">{{ round($soldMeals * 600 / 860.4, 2)}}</div>
                        <div class="text-black ml-3 text-[25px]">KWh</div>
                    </div>
                    <div class="text-slate-500 text-[20px] font-normal ml-5">Energy Saved</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        fetch("{{ route('active_offers') }}", {
                method: 'get',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            }).then(res => res.json())
            .then(function(results) {
                // Once AJAX call is done
                console.log(results);
            });
    </script>
</body>

</html>