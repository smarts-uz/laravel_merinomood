<template>
    <detail :resource="product"
            class="mb-10" >
        <template v-slot:specifications="{field}">
            <ul>
                <li v-for="spec in field.value"><span class="font-bold">{{spec.label}} :</span> {{ spec.value }}</li>
            </ul>
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
                product: {},
                resource: 'product'
            }
        },
        async created() {
            const { data } = await Admin.request('products').detail(this.$route.params.id)

            this.product = data
        }
    }
</script>
