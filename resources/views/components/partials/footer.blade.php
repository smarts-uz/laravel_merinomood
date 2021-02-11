<footer id="footer" class="bg-gray-800">
    <div class="container py-10 lg:pt-5 flex lg:flex-wrap">
        <div class="w-2/12 x:w-3/12 lg:w-full pr-5 lg:pr-0">
            <ul class="mb-12 2sm:mb-5 lg:flex 2sm:flex-col lg:justify-between lg:underline">
                <li class="text-base text-gray-250 hover:text-white">
                    <a href="#">Site Map</a>
                </li>
                <li class="text-base text-gray-250 hover:text-white">
                    <a href="#">Privacy Policy</a>
                </li>
                <li class="text-base text-gray-250 hover:text-white">
                    <a href="#">Work In The Company</a>
                </li>
            </ul>
            <div class="lg:hidden">
                <div class="w-48 mr-5">
                    <x-footer.logo></x-footer.logo>
                </div>
            </div>
        </div>
        <div class="hidden md:flex xs:flex-col justify-between w-full mb-5">
            <div class="footer-nav flex w-6/12 sm:w-7/12 xs:w-full xs:mb-5">
                <x-footer.nav></x-footer.nav>
            </div>
            <div class="w-6/12 sm:w-5/12 xs:w-full">
                <x-footer.country-select></x-footer.country-select>
            </div>
        </div>
        <div class="w-5/12 x:w-4/12 lg:w-5/12 md:w-7/12 sm:w-9/12 xs:w-full lg:mb-10 pr-5 xs:pr-0   ">
            <form action="">
                <h2 class="text-lg font-medium text-gray-250 mb-3">Subscribe to our newsletter</h2>
                <div>
                    <input type="email" placeholder="Your e-mail" class="text-sm text-gray-250 py-3 px-4 w-10/12 x:w-full bg-gray-750 mb-5 focus:outline-none" required>
                    <div class="mb-6">
                        <label x-data="{checked: false}" class="checkbox-text mb-2 pl-16 block relative cursor-pointer text-lg text-gray-250 select-none pt-1 hover:text-white">
                            I accept terms and conditions of Merinomood
                            <input x-model="checked" type="checkbox" class="absolute opacity-0 cursor-pointer h-0 w-0">
                            <span class="checkmark border-2 border-gray-375 absolute top-0 left-0 h-8 w-8" :class="{'bg-gray-375': checked}"></span>
                        </label>
                    </div>
                    <div class="flex">
                        <div class="w-1/2 s:w-full flex items-end">
                            <button class="focus:outline-none bg-gray-250 py-3 px-16 hover:text-white transition-all duration-300 hover:bg-gray-300 s:w-full">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="flex items-center hidden">
                    <svg viewBox="0 0 83.349 62.512" class="w-16 s:w-12 mr-6">
                        <path data-name="2089713" d="M0,98.358l28.542,28.6L83.349,72.2l-7.868-7.76L28.542,111.327,7.759,90.544Z"
                              transform="translate(0 -64.443)" fill="#23b700"/>
                    </svg>
                    <h2 class="text-lg font-medium text-white">Thank you for signing up!</h2>
                </div>
            </form>
        </div>
        <div class="w-2/12 lg:w-7/12 lg:flex lg:justify-between lg:mb-10 pr-5 md:hidden">
            <div>
                <x-footer.nav></x-footer.nav>
            </div>
            <div class="hidden lg:block lg:w-7/12">
                <x-footer.country-select></x-footer.country-select>
            </div>
        </div>
        <div class="w-3/12 lg:w-full flex flex-col lg:flex-row justify-between">
            <div class="hidden lg:block">
                <div class="w-48 s:w-40 mr-5">
                    <x-footer.logo></x-footer.logo>
                </div>
            </div>
            <div class="lg:flex items-end ">
                <div class="lg:hidden">
                    <x-footer.country-select></x-footer.country-select>
                </div>
                <div class="flex xs:flex-col justify-between mb-4">
                    <p class="text-gray-300 text-base font-medium mr-6 xs:mr-0 xs:text-center xs:mb-2">Follow Us:</p>
                    <div class="flex">
                        <a href="#" target="_blank" class="mr-3">
                            <svg class="w-6 h-6" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-white" d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906
                                 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"/>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="mr-3">
                            <svg class="w-6 h-6" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-white" d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h362c41.351562 0 75-33.648438
                                 75-75v-362c0-41.351562-33.648438-75-75-75zm-180 390c-74.441406 0-135-60.558594-135-135s60.558594-135 135-135 135
                                 60.558594 135 135-60.558594 135-135 135zm150-240c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45 45 20.1875 45 45-20.1875 45-45 45zm0 0"/>
                                <path class="fill-current text-white" d="m407 90c-8.277344 0-15 6.722656-15 15s6.722656 15 15 15 15-6.722656 15-15-6.722656-15-15-15zm0 0"/>
                                <path class="fill-current text-white" d="m257 150c-57.890625 0-105 47.109375-105 105s47.109375 105 105 105 105-47.109375 105-105-47.109375-105-105-105zm0 0"/>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="mr-3">
                            <svg class="w-6 h-6" viewBox="0 -47 512.00203 512" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-white" d="m191.011719 419.042969c-22.140625 0-44.929688-1.792969-67.855469-5.386719-40.378906-6.335938-81.253906-27.457031-92.820312-33.78125l-30.335938-16.585938
                                 32.84375-10.800781c35.902344-11.804687 57.742188-19.128906 84.777344-30.597656-27.070313-13.109375-47.933594-36.691406-57.976563-67.175781l-7.640625-23.195313
                                 6.265625.957031c-5.941406-5.988281-10.632812-12.066406-14.269531-17.59375-12.933594-19.644531-19.78125-43.648437-18.324219-64.21875l1.4375-20.246093 12.121094
                                 4.695312c-5.113281-9.65625-8.808594-19.96875-10.980469-30.777343-5.292968-26.359376-.863281-54.363282 12.476563-78.851563l10.558593-19.382813 14.121094
                                 16.960938c44.660156 53.648438 101.226563 85.472656 168.363282 94.789062-2.742188-18.902343-.6875-37.144531 6.113281-53.496093
                                 7.917969-19.039063 22.003906-35.183594 40.722656-46.691407 20.789063-12.777343 46-18.96875 70.988281-17.433593 26.511719
                                 1.628906 50.582032 11.5625 69.699219 28.746093 9.335937-2.425781 16.214844-5.015624 25.511719-8.515624 5.59375-2.105469
                                 11.9375-4.496094 19.875-7.230469l29.25-10.078125-19.074219 54.476562c1.257813-.105468 2.554687-.195312 3.910156-.253906l31.234375-1.414062-18.460937
                                 25.230468c-1.058594 1.445313-1.328125 1.855469-1.703125 2.421875-1.488282 2.242188-3.339844 5.03125-28.679688
                                 38.867188-6.34375 8.472656-9.511718 19.507812-8.921875 31.078125 2.246094 43.96875-3.148437 83.75-16.042969
                                 118.234375-12.195312 32.625-31.09375 60.617187-56.164062 83.199219-31.023438 27.9375-70.582031 47.066406-117.582031
                                 56.847656-23.054688 4.796875-47.8125 7.203125-73.4375 7.203125zm0 0"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
