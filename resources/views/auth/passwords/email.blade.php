<x-account-base>
    <div class="w-7/12 sm:w-full pl-20 l:pl-12 sm:px-8 xs:px-0 py-5 xs:py-0">
        <div class="flex items-center mb-5">
            <img class="hidden sm:inline mr-4" src="{{ asset('/images/icons/settings.svg') }}" alt="">
            <h1 class="text-3xl xs:text-xl font-medium text-gray-700">Reset your password?</h1>
        </div>
        <form>
            <div class="flex flex-col mb-5">
                <label for="password" class="text-lg font-medium text-gray-700 mb-3">Current Password</label>
                <input type="password" id="password" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
            </div>
            <div class="flex flex-col mb-5">
                <label for="new-password" class="text-lg font-medium text-gray-700 mb-3">New Password</label>
                <input type="password" id="new-password" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
            </div>
            <div class="flex flex-col mb-10">
                <label for="confirm-password" class="text-lg font-medium text-gray-700 mb-3">Confirm Password</label>
                <input type="password" id="confirm-password" class="py-3 px-3 border-2 border-gray-250 focus:outline-none">
            </div>
            <button class="py-3 px-12 bg-black text-white text-lg font-medium focus:outline-none sm:w-full">Save Changes</button>
        </form>          
    </div>
</x-account-base>
