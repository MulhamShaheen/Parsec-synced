<template>
      <InfoEditor :title="'description'" :value="info.description" :type="'textarea'" :url="'/account/update'"></InfoEditor>

  <div id="" class="edit-container">

  </div>

</template>

<script>
  import InfoEditor from "../../../../Shared/Components/InfoEditor"
  export default {

    name: "Employer",
    component: "Profile/Edit/Employer",
    components:{InfoEditor},
    props:{
      info:Object,
      auth:Object,
    }
  }
</script>

<style scoped>

</style>