<template>
    <div class="d-flex justify-content-end w-100 pr-5">
        <h3>Корзина: {{ test.total }} ₽</h3>

<!--        <div class="d-flex justify-content-center">-->
<!--            <button @click.prevent="increase" class="btn btn-primary">Прибавить</button>-->
<!--        </div>-->
    </div>
</template>

<script>
    export default {
        data(){
            return{
                test: 0,
            }
        },

        methods:{

            fetch(){
                axios.get('/')
                    .then(response => {
                        this.test = response.data;
                    })
            }
        },

        mounted() {
            this.fetch();
        }
    }
</script>

<style scoped>

</style>