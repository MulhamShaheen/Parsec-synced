<template>

    <div class="search-bar-line">
        <input id="search" name="search" class="search" type="search" placeholder="Поиск">
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
    import {
        useForm
    } from '@inertiajs/inertia-vue3'
    import ProjectCard from "../../../Shared/Components/ProjectCard";


    export default {
        name: "Dashboard/Projects/Activist",
        components: {
            ProjectCard
        },
        props: {
            auth: Object,
            projects: Array
        },

    }

</script>

<style scoped>

</style>
