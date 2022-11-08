<template>
  <div class="ml-4 bg-gray-100 rounded min-h-full p-4">
    <div v-if="!projects.length">
      <h1>
        There is no projects
      </h1>
    </div>
    <div v-else>
      <div class="m-2" v-for="project in projects">
        <ProjectCard :id="project.id" :title="project.title" :description="project.description" :icon="project.icon" :employer="project.employer_id">

        </ProjectCard>
      </div>
    </div>
  </div>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3'
import ProjectCard from "../../../Shared/Components/ProjectCard";


export default {
  name: "Dashboard/Projects/Activist",
  components: {ProjectCard},
  props: {
    auth: Object,
    projects: Array
  },

}
</script>

<style scoped>

</style>
