<x-layouts.master>
    <section id="error-404">
        <div class="flex sm:flex-col-reverse">
            <div class="w-1/2 lg:w-2/5 sm:w-full py-32 pl-10 sm:px-8 xs:px-4 sm:py-16">
                <div class="pr-16 xs:pr-0">
                    <h1 class="text-6xl text-gray-800 font-bold font-bebas leading-none mb-2">UH! No...</h1>
                    <p class="text-base font-medium leading-tight mb-4">Sorry, the page you are looking for may have been removed or is temporarily
                        unavailable. For further assistance, please call our friendly,
                        helpful Customer Service Department:
                    </p>
                    <p class="text-base font-medium mb-5">+996 (755) 66-33-55</p>
                    <p class="text-base font-medium leading-tight mb-16">Or email us at <a href="mailto:service@Aliya.com." class="text-blue-700 underline">service@Aliya.com.</a></p>
                </div>
                <div class="bg-black w-1/2 sm:w-full sm:mx-auto text-center text-white text-lg font-medium">
                    <a href="{{ url()->previous() }}" class="inline-block py-3 focus:outline-none">Go back</a>
                </div>
            </div>
            <div class="w-1/2 lg:w-3/5 sm:w-full sm:h-120 xs:h-64">
                <img src="/images/error.jpg" class="err-pic object-cover h-full w-full" alt="">
            </div>
        </div>
    </section>
</x-layouts.master>
