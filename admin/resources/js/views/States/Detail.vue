<template>
    <detail :resource="state"
            class="mb-10">
        <template v-slot:shippings="{field}">
            <div class="w-full">
                <div class="flex bg-gray-200 px-3 py-1">
                    <div class="w-1/3 font-bold">Type</div>
                    <div class="w-1/3 font-bold">Cost ($)</div>
                    <div class="w-1/3 font-bold">Duration (days)</div>
                </div>
                <div v-for="shipping in field.value" class="flex px-3 py-1 border-b">
                    <div class="w-1/3 font-bold">{{options[shipping.type]}}</div>
                    <div class="w-1/3">{{shipping.cost}}</div>
                    <div class="w-1/3">{{shipping.duration}}</div>
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
                state: {},
                resource: 'state',
                options: {
                    standard: 'Standard',
                    express: 'Express'
                }
            }
        },
        async created() {
            const { data } = await Admin.request('states').detail(this.$route.params.id)

            this.state = data
        }
    }
</script>
