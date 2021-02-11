<x-layouts.master>
    <div id="basket">
        <div class="container pt-8">
            <div class="breadcrumbs py-4 mb-16 xs:mb-6 shadow-4lg xs:shadow-none flex justify-between items-center px-8 xs:px-0">
                <div class="flex items-center font-medium text-sm">
                    <a href="/" class="text-gray-200 font-medium text-sm mr-4">Home</a>
                    <span class="mr-4">
                       <svg class="w-2 h-2 fill-current text-gray-200" width="451.846px" height="451.847px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                            xml:space="preserve">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                        </svg>
                    </span>
                    <span class="text-gray-750 font-medium text-sm">Cart</span>
                </div>
                <a href="#" class="text-sm font-medium text-gray-225">U need help?</a>
            </div>
            <div class="flex justify-between mb-6">
                <div class="flex text-4xl xs:text-3xl font-bold uppercase font-bebas leading-none">
                    <h1 class="text-gray-700 border-b-2 border-orange-350 mr-8">Shopping cart</h1>
                    <a href="/favourites" class="text-gray-200">favourites</a>
                </div>
            </div>
            <div class="flex flex-col pb-8 border-b-2 border-gray-150">
                @foreach(range(1, 2) as $item)
                    <div class="flex mb-3">
                        <div class="flex justify-between xs:block w-full py-3">
                            <div class="flex xs:justify-between xs:items-center xs:mb-8">
                                <div class="flex items-center xs:self-start xs:pt-1">
                                    <button class="flex items-center justify-center pr-3 focus:outline-none">
                                        <svg class="w-3 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                                        <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
                                            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
                                            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
                                            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
                                            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
                                            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
                                            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/>
                                    </svg>
                                    </button>
                                </div>
                                <div class="xs:order-last flex flex-col items-end">
                                    <button class="hidden xs:block w-5 focus:outline-none mb-5 xs:mr-4">
                                        <svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path class="fill-current text-red-350" d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                C512,93.417,453.532,30,376,30z"/>
                                        </svg>
                                    </button>
                                    <img src="/images/order-img.jpg" alt="" class="h-32 xs:h-24 object-contain w-32 mr-6 xs:mr-0 rounded-lg">
                                </div>
                                <div class="w-1/2 xs:w-3/5 s:w-1/2 flex flex-col">
                                    <h4 class="text-lg 3xs:text-base text-gray-700 leading-none xs:leading-tight mb-4">Light brown faux fur coat Only & Sons</h4>
                                    <div class="text-gray-200 text-sm font-medium flex"><h5 class="mr-1 xs:mb-2">Size:</h5><span>M, XXL</span></div>
                                    <div class="text-gray-200 text-sm font-medium flex"><h5 class="mr-1 xs:mb-2">Color:</h5><span>Green</span></div>
                                    <div class="text-gray-200 text-sm font-medium flex"><h5 class="mr-1">Sku:</h5><span>#77845747</span></div>
                                </div>
                            </div>
                            <div class="flex items-center xs:justify-between pl-6 pr-4">
                                <div class="flex rounded-lg shadow-4lg py-2 px-4 mr-32 sm:mr-16 xs:mr-0 xs:order-last">
                                    <button class="focus:outline-none">
                                        <svg height="8" width="8" viewBox="0 0 409.6 409.6" style="enable-background:new 0 0 409.6 409.6;" xml:space="preserve">
                                            <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467
                                                c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"/>
                                        </svg>
                                    </button>
                                    <span class="text-lg font-medium text-gray-225 mx-10 xs:mx-5">2</span>
                                    <button class="focus:outline-none">
                                        <svg height="8" width="8" viewBox="0 0 426.66667 426.66667" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031
                                                9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344
                                                9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938
                                                11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594
                                                21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex">
                                    <div class="flex flex-col items-end">
                                        <button class="w-5 focus:outline-none mb-5 xs:hidden">
                                            <svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path class="fill-current text-red-350" d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                   c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                   c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                   s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                   C512,93.417,453.532,30,376,30z"/>
                                            </svg>
                                        </button>
                                        <div class="flex items-center mb-1">
                                            <span class="text-xs text-gray-200 line-through mr-3 xs:hidden">$76,32</span>
                                            <span class="text-2xl font-bold leading-none">$51,63</span>
                                        </div>
                                        <p class="text-xs text-gray-200">Per Price $30,46</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex xs:flex-col justify-between items-center xs:border-b-2 xs:border-gray-150 pt-12 mb-4 xs:py-10">
                <button class="flex text-sm font-medium text-gray-350 focus:outline-none mr-8">
                        <span>
                            <svg class="w-5 h-4 mr-2" height="512pt" viewBox="-57 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current text-gray-350" d="m156.371094 30.90625h85.570312v14.398438h30.902344v-16.414063c.003906-15.929687-12.949219-28.890625-28.871094-28.890625h-89.632812c-15.921875
                                        0-28.875 12.960938-28.875 28.890625v16.414063h30.90625zm0 0"/>
                                    <path class="fill-current text-gray-350" d="m344.210938 167.75h-290.109376c-7.949218 0-14.207031 6.78125-13.566406 14.707031l24.253906 299.90625c1.351563
                                        16.742188 15.316407 29.636719 32.09375 29.636719h204.542969c16.777344 0 30.742188-12.894531
                                        32.09375-29.640625l24.253907-299.902344c.644531-7.925781-5.613282-14.707031-13.5625-14.707031zm-219.863282 312.261719c-.324218.019531-.648437.03125-.96875.03125-8.101562
                                        0-14.902344-6.308594-15.40625-14.503907l-15.199218-246.207031c-.523438-8.519531 5.957031-15.851562 14.472656-16.375
                                        8.488281-.515625 15.851562 5.949219 16.375 14.472657l15.195312 246.207031c.527344 8.519531-5.953125 15.847656-14.46875 16.375zm90.433594-15.421875c0
                                        8.53125-6.917969 15.449218-15.453125 15.449218s-15.453125-6.917968-15.453125-15.449218v-246.210938c0-8.535156 6.917969-15.453125
                                        15.453125-15.453125 8.53125 0 15.453125 6.917969 15.453125 15.453125zm90.757812-245.300782-14.511718 246.207032c-.480469
                                        8.210937-7.292969 14.542968-15.410156 14.542968-.304688 0-.613282-.007812-.921876-.023437-8.519531-.503906-15.019531-7.816406-14.515624-16.335937l14.507812-246.210938c.5-8.519531
                                        7.789062-15.019531 16.332031-14.515625 8.519531.5 15.019531 7.816406 14.519531 16.335937zm0 0"/>
                                    <path class="fill-current text-gray-350" d="m397.648438 120.0625-10.148438-30.421875c-2.675781-8.019531-10.183594-13.429687-18.640625-13.429687h-339.410156c-8.453125
                                        0-15.964844 5.410156-18.636719 13.429687l-10.148438 30.421875c-1.957031 5.867188.589844 11.851562 5.34375 14.835938 1.9375 1.214843
                                        4.230469 1.945312 6.75 1.945312h372.796876c2.519531 0 4.816406-.730469 6.75-1.949219 4.753906-2.984375 7.300781-8.96875 5.34375-14.832031zm0
                                        0"/>
                            </svg>
                        </span>
                    <span>Delete All</span>
                </button>
                <h2 class="text-2xl text-gray-700 font-medium mr-3 xs:hidden">Total prize</h2>
            </div>
            <div class="flex xs:flex-col pb-32 xs:pb-12">
                <div class="w-1/2 xs:w-full xs:text-center pt-8">
                    <form action="" class="flex flex-col xs:border-b-2 xs:border-gray-150" x-data="{ mob: true}">
                        <label for="comment" class="xs:hidden text-lg font-medium text-gray-700 xs:text-white xs:bg-black mb-4 xs:py-4 xs:mb-12">Add a comment to the order</label>
                        <div class="xs:hidden">
                            <textarea name="" id="comment" cols="30" rows="10" class="w-full bg-gray-100 border-2 border-gray-125 placeholder-gray-300 px-5 sm:px-3 pt-5 mb-10 focus:outline-none" placeholder="About: Lorem ipsum dolor sit amet, consectetur adipiscing"></textarea>
                            <button class="text-lg text-white bg-black py-3 px-16 focus:outline-none">Comment</button>
                        </div>
                        <label @click="{ mob = !mob }" for="comment" class="hidden xs:block text-lg font-medium text-white bg-black py-4 mb-12">Add a comment to the order</label>
                        <div x-show="!mob" :class="{ 'hidden': mob}" class="pb-12">
                            <textarea name="" id="mob-comment" cols="30" rows="10" class="w-full bg-gray-100 border-2 border-gray-125 placeholder-gray-300 px-3 pt-4 mb-8 focus:outline-none" placeholder="About: Lorem ipsum dolor sit amet, consectetur adipiscing"></textarea>
                            <button class="text-lg text-white bg-black py-3 px-16 focus:outline-none">Comment</button>
                        </div>
                    </form>
                </div>
                <div class="w-1/2 xs:w-full flex justify-end xs:justify-center xs:mt-10">
                    <div class="w-6/12 sm:w-3/5 xs:w-full flex items-end xs:items-start flex-col">
                        <h3 class="text-xs font-medium text-gray-200 mb-1 xs:hidden">Promotion Total</h3>
                        <div class="flex w-full mb-10">
                            <input type="text" class="py-2 xs:py-3 rounded-tl-lg rounded-bl-lg bg-gray-250 px-4 sm:px-2 w-7/12 sm:w-4/5 placeholder-gray-300 focus:outline-none" placeholder="Promo Code">
                            <button class="text-sm font-medium text-gray-800 py-2 xs:py-3 border-2 border-gray-300 w-5/12 focus:outline-none">Apply</button>
                        </div>
                        <div class="flex flex-col items-end xs:items-start w-full border-b-2 border-gray-250 pb-8 mb-8 xs:hidden">
                            <h3 class="text-xs font-medium text-gray-200 mb-1">Shipping Total</h3>
                            <a href="#" class="inline-block underline text-lg font-bold text-gray-750">Add</a>
                        </div>
                        <div class="w-full xs:flex items-start">
                            <div class="flex flex-col items-end xs:items-start xs:w-3/5">
                                <span class="text-2xl font-bold leading-none mb-1 xs:mb-4">$112,55</span>
                                <a href="#" class="text-xs font-medium text-gray-200 inlineblock underline mb-8">Subtotal</a>
                            </div>
                            <a href="#" class="text-lg text-white bg-black py-3 xs:py-4 w-full focus:outline-none inline-block text-center">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.master>
