<template>
	<Head>
    	<title>{{ $page.props.title }} - My awesome app</title>
  	</Head>
	<div class="unlock-main-header">
		<a href="/">
			<img class="logo-unlock" src="/img/svg/unlock-logo.svg" alt="" width="100" height="42">
		</a>
		<div class="header-nav">
			<a href="#for-whom">Для кого</a>
			<a href="#about">О программе</a>
			<a href="#projects">Проекты</a>
			<a href="#partners">Партнеры</a>
		</div>
		<button type="submit" class="main-submit-white">Войти<img src="/img/svg/arrow-left-white.svg" class="submit-arrow-color" width="17" height="17"></button>
	</div>

	<div class="main-greeting">
		<div class="greeting-area">
				<span class="greeting-txt">Открой новый мир</span>
		 		<span class="greeting-txt purple">возможностей</span>
		</div>
		<div class="description-area">
			<div class="description">
				<img src="/img/svg/main-icon-user.svg" alt="" width="24" height="24">
				<div class="description-span">
					<span class="description-txt"> <span class="grey">с помощью</span> собственной</span>
					<span class="description-txt">собранной командой</span>
				</div>
			</div>
			<div class="description">
				<img src="/img/svg/main-icon-dollar.svg" alt="" width="24" height="24">
				<div class="description-span">
					<span class="description-txt"> <span class="grey">с помощью</span> проверенных</span>
					<span class="description-txt">инвесторов программы</span>
				</div>
			</div>
		</div>
		<Link class="main-submit" as="button" :href="route('register')">
			Зарегестрироваться <img src="/img/svg/arrow-left-black.svg" class="submit-arrow" width="17" height="17">
        </Link>
		<!-- <button class="main-submit">Зарегестрироваться <img src="/img/svg/arrow-left-black.svg" class="submit-arrow" width="17" height="17"></button> -->
		<img class="mini-project-card" src="/img/svg/mini-project-card.svg" alt="" width="342" height="75">
	</div>
	

	<div class="main-team-area">
		<div class="memojis-area">
			<img class="male-memojis" src="/img/svg/male-memojis.svg" alt="" width="282" height="282">
		</div>
		<div class="main-team-txt">
			<div class="main-team-header">
				<span class="">Набор команды</span>
				<span class="">с Unlock — простое</span>
				<span class="">и понятное занятие</span>
			</div>
			<div class="main-team-description">
				<span class="">Тебе нужно лишь однажды разместить проект, затем</span>
				<span class="">ты сможешь выбирать кандидатов в проектную команду</span>
				<span class="">или же искать их с помощью нашей ленты.</span>
			</div>
		</div>
	</div>

	<div id="for-whom" class="for-whom-area">
		<span class="header">Кому подойдет?</span>
		<table>
			<tr>
				<td class="card-1"><img class="tb-img" src="/img/svg/card-1.svg" alt="" width="528" height="196"></td>
				<td class="card-2"><img class="tb-img" src="/img/svg/card-2.svg" alt="" width="528" height="196"></td>
			</tr>
			<tr>
				<td class="card-3"><img class="tb-img" src="/img/svg/card-3.svg" alt="" width="528" height="196"></td>
				<td class="card-4"><img class="tb-img" src="/img/svg/card-4.svg" alt="" width="528" height="196"></td>
			</tr>
		</table>
		
	</div>

	<div id="about" class="main-idea-area">
		<div class="main-idea-img">
			<span>Основная идея:</span>
			<img class="idea-img" src="/img/svg/main-idea.svg" alt="" width="217" height="217">
		</div>
		<div class="main-idea-txt">
			<span class="purple">Придумай стартап,</span>
			<span class="grey">опиши идею,</span>
			<span class="grey">заполняй резюме,</span>
			<span class="grey">а наш проект поможет</span>
			<span class="grey">тебе собрать команду</span>
		</div>
	</div>

	<div id="projects" class="in-work-area">
		<span class="header">Проекты в работе</span>
		<div class="group-project">
			<div class="p1">
				<div class="project-card"> 
					<div class="project-card-header"></div>
					<div class="project-card-body">
						
						<div  class="card-body-header"><h4>Проект №1</h4><span class="project-deadline-date">до 12.2022</span></div>
						<p class="card-body-p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci doloremque similique eum nostrum quo cum voluptates, blanditiis laborum pariatur saepe optio, ab impedit molestias maiores ipsum autem reprehenderit veritatis aliquam nemo esse, architecto fuga ducimus. Soluta dignissimos sed nisi. Doloribus animi placeat eum provident eos mollitia laudantium expedita nihil incidunt sunt consequatur tempore cumque facilis, saepe alias nam doloremque repudiandae iste iusto modi. Voluptates veniam repellendus voluptatem ratione temporibus dicta.</p>
						
					</div>
				</div>
				<div class="project-card"> 
					<div class="project-card-header"></div>
					<div class="project-card-body">
						
						<div  class="card-body-header"><h4>Проект №3</h4><span class="project-deadline-date">до 12.2022</span></div>
						<p class="card-body-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, delectus cumque! Asperiores molestias adipisci eligendi aliquam, corrupti quod ullam, quos quasi consectetur id nulla alias quibusdam beatae optio? Hic ducimus possimus est atque incidunt quaerat ratione quas ab sequi quidem optio modi reiciendis officia facilis voluptatum in voluptas pariatur placeat mollitia, sint, minus odio explicabo nostrum. Cum alias ut, nam eos saepe, rem, provident animi reprehenderit voluptatibus laboriosam nostrum esse.</p>
						
					</div>
				</div>
			</div>
			<div class="p2">
				<div class="project-card"> 
					<div class="project-card-header"></div>
					<div class="project-card-body">
						
						<div  class="card-body-header"><h4>Проект №3</h4><span class="project-deadline-date">до 12.2022</span></div>
						<p class="card-body-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, corrupti. Deleniti, delectus, facere praesentium molestias cum labore sed possimus facilis totam aut ipsa. Sequi cumque odit explicabo incidunt fugiat accusamus eaque velit, quo recusandae corrupti iure! In vel harum enim voluptate alias ab cum eius ducimus quas expedita, possimus, sapiente facere sed odit, ratione doloremque eligendi quos quaerat tempore tempora et. Earum exercitationem reiciendis tenetur dignissimos dolor, reprehenderit tempore similique?</p>
						
					</div>
				</div>
				<div class="project-card"> 
					<div class="project-card-header"></div>
					<div class="project-card-body">
						
						<div  class="card-body-header"><h4>Проект №4</h4><span class="project-deadline-date">до 12.2022</span></div>
						<p class="card-body-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis nam velit odit obcaecati minima accusantium, accusamus inventore minus amet totam laboriosam reiciendis officia temporibus quia culpa fugiat ratione magnam iusto. Commodi, aliquid molestiae. Mollitia laborum laudantium obcaecati qui assumenda est nulla nisi quas vel voluptas consequatur optio dolorem a deleniti dolores, quae totam provident accusantium fugit temporibus! Consequuntur perspiciatis quasi atque voluptas porro hic deserunt sint. Perspiciatis quaerat explicabo id?</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="partners" class="group-partner-area">
		<div class="group-partner-header">
			<div class="group-partner-txt">
				<span class="header">Партнеры проекта</span>
				<span class="header">которые<span class="purple"> помогли</span></span>
			</div>
			<p class="partner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et tempus felis. Proin et tempus felis. Proin et tempus felis. </p>
		</div>
	</div>

	<div class="faq-area">
		<span class="header">Вопрос-ответ</span>
		<div class="faq-content">
			<div class="faq-question">
			  <input id="q1" type="checkbox" class="panel">
			  <div class="plus purple">+</div>
			  <label for="q1" class="panel-title">1. Сколько человек можно в команду?</label>
			  <div class="panel-content">Lorem ipsum dolor sit amet.</div>
			</div>
			
			<div class="faq-question">
				<input id="q2" type="checkbox" class="panel">
				<div class="plus purple">+</div>
				<label for="q2" class="panel-title">2. Смогу ли я выбирать кандидатов в проектную команду?</label>
				<div class="panel-content">Lorem ipsum dolor sit amet.</div>
			  </div>
			

			<div class="faq-question">
				<input id="q3" type="checkbox" class="panel">
				<div class="plus purple">+</div>
				<label for="q3" class="panel-title">3. Lorem ipsum dolor sit amet.</label>
				<div class="panel-content">Lorem ipsum dolor sit amet.</div>
			  </div>
			
			  <div class="faq-question">
				<input id="q4" type="checkbox" class="panel">
				<div class="plus purple">+</div>
				<label for="q4" class="panel-title">4. Lorem ipsum dolor sit amet.</label>
				<div class="panel-content">Lorem ipsum dolor sit amet.</div>
			  </div>

			  <div class="faq-question">
				<input id="q5" type="checkbox" class="panel">
				<div class="plus purple">+</div>
				<label for="q5" class="panel-title">5. Lorem ipsum dolor sit amet.</label>
				<div class="panel-content">Lorem ipsum dolor sit amet.</div>
			  </div>
		  </div>
	</div>

	<div class="end-area">
		<Link class="main-submit VK" as="button" href="http://vk.com/unlock_shift">
			VK <img src="/img/svg/arrow-left-black.svg" class="submit-arrow" width="17" height="17">
        </Link>
		<Link class="main-submit reg-button" as="button" :href="route('register')">
			Зарегестрироваться <img src="/img/svg/arrow-left-black.svg" class="submit-arrow" width="17" height="17">
        </Link>
	</div>
</template>
<script>
    import {
        Head
    } from '@inertiajs/inertia-vue3'
	import appCSS from '/css/unlock-main.css';

    export default {
        components: {
            Head
        },
        layout: null,
    }

</script>
