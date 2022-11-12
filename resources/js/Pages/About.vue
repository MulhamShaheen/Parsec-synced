<template>
<div class="auth-logo-unlock">
    <a href="#"><img src="img/logo.JPG" width="100" height="40"></a>
</div>

<form action="action_page.php">
  <div class="auth-container">
    <h1 class="auth-form-title">Вход <a href="" class="auth-form-nav">Регистрация</a></h1>
    <input class="auth-form-input" type="text" placeholder="Имя"  name="name" required>
    <input class="auth-form-input" type="text" placeholder="Фамилия"  name="surname" required>
    <input class="auth-form-input" type="text" placeholder="Отчество (при наличии)" name="patronymic">
    <input class="auth-form-input" type="text" placeholder="Дата рождения"  name="date" required>
    <input class="auth-form-input" type="text" placeholder="Телефон" name="tel" required>
    <button type="submit" class="main-submit">Далее</button>
  </div>
  <!-- <div class="auth-container signin">
    <p> Уже есть аккаунт? <a href="login.html">Войти</a></p>
    </div> -->
  </form>
  <footer>
    <div class="auth-select-role">
      Я акстивист
    </div>
  </footer>
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
