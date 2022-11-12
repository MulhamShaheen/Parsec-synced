<template>

  <div class="auth-logo-unlock">
      <a href="#"><img src="/img/logo.JPG" width="100" height="40"></a>
  </div>


    <!-- <div class="auth-container signin">
      <p> Уже есть аккаунт? <a href="login.html">Войти</a></p>
      </div> -->


          <transition name="page" mode="out-in" appear>
            <form @submit.prevent="postForm()">
              <div class="auth-container">
                <h1 class="auth-form-title">Вход <a href="" class="auth-form-nav">Регистрация</a></h1>
                <input name="username" id="username" v-model="form.username" hidden>
                <input name="password" id="password" v-model="form.password" hidden>
                <input name="email" id="email" v-model="form.email" hidden>

                <input class="auth-form-input" type="text" placeholder="Имя"  name="first-name" id="first-name" v-model="form.firstname" required>
                <input class="auth-form-input" type="text" placeholder="Фамилия"   name="last-name" id="last-name" v-model="form.lastname" required>
                <input class="auth-form-input" type="text" placeholder="Отчество (при наличии)" name="middle-name" id="middle-name" v-model="form.middlename" >
                <input class="auth-form-input" type="text" placeholder="Дата рождения"   name="birthdate" id="birthdate" v-model="form.birthdate" required>
                <input class="auth-form-input" type="text" placeholder="Телефон" name="phone" id="phone" v-model="form.phone" required>
                <button type="submit" class="main-submit">Далее</button>
              </div>
            </form>
          </transition>
              <div class="overflow-hidden shadow sm:rounded-md">
                <MyModal :modalId="'photo-model'" :modal-text="''" :modal-title="'Загрузка фотографии'">
                  <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                      Тут загрзить фото
                    </p>
                    <form @submit.prevent="postPhoto()">
                      <input type="file" name="photo" id="photo" @input="photoForm.photo = $event.target.files[0]">
                      <progress v-if="photoForm.progress" :value="photoForm.progress.percentage" max="100">
                        {{ photoForm.progress.percentage }}%
                      </progress>
                      <button type="submit">Submit</button>
                    </form>
                  </div>
                </MyModal>
              </div>
      <!-- <div class="flex justify-center">
        <Link
            as="button"
            type="button"
            :href="route('homepage')"
            :disabled="beforeNext()"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          Заверщить
        </Link>
      </div> -->

      <footer>
        <Link :href="route('account.info', 'employer')" class="auth-select-role" as="button">
            <transition name="page" mode="out-in" appear>
          <span class="auth-role-text" v-if=" $page.component === 'Auth/Info/Employer' " >
            Я оргинизатор
          </span>
        </transition >
        <transition name="page" mode="out-in" appear>
          <span class="auth-role-text" v-if=" $page.component === 'Auth/Info/Activist'" >
            Я участник
          </span>
          </transition >
        </Link>
      </footer>
      <!--  <pre>-->
      <!--    {{$page.props}}-->
      <!--    {{data}}-->
      <!--    {{form}}-->
      <!--  </pre>-->

</template>

<script>

import {useForm} from '@inertiajs/inertia-vue3'
import {Link} from '@inertiajs/inertia-vue3'

export default {
  layout: null,
  components:{
    Link
  },
  props: {
    user: Object,
    hasInfo: Object,
  },
  setup(props) {
    const form = useForm({
      firstname: props.hasInfo.firstname ?? null,
      lastname: props.hasInfo.lastname ?? null,
      middlename: props.hasInfo.middlename ?? null,
      about: props.hasInfo.about ?? null,
      phone: props.hasInfo.phone ?? null,
      birthdate: props.hasInfo.birthdate ?? null,
      username: null,
      password: null,
      email: null,
    })
    const  photoForm = useForm({
      photo: null,
    })
    return {form, photoForm}
  },
  mounted() {
    console.log(this.hasInfo)
    console.log(this.beforeNext())
  },
  methods: {
    postForm() {
      this.form.post('/account/info/personal')

      // this.form.transform((data) => ({
      //   ...data,
      //   username: this.user.name,
      //   password: this.user.password,
      //   email: this.user.email,
      // })).post('/account/info/personal')
    },
    postPhoto(){
      this.photoForm.post('/updateProfPicture')
    },
    beforeNext(){
      return this.hasInfo === false
    }
  },
  data() {
    return ({
      hasPersonal: false,
      hasProfile: false,
    })
  }
}
</script>
