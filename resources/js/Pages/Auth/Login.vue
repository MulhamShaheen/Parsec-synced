<template>
  <div class="auth-logo-unlock">
    <a href="#"><img src="img/logo.JPG" width="100" height="40"></a>
  </div>
	<form @submit.prevent="form.post('/login')">
		<div class="auth-container">
			<h1 class="auth-form-title">Вход <a href="" class="auth-form-nav">Регистрация</a></h1>
			<input id="email-address" v-model="form.email" name="email" autocomplete="email" required
        class="auth-form-input" type="text" placeholder="Логин" >
        <div class="auth-form-input-error" v-if="errors">{{errors.email.toString()}}</div>
			<input id="password" name="password" type="password" v-model="form.password" autocomplete="current-password" required
        class="auth-form-input" placeholder="Пароль" >

			<button :disabled="form.processing" type="submit" class="main-submit">Войти</button>
      <div class="auth-line-container">
        <p class="auth-line"><span>или</span></p>
      </div>
			<div class="auth-social-container">
				<a href="#" class="auth-vk"><img src="img/вк.JPG" width="32" height="32"></a>
				<a href="#" class="auth-google"><img src="img/гугл.JPG" width="32" height="32"></a>
			</div>
			<a href="#" class="auth-forget-pass">Забыли пароль?</a>
		</div>

		<!--<div class="container signin">
			<p> Еще нет аккаунта? <a href="reg1.html">Зарегистрироваться</a></p>
		  </div>-->
	  </form>

</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3'

export default {
  layout : null,
  props:{
    errors:Object,
  },
  setup(props) {
    const form = useForm({
      email: null,
      password: null,
      remember: false,
    })



    return {form}
  },
  methods:{
    postForm(){
      this.form.post('/login')
    }
  },
}
</script>
