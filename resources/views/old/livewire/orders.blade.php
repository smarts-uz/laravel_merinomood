<div>
    <div class="pt-10 xxl:overflow-scroll sm:overflow-hidden">
        <table class="w-full">
            <tr class="bg-gray-75 border-2 border-gray-75 sm:hidden">
                <th class="px-3 py-3 text-sm font-medium text-black">Date</th>
                <th class="px-3 py-3 text-sm font-medium text-black">#Order</th>
                <th class="px-1 py-3 text-sm font-medium text-black">State</th>
                <th class="hidden px-1 py-3 text-sm font-medium text-black">Carrier</th>
                <th class="hidden py-3 text-sm font-medium text-black">Tracking</th>
                <th class="py-3 text-sm font-medium text-black">Order Total</th>
                <th class="py-3 text-sm font-medium text-black">Status</th>
                <th class="py-3 text-sm font-medium text-black">Bonus</th>
                <th class="py-3 text-sm font-medium text-black">Details</th>
            </tr>
            @foreach($orders as $order)
                <tr wire:key="{{ $order->id . 'brief' }}"
                    x-data="{id: {{$order->id}}, open: false}"
                    class="sm:border-2 border-gray-75">
                    <td class="text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-2 text-sm text-gray-750 sm:w-1/3">{{ $order->created_at->format('d/m/Y') }}</td>
                    <td class="text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-1 text-sm text-gray-750 sm:hidden">{{ $order->index }}</td>
                    <td class="text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-1 text-sm text-gray-750 sm:hidden">{{ $order->state }}</td>
                    <td class="hidden text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-1 text-sm text-gray-750 sm:hidden">USPS</td>
                    <td class="hidden text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-2 text-sm text-gray-750 sm:hidden">785348934893483</td>
                    <td class="text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-1 text-sm text-gray-750 sm:hidden">$ {{ $order->amount }}</td>
                    <td class="text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-1 text-sm sm:w-1/3 text-{{ $this->status($order)['color'] }}-500">{{ $this->status($order)['label'] }}</td>
                    <td class="text-center border-2 sm:border-0 border-gray-75 font-medium py-4 px-2 text-sm text-gray-750 sm:hidden">+ {{ $this->bonus($order) }} Bonus</td>

                        <td x-show="open" rowspan="2" class="text-center border-2 border-gray-75 py-2 px-1 text-sm text-gray-750 sm:hidden active-details">
                            <button class="px-7 py-2 bg-gray-520 text-white focus:outline-none"
                                    @click="open = false; $dispatch('close-dropdown',{id})">Close</button>
                            <button class="hidden text-sm ext-gray-520 focus:outline-none">Return item</button>
                        </td>
                        <td x-show="open" class="text-center py-2 px-1 text-sm text-gray-750 hidden sm:table-cell sm:border-r-2 sm:border-gray-75 sm:w-1/3 active-details">
                            <button class="px-7 py-2 bg-gray-520 text-white focus:outline-none"
                                    @click="open = false; $dispatch('close-dropdown',{id})">Close</button>
                        </td>

                        <td x-show="!open" class="text-center border-r-2 border-t-2 sm:border-0 border-gray-75 font-medium py-2 px-1 text-sm text-gray-750 sm:w-1/3">
                            <button class="border-dashed border rounded-md border-gray-750 px-9 py-1 focus:outline-none"
                                    @click="open = true; $dispatch('open-dropdown',{id})">More</button>
                        </td>

                </tr>
                <tr wire:key="{{ $order->id . 'detail' }}"
                    x-data="{id: {{ $order->id }}, open: false}"
                    x-show="open"
                    x-on:open-dropdown.window="if ($event.detail.id == id) open = true"
                    x-on:close-dropdown.window="if ($event.detail.id == id) open = false">
                    <td colspan="6" class="text-center border-2 sm:border-0 border-gray-75 py-5 px-7 2sm:px-4 text-sm text-gray-750 bg-gray-75">
                        @foreach($order->orderVariations as $orderVariation)
                            <div class="flex sm:hidden mb-4">
                                <div class="flex pr-5">
                                    <div class="flex w-6/12">
                                        <img class="w-1/2 mr-4"
                                             src="{{ '/storage/' . $orderVariation->variation->miniature }}"
                                             alt="{{ $orderVariation->variation->name() }}">
                                        <p class="text-left text-sm font-medium text-gray-750 leading-none mr-3 py-3">{{ $orderVariation->variation->name() . ' ' . optional($orderVariation->variationItem)->size }}</p>
                                    </div>
                                    <div>
                                        <p class="flex justify-between text-sm"><span class="text-black pr-4">Name:</span><span class="text-sm text-gray-520">{{ $order->name }}</span></p>
                                        <p class="flex justify-between text-sm"><span class="text-black pr-4">Address:</span><span class="text-gray-520">{{ $order->address }}</span></p>
                                        <p class="flex justify-between text-sm"><span class="text-black pr-4">Quantity:</span><span class="text-gray-520">{{ $orderVariation->quantity }}</span></p>
                                    </div>
                                </div>
                                <div class="pr-5">
                                    <p class="text-2xl font-bold text-gray-750">${{ $orderVariation->sum }}</p>
                                </div>
                            </div>
                            <div class="hidden sm:flex xs:flex-col mb-4">
                                <div class="flex 2sm:flex-col">
                                    <div class="w-3/12 2sm:w-full 2sm:flex 2sm:justify-between 2sm:mb-2">
                                        <img class="w-full 2sm:w-5/12"
                                             src="{{ '/storage/' . $orderVariation->variation->miniature }}"
                                             alt="{{ $orderVariation->variation->name() }}">
                                        <div class="py-3 xs:py-0 2sm:py-3">
                                            <p class="text-left text-sm font-medium text-gray-750 leading-none px-5 hidden 2sm:block">{{ $orderVariation->variation->name() . ' ' . optional($orderVariation->variationItem)->size }}</p>
                                            <p class="text-3xl font-bold text-gray-750 xs:hidden">${{ $orderVariation->sum }}</p>
                                            <button class="hidden text-sm text-gray-520 focus:outline-none">Return item</button>
                                        </div>
                                    </div>
                                    <div class="w-9/12 2sm:w-full px-10 xs:px-5 2sm:pl-0 2xs:pr-0 2sm:pt-3">
                                        <p class="text-left text-sm font-medium text-gray-750 leading-none py-3 2sm:hidden">{{ $orderVariation->variation->name() . ' ' . optional($orderVariation->variationItem)->size }}</p>
                                        <p class="flex justify-between text-sm"><span class="text-black pr-4">Name:</span><span class="text-sm text-gray-520">{{ $order->name }}</span></p>
                                        <p class="flex justify-between text-sm"><span class="text-black pr-4">Address:</span><span class="text-gray-520">{{ $order->address }}</span></p>
                                        <p class="flex justify-between text-sm"><span class="text-black pr-4">Quantity:</span><span class="text-gray-520">{{ $orderVariation->quantity }}</span></p>
                                    </div>
                                </div>
                                <div class="hidden xs:block">
                                    <div class="py-3 flex justify-between items-center">
                                        <p class="text-black pr-4 text-lg hidden 2sm:block">Price:</p>
                                        <p class="text-3xl font-bold text-gray-750">${{ $orderVariation->sum }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="text-right my-10">
        {{ $orders->links() }}
    </div>
</div>
