<x-account-base>
    <div id="address" class="w-7/12 sm:w-full flex flex-col pl-20 sm:px-8 xs:px-0 py-5 xs:py-0" x-data="{ newAddress: false}">
        <div :class="{'hidden': newAddress}">
            <h1 class="text-3xl xs:text-xl font-medium text-gray-700 mb-5">Shipping Addresses</h1>
            <div class="px-5 py-5 bg-gray-100 border-2 border-gray-150 flex mb-10">
                <div class="mr-5">
                    <img src="/images/flag.png" alt="" class="w-10 h-6">
                </div>
                <div class="w-full flex justify-between md:flex-col sm:flex-row xs:flex-col">
                    <ul class="text-sm font-medium text-gray-200 md:mb-5 sm:mb-0 xs:mb-5">
                        <li class="text-gray-700">Kyrgyzstan, Chui, Bishkek</li>
                        <li>Phone:<span>+996 701 165555</span></li>
                        <li>Email: <span>Blvckbird.st@gmail.com</span></li>
                        <li>Zip: <span>720025</span></li>
                        <li><span>Street: Suerkulov 8 / 11 / 47</span></li>
                    </ul>
                    <div>
                        <button :class="{'hidden': newAddress}" class="py-2 px-16 border-2 border-gray-225 focus:outline-none" @click="newAddress = !newAddress">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-16 md:mb-10" :class="{'hidden': newAddress}">
            <button class="add-address text-xl font-medium text-gray-700 relative pl-5 focus:outline-none" @click="newAddress = !newAddress">Add new address</button>
        </div>
        <div class="hidden pb-10" :class="{'new-address': newAddress}">
            <div class="flex items-center mb-5">
                <img class="hidden sm:inline mr-4" src="{{ asset('/images/icons/address-book.svg') }}" alt="">
                <h3 class="text-3xl xs:text-xl font-medium text-gray-700">New address</h3>    
            </div>
            <form>
                <div class="flex flex-col mb-5">
                    <label for="name" class="text-lg font-medium text-gray-700 mb-3">First name / Last name</label>
                    <input type="text" id="name" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
                </div>
                <div class="flex flex-col mb-5">
                    <label for="country" class="text-lg font-medium text-gray-700 mb-3">Country / State</label>
                    <input type="text" id="country" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
                </div>
                <div class="flex">
                    <div class="flex flex-col mb-8 w-7/12 pr-5">
                        <label for="phone" class="text-lg font-medium text-gray-700 mb-3">Phone</label>
                        <x-cleave class="py-3 px-3 border-2 border-gray-250 focus:outline-none" options="{ phone: true, phoneRegionCode: 'US', prefix: '+1 ', noImmediatePrefix: true }" placeholder="+1 ### ### ####" />
                    </div>
                    <div class="flex flex-col mb-5 w-5/12 pl-5">
                        <label for="code" class="text-lg font-medium text-gray-700 mb-3 text-center">Zip code</label>
                        <input type="text" id="code" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
                    </div>
                </div>
                <div class="flex flex-col mb-10">
                    <label for="city" class="text-lg font-medium text-gray-700 mb-3">City / Street</label>
                    <input type="text" id="city" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
                </div>
                <button class="py-3 px-12 bg-black text-white text-lg font-medium focus:outline-none sm:w-full" @click.prevent="newAddress = !newAddress">Save Changes</button>
            </form>
        </div>
    </div>
</x-account-base>