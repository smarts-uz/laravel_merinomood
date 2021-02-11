<x-account-base>
    <div id="account" class="w-7/12 sm:w-full pl-20 l:pl-12 sm:pl-0 py-5 xs:py-0">
        <div class="flex items-center mb-5">
            <img class="hidden sm:inline mr-4" src="{{ asset('/images/icons/account-mob.svg') }}" alt="">
            <h1 class="text-3xl xs:text-xl font-medium text-gray-700">Account Information</h1>    
        </div>
        <form class="w-9/12 lg:w-full sm:w-90/100 xs:w-full sm:mx-auto">
            <div class="flex flex-col mb-5">
                <label for="email" class="text-lg font-medium text-gray-700 mb-3">E-mail</label>
                <input type="text" id="email" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
            </div>
            <div class="flex flex-col mb-5">
                <label for="name" class="text-lg font-medium text-gray-700 mb-3">First name</label>
                <input type="text" id="name" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
            </div>
            <div class="flex flex-col mb-5">
                <label for="lastName" class="text-lg font-medium text-gray-700 mb-3">Last name</label>
                <input type="text" id="lastName" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
            </div>
            <div class="flex flex-col mb-8 w-7/12 sm:w-full">
                <label for="phone" class="text-lg font-medium text-gray-700 mb-3">Phone</label>
                <x-cleave  class="py-3 px-3 border-2 border-gray-250 focus:outline-none"
                            options="{ phone: true, phoneRegionCode: 'US', prefix: '+1 ', noImmediatePrefix: true }"
                            placeholder="+1 ### ### ####"/>
            </div>
            <button class="py-3 px-12 bg-black text-white text-lg font-medium focus:outline-none sm:w-full">Save Changes</button>
        </form>
    </div>
</x-account-base>