<template>
    <button @click="runFactories"><span>{{this.message}}</span></button>
</template>

<script>
    export default {
        name: "Factories",
        data() {
            return {
                message: 'Запуск фабрик'
            }

        },
        methods: {
            runFactories() {
                axios.get('/factories');

            },

        }
    }

</script>

<style scoped>

</style>