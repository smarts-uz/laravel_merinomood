<div class="flex mb-6 items-center">
    <p class="text-gray-300 text-base font-medium mr-1 w-16">Ship To:</p>
    <div x-data="{sort: ['Kyrgyzstan', 'USA', 'Russia']}" class="select w-9/12">
        <x-select>
            <template x-for="item in sort">
                <option x-text="item"></option>
            </template>
        </x-select>
    </div>
</div>
