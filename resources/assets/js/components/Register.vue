<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">注册</div>
                <div class="panel-body">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">用户名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" v-model="user.name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="col-md-4 control-label">手机号</label>

                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control" name="mobile" value="" v-model="user.mobile">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" v-model="user.password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">确认密码</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" v-model="user.password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" @click.native="register" :disable="!canSubmit">
                                    注册
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import config from '../config.js'
    export default {
        data(){
         return{
                user:{
                        name:'',
                        mobile:'',
                        password:'',
                        password_confirmation:''
                     }
         }
        },
        computed: {
                canSubmit: function () {
                        return this.user.password === this.user.password_confirmation;
                }
          },
        methods:{
                register(){
                        axios.post('register',this.user).then(reponse=>{
                                console.log(reponse);
                        },reponse=>{
                                console.log(reponse);
                        });
                }
        }


    }
</script>
