<template>
<content>
  <div v-for="good in goods" :key=""  class="col-xs-6 col-md-3">
      <a href="#" class="text-center bg-white">
                  <h3 >{{good.name}}</h3>
      </a>
  </div>
</content>
</template>

<script>
    export default {
        data(){
         return{
                goods:[
                ]
         }
        },
        mounted(){
            this.getGoods();
        },
        methods:{
                getGoods(goods){
                        axios.get('http://localhost/api/goods')
                        .then(reponse=>console.log(reponse.data))
                        .catch(reponse=>console.log(reponse.data));        
                }
        }


    }
</script>
