<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">登陆</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" >

                        <div class="form-group">
                            <label for="username" class="col-md-4 control-label">用户</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username" value="" required autofocus>

                                    <span class="help-block">
                                    </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> 记住我
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登陆
                                </button>

                                <a class="btn btn-link">
                                    忘记密码?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data(){
         return{
                user:{
                        name:'',
                        password:''
                     }
         }
        },
        mounted(){
            this.getGoods();
        },
        methods:{
                getGoods(){
                        axios.post('http://localhost/api/login')
                        .then(reponse=>{
                               this.goods=reponse.data.data;
                                })
                        .catch(reponse=>console.log(reponse.data));        
                }
        }


    }
</script>
