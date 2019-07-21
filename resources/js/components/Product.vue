<template>
    <div class="row">
        <div v-for="product in products" class="col-2 p-5">
            <div class="border shadow p-2">
                <div class="form-group d-flex justify-content-center">
                    <h5>{{ product.title }}</h5>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <h5>{{ product.price}}</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <button @click="increase(product.price)" class="btn btn-primary ">В корзину</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                products: [
                    {
                        title: 'Товар 1',
                        price: 500,
                    },
                    {
                        title: 'Товар 2',
                        price: 200,
                    },
                    {
                        title: 'Товар 3',
                        price: 100,
                    },
                    {
                        title: 'Товар 4',
                        price: 600,
                    },
                    {
                        title: 'Товар 5',
                        price: 400,
                    },
                    {
                        title: 'Товар 6',
                        price: 100,
                    },
                ],
            }
        },

        methods:{
            increase: function (price) {
                axios.get('/increase',{
                    params:{
                        price: price,
                    }
                })
                    .then(response =>{
                        this.test = response.data;
                    })
                // console.log(price)
            }
            // {
                // axios.get('/increase', {
                //    params:{
                //        price: this.product.price
                //    }
                // })
                //     .then(response =>{
                //         this.test = response.data;
                //     })
            // },
        }
    }

</script>


<style scoped>

</style>