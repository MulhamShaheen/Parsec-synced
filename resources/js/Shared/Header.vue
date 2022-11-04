<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div class="relative bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
      <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                 alt=""/>
          </a>
        </div>
        <div  as="nav" class="space-x-10 md:flex">
          <a v-for="element in navElements" :href="element.link" class="text-base font-medium text-gray-500 hover:text-gray-900">{{element.name}}</a>
        </div>
        <div class="items-center justify-end md:flex md:flex-1 lg:w-0">
          <div v-if="auth">
            <a href="#"
               class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"
                data-modal-toggle="logout-model">Выход</a>
            <a href="/account"
               class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Личный
              кабинет</a>

            <MyModal :modalId="'logout-model'" :modal-text="''" :modal-title="'Выход из системы'">
              <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                  Выйти из аккаунта?
                </p>

              </div>
              <div
                  class="flex justify-center items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <Link data-modal-toggle="logout-model" href="/logout" as="button"
                      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Выходить
                </Link>
                <Link data-modal-toggle="logout-model" href="#" as="button"
                      class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                  Отмена
                </Link>
              </div>
            </MyModal>
          </div>

          <div v-else>
            <a href="/login"
               class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Вход</a>
            <a href="/register"
               class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Регестрация</a>

          </div>
        </div>
      </div>
    </div>

  </div>
</template>
<script>
import MyModal from "./Components/MyModal";

export default {
  props: {
    auth: Object,
  },
  methods:{

  },
  data(){
    return {
      navElements: [
        {
          name: "Проекты",
          link: route('dashboard.projects'),
        },
      ]
    }

  },
  mounted(){
    // console.log(this.auth)
    if(this.auth.user.role == "employer"){
      this.navElements.push( {
        name: "Активисты",
        link: "#",
      })
    }
  },
  components:{
    MyModal
  }
}
</script>
