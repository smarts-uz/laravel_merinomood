<a href="/basket" class="focus:outline-none relative inline-block">
    <span class="lg:hidden">Shopping bag  ({{ $basketQuantity }})</span>
    <svg class="hidden lg:block w-7 h-auto xs:w-6 2xs:w-5 fill-current" viewBox="0 0 23.369 27">
        <path data-name="1656850"
              d="M23.364,26.113,21.312,6.571a.8.8,0,0,0-.8-.72H16.655V4.972a4.972,4.972,0,0,0-9.943,0v.879H2.855a.8.8,0,0,0-.8.72L0,26.113A.8.8,0,0,0,.8,27H22.564a.8.8,0,0,0,.8-.887ZM8.319,4.972a7.122,7.122,0,0,1,.655-1.993,5.281,5.281,0,0,1,2.709-1.371,3.368,3.368,0,0,1,3.364,3.364v.879H8.319ZM1.7,25.393,3.579,7.458H6.712V9.229a.8.8,0,0,0,1.607,0V7.458h6.729V9.229a.8.8,0,0,0,1.607,0V7.458h3.133l1.883,17.935Zm0,0"
              transform="translate(0 0)"/>
    </svg>
    <span class="hidden lg:block absolute w-5 h-5 bg-orange-450 rounded-full text-xs text-center basket-quantity leading-relaxed overflow-hidden">{{ $basketQuantity }}</span>
</a>
