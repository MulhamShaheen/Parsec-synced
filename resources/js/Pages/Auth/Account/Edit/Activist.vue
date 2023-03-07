<template>
  <div class="profile-content">
    <div class="main-info-area">
      <img :src="'/uploads/profiles/' + auth.user.photo" width="170" height="170" class="profile-avatar">
      <button type="submit" class="main-submit">
        <span class="w-full">Обновить фотографию</span>	 
      </button>
      
    </div>
    <div class="edit-area">
      <div class="flex justify-between content-between items-center w-full">
        <h2 class=" font-bold">Данные пользевателя</h2>
        <div class="flex gap-2">
          <button  style="none" class='edit-pencil-active' 
            v-on:click="updateData((['username-editor', 'firstname-editor', 'lastname-editor', 'middlename-editor']))">
              <img src="/img/svg/pencel-purple.svg"  width="38" height="38">
          </button>
          <button  style="none" class="edit-pencil"  
            v-on:click="toggleEditing((['username-editor', 'firstname-editor', 'lastname-editor', 'middlename-editor']))">
              <img src="/img/svg/pencel-purple.svg"  width="38" height="38">
          </button>
        </div>
      </div>
      <div class="edit-container">
        <span>Логин: </span>
        <InfoEditor ref="username-editor" :title="'name'" :value="auth.user.username" :type="'string'" :url="'/account/update'"
          :singleMode="false" :showLabel="false" :userData="true"/>  
        <span>Имя: </span>
        <InfoEditor ref="firstname-editor" :title="'firstname'" :value="info.firstname" :type="'string'" :url="'/account/update'" 
          :singleMode="false" :showLabel="false"/>
        <span>Фамилия: </span>
        <InfoEditor ref="lastname-editor" :title="'lastname'" :value="info.lastname" :type="'string'" :url="'/account/update'" 
          :singleMode="false" :showLabel="false"/>
        <span>Отчество: </span>
        <InfoEditor ref="middlename-editor" :title="'middlename'" :value="info.middlename" :type="'string'" :url="'/account/update'" 
          :singleMode="false" :showLabel="false"/>        
      </div>
    </div>
  </div>

  <InfoEditor :title="'description'" :value="info.description" :type="'text'" :url="'/account/update'" :singleMode="true">
  </InfoEditor>

  <div class="edit-container mt-2">
    <InfoEditor ref="name-editor" :title="'name'" :value="auth.user.username" :type="'string'" :url="'/account/update'" 
    :singleMode="false" :userData="true"/>
    <button v-on:click="(['name-editor'])">
      send
    </button>
  </div>

</template>

<script>
  import InfoEditor from "../../../../Shared/Components/InfoEditor"
  export default {

    name: "Activist",
    component: "Profile/Edit/Activist",
    components:{InfoEditor},
    props:{
      info:Object,
      auth:Object,
    },
    methods:{
      toggleEditing(refs){
        refs.forEach(ref => {
          console.log(this.$refs[ref])

          this.$refs[ref].toggleEditing()
        });
      },
      updateData(refs){
        refs.forEach(ref => {
          console.log("updated: ", this.$refs[ref])

          this.$refs[ref].updateData()
        });
      }
    },
    data(){
      return{
        
      }
    }
  }
</script>

<style scoped>

</style>