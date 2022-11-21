<template>
  <div class="projects-tamplate">
  <div class="projects-logo-unlock"><a href="#"><img src="img/logo.JPG" width="100" height="40"></a></div>

  <div class="projects-side-area">
    <div class="side-menu">
      <div class="mini-icon"><img src="img/svg/icon-home-passive.svg" width="14" height="14"><a href="#" class="icon-passive"> Главная</a></div>
      <div class="mini-icon"><img src="img/svg/icon-project-active.svg" width="14" height="14"><a href="#" class="icon-active"> Проекты</a></div>
      <div class="mini-icon"><img src="img/svg/icon-team-passive.svg" width="14" height="14"><a href="#" class="icon-passive"> Команда</a></div>
      <div class="exit-icon"><img src="img/svg/icon-exit.svg"  width="16" height="16"><a href="#" class="icon-passive">Выход</a></div>
    </div>
  </div>
	<div class="project-profile">
		<div class="project-notification"><img src="img/svg/notification.svg" width="20" height="20"></div>
		<div class="project-mini-profile">
			<img class="mini-profile-avatar" src="img/organizer-profile-avatar.png" width="40" height="40">
			<div class="mini-profile-text">
				<p class="mini-profile-name">Спектр<br><a class="mini-profile-email" href="#">spectrumw0w1@gmail.com</a></p>
			</div>
		</div>
	</div>



<div class="projects-content">

	<div class="background-rectangle">
		<div class="search-bar-line">
			<input id="search"  name="search" class="search" type="search" placeholder="Поиск">
			<button type="submit" class="main-submit-white">Мои проекты<img src="img/svg/arrow-left-white.svg" class="submit-arrow-color" width="17" height="17"></button>
			<button type="submit" class="main-submit">Создать проект<img src="img/svg/arrow-left-black.svg" class="submit-arrow" width="17" height="17"></button>

		</div>
		<div class="filters">
			<a href="#" class="icon-active">по релевантности</a>
			<a href="#" class="icon-passive">по дате</a>
			<a href="#" class="icon-passive">по названию</a>
		</div>
		<div class="container-projects">
			<div class="project-card">
				<div class="project-card-header"></div>
				<div class="project-card-body">

					<div  class="card-body-header"><h4>Проект №1</h4><span class="project-deadline-date">до 12.2022</span></div>
					<p class="card-body-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et tempus felis. Proin nunc sapien, maximus vel vulputate et, mollis at felis. In in sem velit.</p>

				</div>
			</div>
			<div class="project-card">
				<div class="project-card-header"></div>
				<div class="project-card-body">

					<div class="card-body-header"><h4>Проект №2</h4><span class="project-deadline-date">до 12.2022</span></div>
					<p class="card-body-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et tempus felis. Proin nunc sapien, maximus vel vulputate et, mollis at felis. In in sem velit.</p>

				</div>
			</div>
			<div class="project-card">
				<div class="project-card-header"></div>
				<div class="project-card-body">

					<div  class="card-body-header">
						<h4>Проект №3 </h4><span class="project-deadline-date">до 12.2022</span>
					</div>

					<p class="card-body-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et tempus felis. Proin nunc sapien, maximus vel vulputate et, mollis at felis. In in sem velit.</p>

				</div>
			</div>
		</div>

	</div>
</div>

</div>

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
