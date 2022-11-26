<template>
    <!-- <Header :auth="auth">

  </Header> -->
    <div class="projects-tamplate">
        <div class="projects-logo-unlock"><a href="#"><img src="/img/logo.JPG" width="100" height="40"></a></div>

        <div class="projects-side-area">
            <div class="side-menu">
                <div v-for="elem in menuElems" class="mini-icon">
                    <img :src="'/img/svg/'+elem.icon" width="14" height="14">
                    <a :href="elem.link" class="icon-passive"> {{elem.title}}</a>
                </div>
            </div>
        </div>
        <div class="project-profile">
            <div class="project-notification"><img src="/img/svg/notification.svg" width="20" height="20"></div>
            <a :href="route('account')" class="project-mini-profile">
                <div class="mini-profile-avatar">
                    <img :src="'/public/uploads/profiles/' + auth.user.photo" width="40" height="40">
                </div>
                <div class="mini-profile-text">
                    <p class="mini-profile-name">{{auth.user.username}}<br><a class="mini-profile-email"
                            href="#">{{auth.user.email}}</a></p>
                </div>
            </a>
        </div>
        <div class="projects-content">
            <slot />

        </div>

    </div>

</template>

<script>
    // import Header  from '../Header'

    export default {
        // components: {Header},
        props: {
            auth: Object,
            component: String,
        },
        mounted() {
            var componentName = this.$page.component
            var target = componentName.split("/")[1].toLowerCase()

            this.menuElems[target].icon = this.menuElems[target].icon.replace('passive', 'active')
            console.log(this.$page.component);
        },
        data() {
            return {
                menuElems: {
                    "homepage": {
                        title: "Главная",
                        link: route('homepage'),
                        icon: "icon-home-passive.svg",
                    },
                    "projects": {
                        title: "Проекты",
                        link: route('dashboard.projects'),
                        icon: "icon-project-passive.svg",
                    },
                }
            }
        },
    // if ($page.component.startWith('Dashboard/Projects'))
    name: "Layout"
    }

</script>
