<template>
<div class="auth-logo-unlock">
    <a href="#"><img src="img/logo.JPG" width="100" height="40"></a>
</div>
<form action="">
    <div class="auth-container">
        <h1 class="auth-form-title">Регистрация <a href="" class="auth-form-nav">Вход</a></h1>
        <input id="username"  name="username" required class="auth-form-input" type="text" placeholder="Логин">

        <input id="email"  name="email" autocomplete="email" required class="auth-form-input" type="text" placeholder="Электронная почта">

        <input id="password" name="password" type="password"  required class="auth-form-input" placeholder="Пароль">

        <input id="re-password" name="re-password" type="password"  required class="auth-form-input" placeholder="Подтвердите пароль">


        <div class="auth-approv">
          <label class="check-container">
            <input type="checkbox" id="agree" value="yes" checked="checked">
            <span class="checkmark"></span>
          </label>
            <div class="auth-approv-text">Даю <a href="#">Согласие</a> на обработку персональных данных и получение рассылки</div>

        </div>

        <button type="submit" class="main-submit">Зарегистрироваться</button>
        <div class="auth-line-container">
          <p class="auth-line"><span>или</span></p>
        </div>
        <div class="auth-social-container">
            <a href="#" class="vk"><img src="img/вк.JPG" width="32" height="32"></a>
            <a href="#" class="google"><img src="img/гугл.JPG" width="32" height="32"></a>
        </div>
    </div>

</form>
</template>
<script>
import {
    Head
} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head
    },
    layout: null,
}
</script>
