<template>
  <div class="profile-content">
    <div class="main-info-area">
      <img :src="'/uploads/profiles/' + auth.user.photo" width="170" height="170" class="profile-avatar">
      <button type="submit" class="main-submit">
        <span class="w-full">Обновить фотографию</span>	 
      </button>
      <div class="main-info">
        <p><b>Основная информация</b></p>
        <p class="grey-text ID">Уникальный ID: 000001</p>
        <p class="telephone-number"><img src="/img/svg/mobile-button.svg" width="20" height="20"> +7-900-800-76-54</p>
        <p class="regestration-date grey-text">Дата регистрации: 10/13/2022</p>
      </div>
    </div>

    <div class="activity-area">
      <p class="profile-name">{{ auth.user.username }}</p>
      <div class="status-area">
        <p class="area-heading">Статус</p>
        <p class="status"><img src="/img/svg/status-ellipse.svg" width="10" height="10"> Активен</p>
      </div>
      <div class="profile-fullness">
        <p class="area-heading">Заполненность профиля</p>
      </div>
      <Link class="edit" href="/account/edit" method="get">
        <img src="/img/svg/edit.svg" width="40" height="40">
      </Link>
    </div>

    <div class="about-us-area">
      <p class="area-heading">О нас</p>
      <p class="description">{{ info.info.description }}</p>
    </div>

    <div class="photo-gallery-area">
      <p class="area-heading">Фотогалерея <br></p>
      <div class="photos">
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
      </div>
    </div>
  </div>
</template>

<script>

export default {

  name: "Employer",
  component: "Profile/Employer",
  props:{
    info:Array,
    auth:Object,
  }
}
</script>

<style scoped>

</style>