<template>
    <createForm :resource="state"
                :form-data="formData"
                @submit="submit"
                @init="init">

        <template v-slot:shippings>
            <div class="py-1 flex justify-between">
                <v-select v-model="shipping.type"
                          :reduce="type => type.value"
                          :options="options"
                          :searchable="false"
                          placeholder="Type"
                          class="w-1/3 appearance-none block leading-tight focus:outline-none focus:bg-white mr-1">
                </v-select>
                <input v-model="shipping.cost"
                       placeholder="Cost"
                       type="number"
                       step="0.01"
                       class="w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2 mr-1">
                <input v-model="shipping.duration"
                       placeholder="Duration"
                       type="number"
                       class="w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2">
                <button @click="addShipping"
                        type="button"
                        class="w-2 sm:w-1 text-xl bg-purple-600 hover:bg-purple-800 text-white font-bold px-5 mx-2 flex justify-center items-center rounded-md">
                    <i class="dripicons-plus"></i>
                </button>
            </div>
            <div v-for="(shipping, index) in shippings"
                 class="py-1 flex justify-between cursor-pointer">
                <v-select v-model="shipping.type"
                          :reduce="type => type.value"
                          :options="updateOptions(shipping.type)"
                          :searchable="false"
                          @input="resetOptions()"
                          placeholder="Type"
                          class="w-1/3 appearance-none block leading-tight focus:outline-none focus:bg-white mr-1">
                </v-select>
                <input v-model="shipping.cost"
                       placeholder="Cost"
                       type="number"
                       step="0.01"
                       class="w-1/3 input disabled appearance-none block leading-tight focus:outline-none focus:bg-white px-2 mr-1">
                <input v-model="shipping.duration"
                       placeholder="Duration"
                       type="number"
                       class="w-1/3 input disabled appearance-none block leading-tight focus:outline-none focus:bg-white px-2">
                <button @click="deleteShipping(index)"
                        type="button"
                        class="w-2 sm:w-1 text-xl bg-red-600 hover:bg-red-800 text-white font-bold px-5 mx-2 flex justify-center items-center rounded-md">
                    <i class="dripicons-minus"></i>
                </button>
            </div>
        </template>
    </createForm>
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'
    import VSelect from 'vue-select'

    export default {
        components: {
            CreateForm,
            VSelect
        },

        data() {
            return {
                state: {},
                formData: new FormData,
                shipping: {},
                shippings: [],
                defaultOptions: [
                    {
                        label: 'Standard',
                        value: 'standard'
                    },
                    {
                        label: 'Express',
                        value: 'express'
                    }
                ],
                options: [
                    {
                        label: 'Standard',
                        value: 'standard'
                    },
                    {
                        label: 'Express',
                        value: 'express'
                    }
                ],
            }
        },

        methods: {
            init(resource) {
                this.shippings = resource.fields.shippings.value
            },
            updateOptions(type) {
                let options = [...this.options]
                options.push(...this.defaultOptions.filter(option => option.value === type))

                return options
            },
            submit() {
                let shippings = [...this.shippings]
                if(this.shipping.type && this.shipping.cost && this.shipping.duration){
                    shippings.push(this.shipping)
                }
                this.formData.append('shippings', JSON.stringify(shippings))
            },
            addShipping() {
                if(this.shipping.type && this.shipping.cost && this.shipping.duration){
                    this.shippings.push({type: this.shipping.type, cost: this.shipping.cost, duration: this.shipping.duration})
                    this.shipping = {}
                    this.resetOptions()
                }
            },
            deleteShipping(index) {
                this.shippings.splice(index, 1)
                this.resetOptions()
            },
            resetOptions(){
                this.options = this.defaultOptions.filter(option => this.shippings.filter(shipping => shipping.type === option.value).length === 0)
            }
        },

        async created() {
            const { data } = await Admin.request('states').create()
            this.state = data;
        }
    }
</script>
<style lang="scss">
    @import "~vue-select/src/scss/vue-select";

    .vs__dropdown-toggle {
        height: 100%;
    }
</style>
