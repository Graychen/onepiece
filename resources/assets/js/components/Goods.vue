<template>
<content>
  <div v-for="good in goods" :key="good"  class="col-xs-6 col-md-3">
              <a href="#" class="text-center bg-white">
                    <img :src="'storage/'+good.pic" :alt="good.name">
                          <h3>{{good.name}}</h3>
              </a>
  </div>
</content>
</template>

<script>
    export default {
        data(){
         return{
                goods:[]
         }
        },
        mounted(){
            this.getGoods();
        },
        methods:{
                getGoods(){
                        axios.get('http://localhost/api/goods')
                        .then(reponse=>{
                               this.goods=reponse.data.data;
                                })
                        .catch(reponse=>console.log(reponse.data));        
                }
        }


    }
</script>
