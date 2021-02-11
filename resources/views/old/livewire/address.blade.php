<div class="sm:px-5 address">
    @if($view === 'empty')
        <button wire:click="changeView('create')"
                class="text-lg font-semibold text-white px-8 py-4 bg-gray-750 mb-8 3xs:w-full">Add a new address</button>
    @elseif($view === 'detail')
        <div class="flex xxl:flex-col">
            <div class="w-6/12 xxl:w-8/12 lg:w-full pr-6 xxl:pr-0 xxl:mb-7">
                <div class="px-5 py-5 bg-gray-50">
                    <div class="mb-10">
                        <div class="flex">
                            <p class="text-base font-medium text-gray-520 w-4/12 3xs:w-5/12">Full Name</p>
                            <p class="text-base font-medium text-gray-750 3xs:w-7/12">{{ $address['name'] }}</p>
                        </div>
                        <div class="flex">
                            <p class="text-base font-medium text-gray-520 w-4/12 3xs:w-5/12">Address</p>
                            <p class="text-base font-medium text-gray-750 3xs:w-7/12">{{ $address['address'] }}</p>
                        </div>
                        <div class="flex">
                            <p class="text-base font-medium text-gray-520 w-4/12 3xs:w-5/12">State/City</p>
                            <p class="text-base font-medium text-gray-750 3xs:w-7/12">{{ $this->stateLabel }} / {{ $address['city'] }}</p>
                        </div>
                        <div class="flex">
                            <p class="text-base font-medium text-gray-520 w-4/12 3xs:w-5/12">Post Code</p>
                            <p class="text-base font-medium text-gray-750 3xs:w-7/12">{{ $address['postcode'] }}</p>
                        </div>
                        <div class="flex">
                            <p class="text-base font-medium text-gray-520 w-4/12 3xs:w-5/12">Phone</p>
                            <p class="text-base font-medium text-gray-750 3xs:w-7/12">{{ $address['phone'] }}</p>
                        </div>
                    </div>
                    <div class="flex 3xs:flex-col">
                        <div class="w-1/2 3xs:w-full pr-3 3xs:pr-0 3xs:mb-5">
                            <button wire:click="changeView('edit')" class="w-full text-lg text-white font-semibold bg-gray-520 py-2 border-2 border-gray-520 focus:outline-none">Edit</button>
                        </div>
                        <div class="w-1/2 3xs:w-full pl-3 3xs:pl-0">
                            <button x-data="popup()" @click="deleteAddress"
                                    class="w-full text-lg font-semibold text-gray-520 py-2 border-2 border-gray-520 focus:outline-none"
                            >Delete</button>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="flex items-center pt-8 w-2/12">
                        <img src="/images/flag.png" alt="" class="mr-4 w-9">
                    </div>
                    <div class="flex flex-col w-10/12 md:w-8/12 sm:w-7/12 2xs:w-8/12">
                        <p class="text-sm font-medium text-gray-520 mb-3">Country:</p>
                        <div class="appearance-none border border-gray-520 focus:outline-none text-2xl text-gray-750 bg-gray-75 py-4 px-5">
                            <p class="text-base font-medium text-black">United States</p>
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
