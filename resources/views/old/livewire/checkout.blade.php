<section class="mb-20">
    <div class="container sm:px-0">
        <div class="w-11/12 lg:w-full m-auto mb-20 sm:mb-5 flex justify-center sm:flex-col">
            <div class="w-8/12 l:w-7/12 sm:w-full pr-5 sm:pr-0 xl:w-10/12">
                <div class="relative px-8 lg:px-5 py-5 rounded-lg border-2 border-gray-450 mb-12 sm:rounded-none sm:border-0 sm:border-t-2 sm:mb-5">
                    <div class="title absolute">
                        <h1 class="bg-white px-3 text-3xl xs:text-2xl pr-5 sm:w-full sm:pr-0 text-gray-750">Order registration</h1>
                    </div>
                    <div>
                        <p class="hidden font-medium pt-2 ">
                            <span class="text-gray-750 text-lg pr-2">First step</span>
                            <span class="w-10 inline-block mb-1 border border-gray-520"></span>
                            <span class="text-gray-520 text-sm pl-2">Second step</span>
                        </p>
                        <div class="flex justify-between items-center my-7 x:flex-col x:items-start sm:flex-row sm:items-center xs:flex-col xs:items-start">
                            <div class="w-6/12 x:w-8/12 l:w-9/12 md:w-full sm:w-1/2 sm:pl-4 xs:w-full xs:pl-0">
                                <label for="country" class="text-gray-520 font-medium text-sm">Write your e-mail addres:</label>
                                <div class="relative flex mt-4">
                                    <input wire:model="email" type="text"
                                           class="appearance-none w-full leading-tight focus:outline-none border border-gray-520 bg-gray-50 font-medium py-4 pl-5 pr-7">
                                    @if ($email && !$errors->has('email'))
                                        <div class="absolute right-0 pt-6 pr-3">
                                            <img src="{{ asset('/images/icons/checkmark.svg') }}" alt="">
                                        </div>
                                    @endif
                                </div>
                                @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if($view === 'empty')
                            <div class="mb-12 sm:mb-5">
                                <button class="text-lg font-semibold text-white px-8 py-4 bg-gray-750 focus:outline-none 3xs:w-full"
                                        wire:click="changeView('create')">Add a new address</button>
                            </div>
                        @elseif($view === 'detail')
                            <div class="mb-8">
                                <label class="text-gray-520 font-medium text-sm">Delivery address</label>
                                <div class="flex justify-between items-center border border-gray-520 bg-gray-50 p-5 pb-16 mt-3 l:flex-col">
                                    <div class="font-medium leading-tight l:w-1/2 l:w-full l:mb-5">
                                        <p>{{ $address['name'] }}</p>
                                        <p>{{ $address['address'] }}</p>
                                        <p>{{ $this->stateLabel }} / {{ $address['city'] }}</p>
                                        <p>{{ $address['postcode'] }}</p>
                                        <p>{{ $address['country'] }}</p>
                                        <p>{{ $address['phone'] }}</p>
                                    </div>
                                    <div class="w-1/3 pr-10 l:pr-0 l:w-1/2 l:w-full l:pl-0">
                                        <button class="w-full text-lg text-white font-semibold bg-gray-520 py-2 border-2 border-gray-520 focus:outline-none mb-4"
                                                wire:click="changeView('edit')">Edit</button>
                                        <button class="w-full text-lg font-semibold text-gray-520 py-2 border-2 border-gray-520 focus:outline-none"
                                                wire:click="delete">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-12 sm:mb-5">
                                <button class="w-full text-lg font-semibold text-white px-8 py-4 bg-orange-450 focus:outline-none"
                                        wire:click="createOrder">Next</button>
                            </div>
                        @else
                            <form wire:submit.prevent="submit" class="border-t-2 border-gray-450 pt-12 sm:border-t-0 sm:pt-0">
                                <div class="flex mb-8 2xs:mb-5 l:flex-col md:flex-row 2xs:flex-col">
                                    <div class="flex flex-col w-6/12 pr-3 lg:pr-2 l:mb-5 md:mb-0 l:w-full md:w-1/2 l:pr-0 md:pr-2 2xs:pr-0 2xs:w-full 2xs:mb-5">
                                        <label for="name" class="text-sm font-medium text-gray-520 mb-3">First / last name:</label>
                                        <input wire:model.lazy="address.name" id="name" type="text"
                                               class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
                                        @error('address.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="flex flex-col w-6/12 pl-3 pr-5 lg:pl-2 l:pl-0 lg:pr-0 l:w-full md:w-1/2 md:pl-2 2xs:pl-0 2xs:w-full">
                                        <label for="phone" class="text-sm font-medium text-gray-520 mb-3">Your phone:</label>
                                        <x-cleave wire:model.lazy="address.phone"
                                                  class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75"
                                                  options="{ phone: true, phoneRegionCode: 'US', prefix: '+1 ', noImmediatePrefix: true }"
                                                  placeholder="+1 ### ### ####"/>
                                        @error('address.phone') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="flex mb-8 2xs:mb-5">
                                    <div class="flex w-5/12 x:w-7/12 lg:w-9/12 2xs:w-full">
                                        <div class="flex items-center pt-8">
                                            <img src="/images/select-icon.png" alt="" class="mr-2">
                                            <img src="/images/flag.png" alt="" class="mr-4 w-9">
                                        </div>
                                        <div class="flex flex-col w-9/12 2xs:w-10/12">
                                            <p class="text-sm font-medium text-gray-520 mb-3">Country:</p>
                                            <div wire:ignore>
                                                <x-select wire:model.debounce.200ms="address.country"
                                                          class="appearance-none border border-gray-520 focus:outline-none text-2xl text-gray-750">
                                                    <option value="United States">United States</option>
                                                </x-select>
                                            </div>
                                            @error('address.country') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="w-5/12 x:w-6/12 pl-6 x:hidden">
                                        <p class="text-sm font-medium text-gray-520 mb-3">State:</p>
                                        <div class="flex justify-between" wire:ignore>
                                            <x-select wire:model.debounce.200ms="address.state_id"
                                                      class="appearance-none border border-gray-520 focus:outline-none text-2xl text-gray-750">
                                                <option data-placeholder="true">Choose State</option>
                                                @foreach($stateOptions as $stateOption)
                                                    <option value="{{ $stateOption->id }}">{{ $stateOption->name }}</option>
                                                @endforeach
                                            </x-select>
                                        </div>
                                        @error('address.state_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="mb-8 2xs:mb-5 hidden x:flex 3xs:flex-col">
                                    <div class="x:w-6/12 3xs:w-full l:w-8/12 pr-4 lg:pr-2 3xs:pr-0 3xs:mb-5">
                                        <p class="text-sm font-medium text-gray-520 mb-3">State:</p>
                                        <div class="flex justify-between" wire:ignore>
                                            <x-select wire:model.debounce.200ms="address.state_id"
                                                      class="appearance-none border border-gray-520 focus:outline-none text-2xl text-gray-750">
                                                <option data-placeholder="true">Choose State</option>
                                                @foreach($stateOptions as $stateOption)
                                                    <option value="{{ $stateOption->id }}">{{ $stateOption->name }}</option>
                                                @endforeach
                                            </x-select>
                                        </div>
                                        @error('address.state_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="flex flex-col w-5/12 l:w-4/12 3xs:w-full pl-4 lg:pl-2 2xs:pl-0">
                                        <label for="mobile-postcode" class="text-sm font-medium text-gray-520 mb-3">Postcode (ZIP):</label>
                                        <input wire:model.lazy="address.postcode" id="mobile-postcode" type="text"
                                               class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
                                        @error('address.postcode') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="flex mb-12 2xs:flex-col">
                                    <div class="flex flex-col w-4/12 2xs:w-full x:w-6/12 pr-4 lg:pr-2 2xs:pr-0 2xs:mb-5">
                                        <label for="city" class="text-sm font-medium text-gray-520 mb-3">City:</label>
                                        <input wire:model.lazy="address.city" id="city" type="text"
                                               class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
                                        @error('address.city') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="flex flex-col w-4/12 x:w-6/12 px-4 x:pr-0 lg:pl-2 2xs:w-full 2xs:pl-0">
                                        <label for="address" class="text-sm font-medium text-gray-520 mb-3">Address:</label>
                                        <input wire:model.lazy="address.address" id="address" type="text"
                                               class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
                                        @error('address.address') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="flex flex-col w-4/12 pl-4 pr-5 x:hidden">
                                        <label for="postcode" class="text-sm font-medium text-gray-520 mb-3">Postcode (ZIP):</label>
                                        <input wire:model.lazy="address.postcode" id="postcode" type="text"
                                               class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
                                        @error('address.postcode') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="flex save-address 3xs:flex-col">
                                    <button type="submit"
                                            class="text-lg font-semibold text-white px-8 py-4 bg-gray-750 mr-8 3xs:order-2 3xs:w-full">Save address</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-4/12 l:w-5/12 sm:w-full">
                <div class="px-8 py-9 rounded-lg border-2 border-gray-450 relative lg:px-5 sm:rounded-none sm:border-0 sm:border-t-2">
                    <div class="title absolute flex items-center bg-white xxl:flex-col xxl:items-start">
                        <h2 class="bg-white px-3 text-3xl xl:text-2xl text-gray-750">Amount of goods</h2>
                        <span class="pr-3 text-sm font-medium text-gray-520 ml-6 xxl:ml-3"> - {{ count($variations) }} items</span>
                    </div>
                    @foreach($variations as $variation)
                        <div class="product-card flex mb-6 border-b-2 py-6">
                            <div class="w-4/12">
                                <img src="{{ '/storage/' . $variation['miniature'] }}"
                                     alt="{{ $this->variationName($variation) }}">
                            </div>
                            <div class="w-8/12 pl-5">
                                <div class="pr-4 lg:pr-0">
                                    <p class="text-sm leading-tight font-medium mb-4">{{ $variation['product']['name'] }}</p>
                                    <div class="mb-3">
                                        <p class="font-bold">${{ $this->price($variation) }}</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-520 mb-2">Color: {{ $variation['color'] }}</p>
                                    @if($variation['variationItem'])
                                        <p class="text-sm font-medium text-gray-520">Size: {{ $variation['variationItem']['size'] }}</p>
                                    @endif
                                    <div class="self-end flex justify-between">
                                        <p class="text-sm font-medium text-gray-520">Qty: {{ $variation['quantity'] }}</p>
                                        <button class="text-gray-520 font-semibold text-sm focus:outline-none"
                                                wire:click="deleteFromCart({{ $loop->index }})">Delete</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-gray-520 font-medium text-base">Sub-total</h4>
                        <p class="text-gray750 font-medium text-3xl">${{ $this->totalPrice }}</p>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-gray-520 font-medium text-base">Shipping</h4>
                        <p class="text-gray750 font-medium text-base">${{ $this->shippingCost }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <h4 class="text-gray-520 font-medium text-base">Estimated-tax</h4>
                        <p class="text-gray750 font-medium text-base">${{ $this->totalTax }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
