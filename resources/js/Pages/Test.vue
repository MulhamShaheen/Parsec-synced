<template>
<div class="projects-tamplate">
        <div class="projects-logo-unlock"><a href="#"><img src="/img/logo.JPG" width="100" height="40"></a></div>

        <div class="projects-side-area">
            <div class="side-menu">
                <div class="mini-icon">
					<img src="/img/svg/icon-home-passive.svg" width="14" height="14">
					<a href="#" class="icon-passive"> Главная</a>
				</div>
                <div class="mini-icon">
					<img src="/img/svg/icon-project-passive.svg" width="14" height="14">
					<a href="#" class="icon-passive"> Проекты</a>
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
            <div class="project-mini-profile">
                <img class="mini-profile-avatar" src="/img/organizer-profile-avatar.png" width="40" height="40">
                <div class="mini-profile-text">
                    <span class="mini-profile-name">Спектр</span>
					<a class="mini-profile-email" href="#">spectrumw0w1@gmail.com</a>
                </div>
            </div>
        </div>
		<div class="projects-content">
			<div class="main-info-area">
				<img src="/img/svg/profile-avatar-organaizer.svg" width="170" height="170" class="profile-avatar">
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
				<p class="profile-name">Спектр</p>
				<div class="status-area">
					<p class="area-heading">Статус</p>
					<p class="status"><img src="/img/svg/status-ellipse.svg" width="10" height="10"> Активен</p>
				</div>
				<div class="profile-fullness">
					<p class="area-heading">Заполненность профиля</p>
				</div>
				<img src="/img/svg/edit.svg" class="edit" width="40" height="40">
			</div>

			<div class="about-us-area">
				<p class="area-heading">О нас</p>
				<p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro obcaecati adipisci rerum ullam a voluptates.</p>
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
