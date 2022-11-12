<template>

  <div class="auth-logo-unlock">
      <a href="#"><img src="/img/logo.JPG" width="100" height="40"></a>
  </div>

  <!-- <div v-if="$page.props.auth.user.role === null"  class="flex flex-col content-center items-center w-full rounded-lg bg-gray-100 p-5">
    <ul class="flex flex-wrap text-l font-medium text-center text-gray-500 dark:text-gray-400">
      <li class="mr-2">
        <Link :href="route('account.info', 'activist')" class="inline-block py-3 px-4 rounded-lg"
              :class="[ $page.component === 'Auth/Info/Activist' ? 'bg-indigo-600 hover:bg-indigo-700 text-white':'text-gray-800 bg-gray-400 hover:bg-gray-600 '  ]">
          <span>Активист</span>
        </Link>
      </li>
      <li class="mr-2">
        <Link :href="route('account.info', 'employer')" class="inline-block py-3 px-4 rounded-lg"
              :class="[ $page.component === 'Auth/Info/Employer' ? 'bg-indigo-600 hover:bg-indigo-700 text-white':'text-gray-800 bg-gray-400 hover:bg-gray-600 '  ]">
          <span>Организации</span>
        </Link>
      </li>
    </ul>
  </div>
  <div class="auth-logo-unlock">
      <a href="#"><img src="/img/logo.JPG" width="100" height="40"></a>
  </div> -->


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

                <input class="auth-form-input" type="text" placeholder="Название организации"  name="title" id="title" v-model="form.title" required>
                <input class="auth-form-input" type="text-area" placeholder="Краткое писание организации" name="description" id="description" v-model="form.description" required>
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

        <Link :href="route('account.info', 'activist')" class="auth-select-role" as="button">
<transition name="page" mode="out-in" appear>
          <span class="auth-role-text" v-if=" $page.component === 'Auth/Info/Employer' " >

            Я оргинизатор


          </span>
          </transition>
          <transition name="page" mode="out-in" appear>
          <span class="auth-role-text" v-if=" $page.component === 'Auth/Info/Activist'" >
            Я участник

          </span>
        </transition>
        </Link>

      </footer>
      <!--  <pre>-->
      <!--    {{$page.props}}-->
      <!--    {{data}}-->
      <!--    {{form}}-->
      <!--  </pre>-->


</template>
<style>
.page-enter-active {
  transition: all 0.3s ease-out;
}

.page-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.page-enter-from,
.page-leave-to {
  transform: translateX(20px);
  opacity: 0;
}
</style>
<script>

import {useForm} from '@inertiajs/inertia-vue3'
import {Link} from '@inertiajs/inertia-vue3'

export default {
  layout: null,
  components: {
    Link,

  },
  props: {
    hasInfo: Object,
  },
  setup(props) {
    const form = useForm({
      title: props.hasInfo.title ?? null,
      description: props.hasInfo.description ?? null,
      username: null,
      password: null,
      email: null,
    })

    const photoForm = useForm({
      photo: null,
    })
    return {form,photoForm}
  },
  mounted() {
    console.log(this.hasInfo)
    console.log(this.beforeNext())
  },
  methods: {
    postForm() {
      this.form.post('/account/info/employer')

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
    beforeNext() {
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
