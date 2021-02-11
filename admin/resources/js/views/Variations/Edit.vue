<template>
    <editForm :resource="variation"
              @init="items = $event.fields.variationItems.value"
              :form-data="formData"
              @submit="submit">

        <template v-slot:variationItems>
            <div class="py-1 flex justify-between">
                <input v-model="item.size"
                       placeholder="Size"
                       type="text"
                       class="w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2 mr-1">
                <input v-model="item.price"
                       placeholder="Price"
                       type="number"
                       step="0.01"
                       class="w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2 mr-1">
                <input v-model="item.in_stock"
                       placeholder="In stock"
                       type="number"
                       class="w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2">
                <button @click="addItem"
                        type="button"
                        class="w-2 sm:w-1 text-xl bg-purple-600 hover:bg-purple-800 text-white font-bold px-5 mx-2 flex justify-center items-center rounded-md">
                    <i class="dripicons-plus"></i>
                </button>
            </div>
            <div v-for="(item, index) in items"
                 class="py-1 flex justify-between cursor-pointer">
                <input v-model="item.size"
                       placeholder="Size"
                       type="text"
                       class="w-1/3 input disabled appearance-none block leading-tight focus:outline-none focus:bg-white px-2 mr-1">
                <input v-model="item.price"
                       placeholder="Price"
                       type="number"
                       step="0.01"
                       class="w-1/3 input disabled appearance-none block leading-tight focus:outline-none focus:bg-white px-2 mr-1">
                <input v-model="item.in_stock"
                       placeholder="In stock"
                       type="number"
                       class="w-1/3 input disabled appearance-none block leading-tight focus:outline-none focus:bg-white px-2">
                <button @click="deleteItem(index)"
                        type="button"
                        class="w-2 sm:w-1 text-xl bg-red-600 hover:bg-red-800 text-white font-bold px-5 mx-2 flex justify-center items-center rounded-md">
                    <i class="dripicons-minus"></i>
                </button>
            </div>
        </template>
    </editForm>
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                variation: {},
                formData: new FormData,
                item: {},
                items: [],
            }
        },

        methods: {
            submit() {
                let items = [...this.items]
                if(this.item.size && this.item.price && this.item.in_stock){
                    items.push(this.item)
                }
                this.formData.append('variationItems', JSON.stringify(items))
            },

            addItem() {
                this.items.push({size: this.item.size, price: this.item.price, in_stock: this.item.in_stock})
                this.item = {}
            },
            deleteItem(index) {
                this.items.splice(index, 1)
            },
        },

        async created() {
            const { data } = await Admin.request('variations').edit(this.$route.params.id)
            this.variation = data
        }
    }
</script>


