<template>
  <!-- <Header :auth="auth">

  </Header> -->
  <div class="projects-tamplate">
        <div class="projects-logo-unlock"><a href="#"><img src="/img/logo.JPG" width="100" height="40"></a></div>

        <div class="projects-side-area">
            <div class="side-menu">
                <div class="mini-icon">
					<img src="/img/svg/icon-home-passive.svg" width="14" height="14">
					<a href="#" class="icon-passive"> Главная</a>
				</div>
                <div class="mini-icon">
					<img src="/img/svg/icon-project-active.svg" width="14" height="14">
					<a href="#" class="icon-active"> Проекты</a>
				</div>
                <div class="mini-icon">
					<img src="/img/svg/icon-team-passive.svg" width="14" height="14">
					<a href="#" class="icon-passive"> Команда</a>
				</div>
                <div class="exit-icon">
					<img src="/img/svg/icon-exit.svg" width="16" height="16">
					<a href="#" class="icon-passive">Выход</a>
				</div>
            </div>
        </div>
        <div class="project-profile">
            <div class="project-notification"><img src="/img/svg/notification.svg" width="20" height="20"></div>
            <a :href="route('account')" class="project-mini-profile">
              <div class="mini-profile-avatar">
                <img  :src="'/public/uploads/profiles/' + auth.user.photo" width="40" height="40">
              </div>
                <div class="mini-profile-text">
                    <p class="mini-profile-name">{{auth.user.username}}<br><a class="mini-profile-email"
                            href="#">{{auth.user.email}}</a></p>
                </div>
              </a>
        </div>
        <div class="projects-content">
          <slot/>

        </div>

    </div>

</template>

<script>
// import Header  from '../Header'

export default {
  // components: {Header},
  props:{
    auth: Object,
  },
  name: "Layout"
}
</script>
