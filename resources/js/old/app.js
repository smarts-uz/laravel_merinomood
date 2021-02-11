import 'alpinejs'
import 'flickity-as-nav-for'
import 'flickity-fade'
import jump from 'jump.js'
import Cleave from 'cleave.js'
require('cleave.js/dist/addons/cleave-phone.us');

window.Flickity = require('flickity');
window.SlimSelect = require('slim-select');
window.iziToast = require('izitoast');
window.Rater = require("rater-js");

window.popup = function () {
    return  {
        deleteAddress() {
            iziToast.question({
                timeout: false,
                close: true,
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                message: 'Delete address?',
                position: 'center',
                buttons: [
                    ['<button><b>YES</b></button>', (instance, toast) => {

                        window.livewire.emit('deleteAddress')
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button')

                    }, true],
                    ['<button>Cancel</button>', (instance, toast) => {

                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button')

                    }],
                ],
            });
        }
    }
}

window.priceRange = function (){
    return {
        init(){
            this.setMinPrice();
            this.setMaxPrice()
        },
        setMinPrice(){
            let _this = this.$refs.minInput,
                min = parseInt(_this.min),
                max = parseInt(_this.max);

            _this.value = Math.min(parseInt(_this.value), parseInt(this.$refs.maxInput.value) - 1);

            let percent = ((_this.value - min) / (max - min)) * 100;

            this.$refs.thumbMin.style.left = percent + "%";
            this.$refs.range.style.left = percent + "%";
        },
        setMaxPrice(){
            let _this = this.$refs.maxInput,
                min = parseInt(_this.min),
                max = parseInt(_this.max);

            _this.value = Math.max(parseInt(_this.value), parseInt(this.$refs.minInput.value) + 1);

            let percent = ((_this.value - min) / (max - min)) * 100;

            this.$refs.thumbMax.style.right = (100 - percent) + "%";
            this.$refs.range.style.right = (100 - percent) + "%";
        }
    }
}

window.livewire.on('scrollTo', target => jump(target))

window.livewire.on('urlChange', (url) => {
    history.pushState(null, null, url);
});


