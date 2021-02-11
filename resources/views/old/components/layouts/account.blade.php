<div class="mb-20 flex account md:flex-col">
    <div class="w-8/12 content-block xxl:w-8/12 lg:w-7/12 md:w-full mr-5 md:mr-0">
        <div class="button-back hidden sm:block sm:mx-8">
            <a href="{{ url()->previous() }}"
               class="inline-block text-lg font-semibold bg-gray-520 py-5 pl-8 mb-16 text-white w-1/2 2xs:w-8/12 3xs:w-full text-left border-r-4 border-orange-450 ">Go back</a>
        </div>
        <div class="relative slot px-5 sm:px-0 pb-12 xs:pb-8 rounded-lg border-2 sm:border-0 sm:border-t-2 sm:rounded-none border-gray-450 mb-12 sm:mb-0">
            {{ $slot }}
        </div>
        {{ $footer ?? null }}
    </div>

    <div class="w-4/12 menu-block sm:hidden lg:w-5/12 md:w-full sm:px-5">
        <div class="pb-5 rounded-lg border-2 border-gray-450 relative">
            <div class="title relative max-w-11/12 bg-white px-2 inline-block">
                <div>
                    <h2 class="text-3xl leading-none text-gray-750">Hello, {{ Auth::user()->name }}!</h2>
                </div>
            </div>
            <div class="flex flex-col px-8 2xs:px-3 pt-5 ">
                <a href="/account" class="w-full text-left focus:outline-none px-9 py-4 mb-2 text-lg font-medium text-white {{ request()->is('account') ? 'bg-gray-750 border-r-4 border-orange-450' : 'bg-gray-520' }}">Profile</a>
                <a href="/account/wishlist" class="w-full text-left focus:outline-none px-9 py-4 mb-2 text-lg font-medium text-white {{ request()->is('account/wishlist') ? 'bg-gray-750 border-r-4 border-orange-450' : 'bg-gray-520' }}">My wishlist</a>
                <a href="/account/orders" class="w-full text-left focus:outline-none px-9 py-4 bg-gray-520 mb-2 text-lg font-medium text-white {{ request()->is('account/orders') ? 'bg-gray-750 border-r-4 border-orange-450' : 'bg-gray-520' }}">My orders</a>
                <a href="/account/bonus" class="w-full text-left focus:outline-none px-9 py-4 bg-gray-520 mb-2 text-lg font-medium text-white {{ request()->is('account/bonus') ? 'bg-gray-750 border-r-4 border-orange-450' : 'bg-gray-520' }}">My bonus</a>
                <a href="/account/setting" class="w-full text-left focus:outline-none px-9 py-4 bg-gray-520 mb-2 text-lg font-medium text-white {{ request()->is('account/setting') ? 'bg-gray-750 border-r-4 border-orange-450' : 'bg-gray-520' }}">Editing my profile</a>
                <a href="/account/address" class="w-full text-left focus:outline-none px-9 py-4 bg-gray-520 mb-2 text-lg font-medium text-white mb-5 {{ request()->is('account/address') ? 'bg-gray-750 border-r-4 border-orange-450' : 'bg-gray-520' }}">Address book</a>
                <a href="/faq" class="w-full text-left focus:outline-none px-9 py-4 bg-gray-50 mb-32 text-lg font-medium text-gray-520">Need help?</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="w-full text-left focus:outline-none px-9 py-4 bg-gray-520 mb-2 text-lg font-medium text-white"
                            type="submit">Sign out</button>
                </form>
            </div>
        </div>
    </div>
</div>
