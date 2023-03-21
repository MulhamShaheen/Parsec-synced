<template>

  <div class="profile-content">
    <div class="user-area">
      <img :src="'/uploads/profiles/' + auth.user.photo" width="170" height="170" class="profile-avatar">
      <button type="submit" class="main-submit">
        <span class="w-full">Обновить фотографию</span>	 
      </button>
      <div class="main-info">
        <p><b>Основная информация</b></p>
        <p class="grey-text ID">Уникальный ID: 000001</p>
        <p class="telephone-number"><img src="/img/svg/mobile-button.svg" width="20" height="20">{{ info.info.phone }}</p>
        <p class="regestration-date grey-text">Дата регистрации: {{ auth.user.created_at }}</p>
      </div>
    </div>
    <div class="main-info-area">
      <div class="activity-area">
        <p class="profile-name">{{ info.info.firstname + " " + info.info.lastname}}</p>
        <div class="status-area">
          <div>
            <span class="area-heading">Статус</span>
            <p class="status"><img src="/img/svg/status-ellipse.svg" width="10" height="10"> Активен</p>
          </div>
          <div class="profile-fullness">
            <p class="area-heading">Заполненность профиля</p>
          </div>
          <Link class="edit" href="/account/edit" method="get">
            <img src="/img/svg/edit.svg" width="40" height="40">
          </Link>
        </div>
      </div>
      <div class="about-us-area">
          <p class="area-heading">О нас</p>
          <p class="description">{{  }}</p>
      </div>
      <div class="photo-gallery-area">
          
      </div>
    </div>

    
  </div>


</template>

<script>
export default {
  name: "Activist",
  component: "Profile/Employer",

  props:{
    auth:Object,
    info: Object,
  }
}
</script>

<style scoped>

</style>