<x-layouts.master>
    <div class="login">
        <div class="container pt-8 sm:pt-4 sm:px-0 shadow-inset">
            <div class="breadcrumbs py-4 mb-4 flex shadow-4lg sm:shadow-none flex justify-between items-center px-8 sm:px-5">
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
                    <span class="text-gray-750 font-medium text-sm">Sign in</span>
                </div>
                <a href="#" class="text-sm font-medium text-gray-225">U need help?</a>
            </div>
        </div>
        <div class="container">
            <div class="w-1/2 l:w-8/12 sm:w-10/12 xs:w-full m-auto pb-20 2xs:pb-12 pt-16 sm:pt-4 2xs:pt-0">
                <h1 class="text-5xl xs:text-4xl 2xs:text-left font-bold uppercase font-bebas text-center leading-none mb-5">Sign in</h1>
                <form action="#">
                    <div class="flex flex-col mb-5">
                        <label for="email" class="text-center 2xs:text-left mb-3"><span class="text-lg text-gray-700 font-medium">Email address:</span></label>
                        <input type="email" id="email" required class="px-5 py-3 text-gray-225 focus:outline-none text-base border border-gray-225">
                    </div>
                    <div class="flex flex-col mb-8 2xs:mb-4 relative">
                        <label for="password" class="relative text-center 2xs:text-left mb-3"><span class="text-lg text-gray-700 font-medium">Create A Password</span><a href="#" class="text-sm text-gray-225 absolute top-0 right-0 pt-1 underline">Forgot Password</a></label>
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
                    <div class="mb-6">
                        <label for="checkbox" class="checkbox-text pl-12 block relative cursor-pointer font-medium text-sm text-gray-700 py-2">
                            Remember Me
                            <input type="checkbox" id="checkbox" checked="checked" class="absolute opacity-0 cursor-pointer h-0 w-0">
                            <span class="checkmark border border-gray-250 absolute top-0 left-0 h-8 w-8"></span>
                        </label>
                    </div>
                    <div class="flex 2xs:flex-col items-center justify-between 2xs:mb-3">
                        <button class="text-lg font-medium py-4 leading-none px-12 bg-black text-white cursor-pointer focus:outline-none w-1/2 2xs:w-full 2xs:mb-4">Sign in</button>
                        <a href="#" class="text-base font-medium text-gray-700 underline">U don't have account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.master>
