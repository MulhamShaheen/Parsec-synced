<template>
    <div id="" class="edit-container">
        <div>
            <span class="edit-title" v-if="showLabel">{{ title }}</span>
            <transition name="field" mode="out-in">
                <div v-if="editing">
                    <form @submit.prevent="updateData">
                        <textarea v-if="editingField == 'textarea'"  v-model="form.value" 
                            name="{{ title }}" cols="30" rows="6" v-on:input="toggleModifing"></textarea>
                        <input v-else :type="editingField" v-model="form.value" name="{{ title }}" v-on:input="toggleModifing">
                    </form>
                </div>
                <div v-else>
                    <div style="white-space: pre-line;">
                        {{ value }}
                    </div>
                </div>
            </transition>
        </div>
        <div class="flex content-center justify-center">
            <div v-if="singleMode && editing && modifing" class="flex gap-4" >
                <button :disabled="form.processing" class="bg-blue-200 rounded-lg p-2" v-on:click="updateData">
                    save
                </button>
            </div>
            <button v-if="singleMode" style="none" :class="[editing? 'edit-pencil-active':'edit-pencil']" v-on:click="toggleEditing">
                <img src="/img/svg/pencel-purple.svg"  width="38" height="38">
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
            singleMode: Boolean,
            userData: Boolean,
            showLabel: Boolean,
            submitData: Boolean,
        },
        emits: ['update:value'],
        setup(props) {
            if (props.showLabel == null){
                props.showLabel = false
            }

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
                userData: props.userData,
            })
            return {
                editingField,
                form
            }
        },
        data(props){
            return({
                
                editing: false,
                modifing: false,
                
            })
        },

        methods:{
            toggleEditing(){
                this.editing = !this.editing
                console.log(this.editing)
            },
            toggleModifing(){
                this.modifing = true
            },
            updateData(){
                
                this.$emit('update:value', this.form.value)
                if(this.submitData){
                    this.form.post(this.url)
                }
                console.log(this.form)
                this.toggleEditing()
            }
        },
    }

</script>

<style scoped>
    .edit-container{
        background: #EFF6FF;
        border-radius: 10px;
        padding-top: 14px;
        padding-bottom: 14px;

        display: flex;
        justify-content: space-between;
        align-items: center;

    }
    .edit-title{
        font-weight: bold;
        font-size: large;
    }
    .edit-pencil{
        padding: 2px;
        box-sizing: border-box;
        border-radius: 50px;
       
        opacity: 0.6;
        border-color: #5D7BE6;
        width: 40px;
        height: 40px;
        transition: 0.1s;
    }
    .edit-pencil-active{
        padding: 2px;
        box-sizing: border-box;
        border-radius: 50px;
        border: solid;
        opacity: 0.8;
        border-color: #5D7BE6;
        width: 40px;
        height: 40px;
        transition: 0.1s;
    }

    .v-enter-active,
    .v-leave-active {
    transition: opacity 0.2s ease;
    }

    .v-enter-from,
    .v-leave-to {
        opacity: 0;
    }

    .field-enter-active {
        transition: all 0.15s ease-out;
    }

    .field-leave-active {
        transition: all 0.15s cubic-bezier(1, 0.5, 0.8, 1);
    }

    .field-enter-from,
    .field-leave-to {
        transform: translateX(20px);
        opacity: 0;
    }
</style>
