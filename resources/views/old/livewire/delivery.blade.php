<div class="mb-4 rounded overflow-hidden collapse-wrapper">
    <x-collapse @state-changed.window="height = $refs.inner.scrollHeight;">
        @slot('trigger')
            <div slot="trigger" class="flex justify-between items-center bg-gray-50 px-7 py-8 trigger-wrapper">
                <h3 class="text-1xl font-medium text-gray-750 trigger-name">
                    Method Of Delivery
                </h3>
                <svg class="w-6 h-auto fill-current text-gray-750 closed" viewBox="0 0 24.882 12.881">
                    <g id="_1828747" data-name="1828747" transform="translate(6.461 6.501)">
                        <path id="Path_95" data-name="Path 95"
                              d="M.7,12.881A.663.663,0,0,1,.233,11.75L11.789.193a.663.663,0,0,1,.937.937L1.171,12.687a.664.664,0,0,1-.469.194Zm0,0"
                              transform="translate(-6.46 6.42) rotate(-90)"/>
                        <path id="Path_96" data-name="Path 96"
                              d="M12.258,12.881a.658.658,0,0,1-.468-.194L.233,1.131A.663.663,0,0,1,1.17.194L12.726,11.75a.663.663,0,0,1-.468,1.132Zm0,0"
                              transform="translate(5.54 6.42) rotate(-90)"/>
                    </g>
                </svg>
                <svg class="w-3 h-auto fill-current text-gray-750 opened mr-3" viewBox="0 0 12.881 12.882">
                    <g id="_1828747" data-name="1828747" transform="translate(-0.039 0.001)">
                        <path id="Path_95" data-name="Path 95"
                              d="M.7,12.881A.663.663,0,0,1,.233,11.75L11.789.193a.663.663,0,0,1,.937.937L1.171,12.687a.664.664,0,0,1-.469.194Zm0,0"
                              transform="translate(0)"/>
                        <path id="Path_96" data-name="Path 96"
                              d="M12.258,12.881a.658.658,0,0,1-.468-.194L.233,1.131A.663.663,0,0,1,1.17.194L12.726,11.75a.663.663,0,0,1-.468,1.132Zm0,0"
                              transform="translate(0 0)"/>
                    </g>
                </svg>
            </div>
        @endslot
        <div class="w-full bg-gray-50 px-7 pb-10">
            <div>
                <div class="flex border-b-2 border-gray-450 border-solid pb-5">
                    <div class="w-30/100 pr-4">
                        <div class="flex items-center mb-3">
                            <span class="font-medium text-gray-750 mr-4">Delivery To:</span>
                            <div class="w-7 h-7 overflow-hidden rounded-full mr-3">
                                <img src="{{ asset('/images/usa-flag.png') }}" alt="">
                            </div>
                            <div class=" border-b-2 border-gray-450 border-solid">
                                <div class="date product-select-wrapper small">
                                    <x-select wire:model.debounce.200ms="state"
                                              class="text-gray-750 font-medium">
                                        <option data-placeholder="true">Choose State</option>
                                        @foreach($stateOptions as $stateOption)
                                            <option value="{{ $stateOption->id }}">{{ $stateOption->name }}</option>
                                        @endforeach
                                    </x-select>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-gray-750">The cost of delivery depends on your state</p>
                    </div>
                    <div class="w-70/100">
                        @isset($activeState)
                            @foreach($activeState->shippings as $shipping)
                                <div class="flex mb-5">
                                    <div class="bg-gray-200 rounded py-6 px-5 w-30/100">
                                        <div class="flex justify-between items-center">
                                            <div class="pr-4 flex flex-col">
                                                <span class="font-semibold text-gray-750 text-base mb-2 capitalize">{{ $shipping->type }} Delivery</span>
                                                <span class="font-bold text-gray-750 text-xl mb-1">$ {{ $shipping->cost }}</span>
                                            </div>
                                            <div>
                                                @if($shipping->type === 'standard')
                                                    <svg class="w-12 h-auto transform -rotate-35 fill-current text-gray-350"
                                                         viewBox="0 0 36.702 24.518">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                                <rect id="Rectangle_52" data-name="Rectangle 52"
                                                                      width="36.702" height="24.518" rx="5"
                                                                      transform="translate(751 1181)" fill="#8b8b8b"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Mask_Group_4" data-name="Mask Group 4"
                                                           transform="translate(-751 -1181)" clip-path="url(#clip-path)">
                                                            <g id="_411763" data-name="411763"
                                                               transform="translate(751 1181.651)">
                                                                <g id="Group_79" data-name="Group 79"
                                                                   transform="translate(0 0)">
                                                                    <g id="Group_78" data-name="Group 78">
                                                                        <path id="Path_65" data-name="Path 65"
                                                                              d="M34.133,54.669l-.95-3.8a.575.575,0,0,0,.455-.562v-.613a2.416,2.416,0,0,0-2.414-2.414H26.894V46.014a1.189,1.189,0,0,0-1.188-1.188H3.64a1.189,1.189,0,0,0-1.188,1.188V56.435a.575.575,0,1,0,1.149,0V46.014a.038.038,0,0,1,.038-.038H25.707a.038.038,0,0,1,.038.038V56.435a.575.575,0,0,0,1.149,0v-.651h6.782a1.881,1.881,0,0,1,1.786,1.3H33.675a.575.575,0,0,0-.575.575v1.226a1.8,1.8,0,0,0,1.8,1.8h.651v2.528h-1.5a3.638,3.638,0,0,0-6.879,0h-.277V58.887a.575.575,0,1,0-1.149,0v4.329H13.822a3.638,3.638,0,0,0-6.879,0H3.64a.038.038,0,0,1-.038-.038V61.913h2.49a.575.575,0,1,0,0-1.149H.575a.575.575,0,1,0,0,1.149H2.452v1.264A1.189,1.189,0,0,0,3.64,64.365h3.1c0,.013,0,.025,0,.038a3.64,3.64,0,0,0,7.279,0c0-.013,0-.026,0-.038H26.972c0,.013,0,.025,0,.038a3.64,3.64,0,0,0,7.279,0c0-.013,0-.026,0-.038h1.878a.575.575,0,0,0,.575-.575v-6.13A3.031,3.031,0,0,0,34.133,54.669Zm-7.238-6.241h4.329a1.266,1.266,0,0,1,1.264,1.264v.038H26.894Zm0,6.206V50.88H32l.939,3.754ZM10.382,66.894a2.49,2.49,0,1,1,2.49-2.49A2.493,2.493,0,0,1,10.382,66.894Zm20.228,0A2.49,2.49,0,1,1,33.1,64.4,2.493,2.493,0,0,1,30.61,66.894Zm4.942-7.356H34.9a.652.652,0,0,1-.651-.651v-.651h1.3v1.3Z"
                                                                              transform="translate(0 -44.827)"
                                                                              fill="#8b8b8b"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_81" data-name="Group 81"
                                                                   transform="translate(9.195 18.389)">
                                                                    <g id="Group_80" data-name="Group 80">
                                                                        <path id="Path_66" data-name="Path 66"
                                                                              d="M62.315,167.082a1.188,1.188,0,1,0,1.188,1.188A1.189,1.189,0,0,0,62.315,167.082Z"
                                                                              transform="translate(-61.127 -167.082)"
                                                                              fill="#8b8b8b"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_83" data-name="Group 83"
                                                                   transform="translate(29.423 18.389)">
                                                                    <g id="Group_82" data-name="Group 82">
                                                                        <path id="Path_67" data-name="Path 67"
                                                                              d="M196.8,167.082a1.188,1.188,0,1,0,1.188,1.188A1.189,1.189,0,0,0,196.8,167.082Z"
                                                                              transform="translate(-195.608 -167.082)"
                                                                              fill="#8b8b8b"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_85" data-name="Group 85"
                                                                   transform="translate(14.711 15.937)">
                                                                    <g id="Group_84" data-name="Group 84">
                                                                        <path id="Path_68" data-name="Path 68"
                                                                              d="M106.96,150.781H98.378a.575.575,0,0,0,0,1.149h8.582a.575.575,0,1,0,0-1.149Z"
                                                                              transform="translate(-97.804 -150.781)"
                                                                              fill="#8b8b8b"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_87" data-name="Group 87"
                                                                   transform="translate(1.226 13.486)">
                                                                    <g id="Group_86" data-name="Group 86">
                                                                        <path id="Path_69" data-name="Path 69"
                                                                              d="M16.081,134.48H8.725a.575.575,0,1,0,0,1.149h7.356a.575.575,0,1,0,0-1.149Z"
                                                                              transform="translate(-8.15 -134.48)"
                                                                              fill="#8b8b8b"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_89" data-name="Group 89"
                                                                   transform="translate(10.421 5.517)">
                                                                    <g id="Group_88" data-name="Group 88">
                                                                        <path id="Path_70" data-name="Path 70"
                                                                              d="M78.841,81.671a.575.575,0,0,0-.813,0l-5.11,5.11-2.659-2.659a.575.575,0,0,0-.813.813L72.511,88a.575.575,0,0,0,.813,0l5.517-5.517A.575.575,0,0,0,78.841,81.671Z"
                                                                              transform="translate(-69.278 -81.503)"
                                                                              fill="#8b8b8b"/>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                @elseif($shipping->type === 'express')
                                                    <svg class="w-10 h-auto transform -rotate-35 fill-current text-gray-520"
                                                         viewBox="0 0 45.926 48.994">
                                                        <g>
                                                            <path d="M61.552,10.81,39.307.071a.718.718,0,0,0-.624,0L16.438,10.81a.718.718,0,0,0-.406.646V37.537a.718.718,0,0,0,.406.646L38.683,48.922a.718.718,0,0,0,.624,0L61.552,38.183a.718.718,0,0,0,.406-.646V11.456A.718.718,0,0,0,61.552,10.81Zm-22.557-9.3,20.594,9.942-5.97,2.882a.712.712,0,0,0-.122-.077L33.043,4.387ZM31.423,5.2l20.564,9.928L47.775,17.16,27.219,7.236ZM52.468,16.488V24l-3.934,1.9V18.387Zm8.054,20.6L39.713,47.132V22.646l4.964-2.4a.718.718,0,1,0-.624-1.293L38.995,21.4,37,20.438a.718.718,0,0,0-.624,1.293l1.9.915V47.132L17.467,37.086V12.6l15.846,7.65a.718.718,0,0,0,.624-1.293L18.4,11.456,25.53,8.014,47.089,18.422l.01.013v8.612a.718.718,0,0,0,1.03.646L53.5,25.1a.718.718,0,0,0,.406-.646V15.8l6.619-3.2V37.086Z"
                                                                  transform="translate(-16.032 0.001)"/>
                                                        </g>
                                                    </svg>
                                                @endif
                                            </div>
                                        </div>
                                        <p class="text-sm font-medium text-gray-720 mb-1">Free of charge– for orders starting from $55.27</p>
                                    </div>
                                    <div class="w-70/100 pl-2">
                                        <div class="bg-gray-200 rounded py-8 px-5 h-full">
                                            <p class="text-sm font-semibold text-gray-750 mb-4">Expected Delivery
                                                Date {{ $this->deliveryDate($shipping) }}</p>
                                            <p class="text-gray-720 font-medium text-sm">Note: the above dates are
                                                only valid if the order is placed
                                                before the end of the relevant time period and will be confirmed
                                                when placing the order.</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
                <div class="pt-8">
                    <h5 class="text-1xl font-medium text-gray-750 mb-5">Returns</h5>
                    <div class="flex">
                        <div class="w-30/100 pr-4">
                            <div class="flex items-center mb-3">
                                <span class="font-medium text-gray-750 mr-4">Delivery To:</span>
                                <div class="w-7 h-7 overflow-hidden rounded-full mr-3">
                                    <img src="{{ asset('/images/usa-flag.png') }}" alt="">
                                </div>
                                <div class=" border-b-2 border-gray-450 border-solid">
                                    <div class="date product-select-wrapper small">
                                        <x-select wire:model.debounce.200ms="state"
                                                  class="text-gray-750 font-medium">
                                            <option data-placeholder="true">Choose State</option>
                                            @foreach($stateOptions as $stateOption)
                                                <option value="{{ $stateOption->id }}">{{ $stateOption->name }}</option>
                                            @endforeach
                                        </x-select>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-gray-750">The cost of delivery depends on your state</p>
                        </div>
                        <div class="w-70/100">
                            <div class="rounded flex bg-gray-200 px-4 py-7 mb-5">
                                <div class="mr-4">
                                    <svg class="w-16 h-auto" viewBox="0 0 55.599 55.547">
                                        <g transform="translate(-0.259 20.47) rotate(-31)" opacity="0.33">
                                            <path d="M40.166,9.243,24.363.6A.8.8,0,0,0,23.6.6L17.644,3.856a.8.8,0,0,0-.34.186L7.8,9.243a.789.789,0,0,0-.411.692V20.39A10.514,10.514,0,0,0,1.071,35.029.792.792,0,0,0,2.5,34.336,8.954,8.954,0,0,1,16.884,24.1a8.9,8.9,0,0,1,0,12.623,8.988,8.988,0,0,1-10.27,1.711.79.79,0,1,0-.7,1.419,10.572,10.572,0,0,0,14.267-5.165L23.6,36.56a.8.8,0,0,0,.763,0l15.8-8.644a.789.789,0,0,0,.411-.692V21.737a.793.793,0,0,0-1.585,0v5.019L24.777,34.533V19.045l4.692-2.566v4.068a.793.793,0,0,0,1.175.692l3.386-1.857a.788.788,0,0,0,.41-.691V13.759l4.553-2.49v4.153a.792.792,0,0,0,1.585,0V9.935a.789.789,0,0,0-.411-.692ZM23.982,2.191,38.138,9.935l-4.466,2.443L19.516,4.633Zm0,15.488L9.825,9.935,14.455,7.4l14.157,7.744Zm6.276-3.433L16.1,6.5l1.768-.967,14.157,7.744ZM18,22.988a10.5,10.5,0,0,0-7.456-3.077,10.729,10.729,0,0,0-1.576.116V11.269l14.22,7.779V34.536l-2.468-1.35A10.5,10.5,0,0,0,18,22.988Zm14.85-4.764-1.8.988v-3.6l1.8-.985Zm0,0"
                                                  transform="translate(0)"/>
                                            <path d="M492.728,219.441a.728.728,0,1,0,.514.213A.734.734,0,0,0,492.728,219.441Zm0,0"
                                                  transform="translate(-452.878 -201.6)"/>
                                            <path d="M67.934,326.369a.728.728,0,0,0,.514-1.242l-.5-.5h4.3a1.892,1.892,0,1,1,0,3.784H69.7a.728.728,0,1,0,0,1.455h2.548a3.347,3.347,0,1,0,0-6.694h-4.3l.5-.5a.728.728,0,0,0-1.029-1.029l-1.746,1.746a.728.728,0,0,0,0,1.029l1.746,1.746A.725.725,0,0,0,67.934,326.369Zm0,0"
                                                  transform="translate(-60.695 -294.402)"/>
                                            <path d="M36.8,457.888a.724.724,0,0,1-.556-.259v0a.727.727,0,1,1,.557.261Zm0,0"
                                                  transform="translate(-33.442 -419.589)"/>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-base font-semibold text-gray-750 mb-4">Local Post Office</p>
                                    <p class="list-item text-sm font-medium text-gray-750 pl-3">You can
                                        return the order via any local post office</p>
                                    <p class="list-item text-sm font-medium text-gray-750 pl-3">Each parcel
                                        is accompanied by an invoice for the return of goods with an Unpaid
                                        postage label</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                                            <span class="text-base font-medium text-gray-750 mr-5">For More
                                                                Information, Go To</span>
                                    <a href="#" class="py-4 px-10 text-center bg-gray-750 text-white text-lg font-semibold">
                                        The Support Services Section
                                    </a>
                                </div>
                                <a href="#" class="text-blue-450 text-base underline font-medium">Need
                                    Help?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-collapse>
</div>
