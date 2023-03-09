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
            v-on:click="updateData((['username-editor', 'title-editor']))">
              <img src="/img/svg/pencel-purple.svg"  width="38" height="38">
          </button>
          <button  style="none" class="edit-pencil"  
            v-on:click="toggleEditing((['username-editor', 'title-editor']))">
              <img src="/img/svg/pencel-purple.svg"  width="38" height="38">
          </button>
        </div>
      </div>
      <div class="edit-container">
        <span>Логин: </span>
        <InfoEditor ref="username-editor" :title="'name'" :value="auth.user.username" :type="'string'" :url="'/account/update'"
          :singleMode="false" :showLabel="false" :userData="true"/>  
        <span>Название: </span>
        <InfoEditor ref="title-editor" :title="'title'" :value="info.title" :type="'string'" :url="'/account/update'" 
          :singleMode="false" :showLabel="false"/>        
      </div>
    </div>

    <div class="edit-area">
      <div class="flex justify-between content-between items-center w-full">
        <h2 class=" font-bold">О нас</h2>        
      </div>
        <InfoEditor ref="description-editor" :title="'description'" :value="info.description" :type="'text'" :url="'/account/update'"
          :singleMode="true" :showLabel="false" :userData="false"/>  
    </div>


    <div class="photo-gallery-area">
      <div class="flex justify-between w-full pr-4 pt-4">
        <span class="area-heading">Фотогалерея</span>
        <button v-if="gallery.length" style="none" class="edit-pencil"  
              v-on:click="toggleEditing((['username-editor', 'title-editor']))">
                <img src="/img/svg/pencel-purple.svg"  width="38" height="38">
        </button>
      </div>
      <div v-if="gallery.length" class="photos-edit">
        <div class="photo-edit"></div>
        <div class="photo-edit"></div>
        <div class="photo-edit"></div>
        <div class="photo-edit"></div>
      </div>
      <div v-else class="photos-empty">
        <div>
          <form @submit.prevent="submit">
            <input class="w-full h-full" type="file" @input="galleryForm.image = $event.target.files[0]" />
            <progress v-if="galleryForm.progress" :value="galleryForm.progress.percentage" max="100">
              {{ galleryForm.progress.percentage }}%
            </progress>
          </form>
        </div>
        <!-- <button v-if="!galleryEditing"  class="bg-indigo-700 text-white p-2 rounded-lg"  
              v-on:click="toggleGalleryEditing">
              Добавить фотографии 
        </button> -->
      </div>
    </div>
  </div>

</template>

<script>
  import { useForm } from '@inertiajs/inertia-vue3'
  import InfoEditor from "../../../../Shared/Components/InfoEditor"


  export default {

    name: "Employer",
    component: "Profile/Edit/Employer",
    components:{InfoEditor},
    props:{
      info:Object,
      auth:Object,
      gallery: Array,
    },
    setup(preps){
      const galleryForm = useForm({
        name: null,
        image: null,
      })
      return {
          galleryForm
      }
    },
    methods:{
      toggleGalleryEditing(){
        this.galleryEditing = !this.galleryEditing
      },
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
        galleryEditing: false,
      }
    }
  }
</script>

<style scoped>

</style>