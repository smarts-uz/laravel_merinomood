<form wire:submit.prevent="edit" class="sm:mx-8">
    <div class="flex justify-between lg:flex-col md:flex-row xs:flex-col border-b-2 xs:border-b-0 border-gray-450 mb-8 xs:mb-0">
        <div class="flex flex-col w-6/12 lg:w-9/12 lg:pr-0 md:w-5/12 md:pr-3 xs:w-full xs:pr-0 pr-5 lg:mb-5">
            <label for="name" class="text-sm font-medium text-gray-520 mb-3">First / last name:</label>
            <input wire:model.lazy="user.name" id="name" type="text"
                   class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
            @error('user.name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="w-6/12 pl-5 lg:w-9/12 lg:pl-0 md:w-7/12 md:pl-3 xs:w-full xs:pl-0">
            <p class="text-sm font-medium text-gray-520 mb-3">Date of birth:</p>
            <div class="flex justify-between pb-10 xs:pb-5">
                <div class="date" wire:ignore>
                    <x-select wire:model.debounce.200ms="birthday.day"
                              class="appearance-none border border-gray-520 focus:outline-none text-2xl text-gray-750">
                        <option>&nbsp;</option>
                        @foreach(range(1, 31) as $day)
                        	<option value="{{ $day }}">{{ $day }}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="months" wire:ignore>
                    <x-select wire:model.debounce.200ms="birthday.month"
                              class="appearance-none border border-gray-520 focus:outline-none text-2xl text-gray-750">
                        <option>&nbsp;</option>
                        @foreach($this->months as $number => $name)
                        	<option value="{{ $number }}">{{ $name }}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="years" wire:ignore>
                    <x-select wire:model.debounce.200ms="birthday.year"
                              class=" appearance-none border border-gray-520 focus:outline-none text-2xl text-gray-750">
                        <option>&nbsp;</option>
                        @foreach(range(1980, now()->year) as $year)
                        	<option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </x-select>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between lg:flex-col md:flex-row xs:flex-col border-b-2 xs:border-b-0 border-gray-450 pb-10 xs:pb-5 mb-8 xs:mb-0">
        <div class="flex flex-col w-6/12 pr-5 lg:w-9/12 lg:pr-0 md:w-6/12 md:pr-3 xs:w-full xs:pr-0">
            <label for="email" class="text-sm font-medium text-gray-520 mb-3">Write your e-mail addres:</label>
            <input wire:model.lazy="user.email" id="email" type="email"
                   class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
            @error('user.email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="flex justify-between lg:flex-col md:flex-row xs:flex-col pb-10">
        <div class="flex flex-col w-6/12 pr-5 lg:w-9/12 lg:pr-0 lg:mb-5 md:w-6/12 md:pr-3 xs:w-full xs:pr-0">
            <label for="password" class="text-sm font-medium text-gray-520 mb-3">Change password:</label>
            <input wire:model.lazy="user.password" id="password" type="password"
                   class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
            @error('user.password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col w-6/12 pl-5 lg:w-9/12 lg:pl-0 md:w-6/12 md:pl-3 xs:w-full xs:pl-0">
            <label for="confirm" class="text-sm font-medium text-gray-520 mb-3">Confirm your password:</label>
            <input wire:model.lazy="user.password_confirmation" id="confirm" type="password"
                   class="border py-4 px-5 border-gray-520 focus:outline-none bg-gray-75">
        </div>
    </div>
    <button type="submit"
        class="text-lg font-semibold bg-gray-750 text-white px-10 py-4 2xs:w-full">Save the changes</button>
</form>
