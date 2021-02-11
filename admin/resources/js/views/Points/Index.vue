<template>
    <index :resources="points" :via="via" :label="label"
           @update="points = $event">
        <template v-slot:variation="{field}">
            <div v-if="field.value">
                <router-link :to="field.value.link"
                             class="text-blue-500 font-bold">
                    {{ field.value.label }}
                </router-link>
            </div>
            <div v-else>
                <i class="dripicons-minus text-gray-600" title="Значение отсутствует" />
            </div>
        </template>
    </index>
</template>

<script>
    import { Index, Actions, Fetch } from 'Vendor/js/components/Templates/Index'

    export default {
        components: {
            Index,
            Actions
        },
        mixins: [Fetch],
        data() {
            return {
                points: {},
                route: 'points'
            }
        }
    }
</script>
