<template>
    <detail :resource="variation"
            class="mb-10">
        <template v-slot:variationItems="{field}">
            <div class="w-full">
                <div class="flex bg-gray-200 px-3 py-1">
                    <div class="w-1/3 font-bold">Size</div>
                    <div class="w-1/3 font-bold">Price</div>
                    <div class="w-1/3 font-bold">In stock</div>
                </div>
                <div v-for="item in field.value" class="flex px-3 py-1 border-b">
                    <div class="w-1/3 font-bold">{{item.size}}</div>
                    <div class="w-1/3">{{item.price}}</div>
                    <div class="w-1/3">{{item.in_stock}}</div>
                </div>
            </div>
        </template>
    </detail>
</template>

<script>
    import Detail from 'Vendor/js/components/Templates/Detail'
    import {Index} from 'Vendor/js/components/Templates/Index'
    import ResourceDetail from 'Vendor/js/Mixins/ResourceDetail'

    export default {
        components: {
            Detail,
            Index
        },
        mixins: [ResourceDetail],
        data() {
            return {
                variation: {},
                resource: 'variation'
            }
        },
        async created() {
            const { data } = await Admin.request('variations').detail(this.$route.params.id)

            this.variation = data
        }
    }
</script>
