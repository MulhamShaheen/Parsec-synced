<template>
  <div class="search-bar-line">
        <input id="search" name="search" class="search" type="search" placeholder="Поиск">
        <div class="search-bar-quickaccess">
            <button type="submit" class="search-bar-button-white">
                <span class="w-full">
                    Мои проекты
                </span>
                <img src="/img/svg/arrow-left-white.svg" class="submit-arrow-color" width="17" height="17">
            </button>
            <button type="submit" class="search-bar-button">
                <span class="w-full">Создать проект</span>
                <img src="/img/svg/arrow-left-black.svg" class="submit-arrow" width="17" height="17"></button>
        </div>
    </div>
    <div class="filters">
        <a href="#" class="icon-active">по релевантности</a>
        <a href="#" class="icon-passive">по дате</a>
        <a href="#" class="icon-passive">по названию</a>
    </div>
    <div class="container-projects">
        <ProjectCard v-for="project in projects" :id="project.id" :title="project.title" :description="project.description" :icon="project.icon" :employer="project.employer_id">
        </ProjectCard>
    </div>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3'
import ProjectCard from "../../../Shared/Components/ProjectCard";


export default {
  name: "Dashboard/Projects/Employer",
  components: {ProjectCard},
  props: {
    auth: Object,
    projects: Array
  },

}
</script>

<style scoped>

</style>
