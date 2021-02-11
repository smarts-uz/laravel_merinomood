<x-layouts.master>
    <div class="login">
        <div class="container  pt-8 sm:pt-4 sm:px-0 shadow-inset">
            <div class="breadcrumbs py-4 mb-4 flex shadow-4lg sm:shadow-none  flex justify-between items-center px-8 sm:px-5">
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
                    <span class="text-gray-750 font-medium text-sm">Catalog</span>
                </div>
                <a href="#" class="text-sm font-medium text-gray-225">U need help?</a>
            </div>
        </div>
        <div class="container">
            <div class="w-1/2 l:w-8/12 sm:w-10/12 2xs:w-full m-auto pb-20 pt-16 sm:pt-4 2xs:pt-0">
                <h1 class="text-5xl xs:text-4xl 2xs:text-left font-bold uppercase font-bebas text-center leading-none mb-5">Create an Account</h1>
                <form action="#">
                    <div class="flex flex-col mb-5">
                        <label for="email" class="flex justify-between mb-3"><span class="text-lg 2xs:text-base text-gray-700 font-medium">Email address:</span><span class="text-sm text-gray-225">* required</span></label>
                        <input type="email" id="email" required placeholder="We will send you a confirmation of your order" class="px-5 py-3 text-gray-225 focus:outline-none text-base 2xs:text-sm 3xs:text-xs border border-gray-225">
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="name" class="flex justify-between mb-3"><span class="text-lg 2xs:text-base text-gray-700 font-medium">First Name:</span><span class="text-sm text-gray-225">* required</span></label>
                        <input type="name" id="name" required class="px-5 py-3 text-gray-225 focus:outline-none text-base border border-gray-225">
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="last-name" class="flex justify-between mb-3">
                            <span class="text-lg 2xs:text-base text-gray-700 font-medium">Last Name:</span>
                            <span class="text-sm text-gray-225">* required</span>
                        </label>
                        <input type="name" id="last-name" class="px-5 py-3 text-gray-225 text-base focus:outline-none border border-gray-225">
                    </div>
                    <div class="flex flex-col mb-5 relative">
                        <label for="password" class="flex justify-between mb-3"><span class="text-lg 2xs:text-base text-gray-700 font-medium">Create A Password</span><span class="text-sm text-gray-225">3 -25 characters</span></label>
                        <div class="relative" x-data="{password: true}">
                            <input x-bind:type="password ? 'password' : 'text'" id="password" required class="px-5 py-3 w-full focus:outline-none text-gray-225 text-base border border-gray-225 pr-10">
                            <button type="button" class="eye-button absolute w-5 h-5 focus:outline-none" @click="password = !password">
                                <svg class="w-5 h-5" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                            <path class="fill-current text-gray-225" d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                    <path class="fill-current text-gray-225" d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                        </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col mb-12" x-data="{password: true}">
                        <label for="verification" class="flex justify-between mb-3"><span class="text-lg 2xs:text-base text-gray-700 font-medium">Confirm Your Password</span><span class="text-sm text-gray-225">0 -25 characters</span></label>
                        <div class="relative">
                            <input x-bind:type="password ? 'password' : 'text'" id="verification" required class="px-5 py-3 w-full focus:outline-none text-gray-225 text-base border border-gray-225">
                            <button type="button" class="eye-button absolute w-5 h-5 focus:outline-none" @click="password = !password">
                                <svg class="w-5 h-5" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                            <path class="fill-current text-gray-225" d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                    <path class="fill-current text-gray-225" d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                        </svg>
                            </button>
                        </div>

                    </div>
                    <button class="text-lg 2xs:text-base font-medium py-4 leading-none px-12 bg-black text-white cursor-pointer focus:outline-none mb-8 w-full">Create an Account</button>
                </form>
                <p class="text-gray-700 text-base font-medium text-center w-7/12 2xs:w-10/12 3xs:w-full mx-auto mb-8">By creating an account, you agree to terms of use and <a href="#" class="underline">privacy policy.</a></p>
                <div class="flex justify-center">
                    <a href="#" class="text-lg font-medium text-gray-700 underline">U have account?</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.master>
