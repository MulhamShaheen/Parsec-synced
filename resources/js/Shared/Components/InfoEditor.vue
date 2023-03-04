<template>
    <div id="" class="edit-container">
        <p><b>{{ title }}</b></p>
        <div v-if="editing">
            <form @submit.prevent="form.post(url)">
                <input v-if="editing" :type="editingField" v-model="form.value" name="{{ title }}">
    
                <div class="flex gap-4" >
                    <button type="submit" :disabled="form.processing" class="bg-blue-200 rounded-lg p-2" >
                        save
                    </button>
                    
                    <button  class="bg-blue-100 rounded-lg p-2 text-gray-600 border-2" v-on:click="toggleEditing">
                        cancle
                    </button>
                </div>
            </form>
        </div>
        <div v-else>
            <div>
                {{ value }}
            </div>
            <button class="bg-blue-200 rounded-lg p-2" v-on:click="toggleEditing">
                edit
            </button>
        </div>
        
    </div>
    

</template>

<script>
import { popScopeId } from 'vue'
import { useForm } from '@inertiajs/inertia-vue3'
    export default {
        name: "InfoEditor",
        props: {
            title: String,
            value: String,
            type: String,
            url: String,
        },
        setup(props) {
            var editingField = "text"
            switch (props.type) {
                case "string":
                    editingField = "text"
                    break
                case "text":
                editingField = "textarea"
                    break

            }

            const form = useForm({
                title: props.title,
                value: props.value,
            })
            return {
                editingField,
                form
            }
        },
        data(props){
            return({
                editing: false
            })
        },

        methods:{
            toggleEditing(){
                this.editing = !this.editing
                console.log(this.editing)
            },
            updateData(url, data){

            }
        },
    }

</script>

<style scoped>

</style>
