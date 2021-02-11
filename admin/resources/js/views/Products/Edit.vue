<template>
    <editForm :resource="product"
              @init="specs = $event.fields.specifications.value"
              :form-data="formData"
              @submit="submit">

        <template v-slot:specifications>
            <div class="py-1 flex justify-between">
                <input v-model="spec.label"
                       placeholder="Label"
                       type="text"
                       class="w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2">
                <div class="flex w-2 justify-center items-center px-3">:</div>
                <input v-model="spec.value"
                       placeholder="Value"
                       type="text"
                       class="w-2/3 sm:w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2">
                <button @click="addSpec"
                        type="button"
                        class="w-2 sm:w-1 text-xl bg-purple-600 hover:bg-purple-800 text-white font-bold px-5 mx-2 flex justify-center items-center rounded-md">
                    <i class="dripicons-plus"></i>
                </button>
            </div>
            <draggable
                v-model="specs"
                class="list-group"
                ghost-class="ghost"
                @start="dragging = true"
                @end="dragging = false"
            >
                <div v-for="(spec, index) in specs"
                     class="py-1 flex justify-between cursor-pointer">
                    <input v-model="spec.label"
                           placeholder="Label"
                           type="text"
                           class="w-1/3 input disabled appearance-none block leading-tight focus:outline-none focus:bg-white px-2">

                    <div class="flex w-2 justify-center items-center px-3">:</div>
                    <input v-model="spec.value"
                           placeholder="Value"
                           type="text"
                           class="w-2/3 sm:w-1/3 input appearance-none block leading-tight focus:outline-none focus:bg-white px-2">
                    <button @click="deleteSpec(index)"
                            type="button"
                            class="w-2 sm:w-1 text-xl bg-red-600 hover:bg-red-800 text-white font-bold px-5 mx-2 flex justify-center items-center rounded-md">
                        <i class="dripicons-minus"></i>
                    </button>
                </div>
            </draggable>
        </template>
    </editForm>
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'
    import draggable from 'vuedraggable'

    export default {
        components: {
            editForm,
            draggable
        },

        data() {
            return {
                product: {},
                formData: new FormData,
                spec: {},
                specs: [],
                dragging: false,
            }
        },

        methods: {
            submit() {
                let specs = [...this.specs]
                if(this.spec.label && this.spec.value){
                    specs.push(this.spec)
                }
                this.formData.append('specifications', JSON.stringify(specs))
            },

            addSpec() {
                this.specs.push({label: this.spec.label, value: this.spec.value})
                this.spec = {}
            },
            deleteSpec(index) {
                this.specs.splice(index, 1)
            },
        },

        async created() {
            const { data } = await Admin.request('products').edit(this.$route.params.id)
            this.product = data
        }
    }
</script>

<style scoped>
    .ghost {
        background: #c8ebfb;
    }
</style>



