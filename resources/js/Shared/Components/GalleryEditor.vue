<template>
	<div class="w-full">
		<form @submit.prevent="send()">
		<div class="photos">
			<div v-for="image in images" class="photo">
				<img class="h-full" :src="root+'/'+image.filename" alt="">
			</div>
			<div v-for="newImage in form.images" class="photo">
				<img class="h-full" :src="newImage.url" alt="">
			</div>
			<div class="image-input-area">
				<input class="image-input h-10" type="file" multiple name="image" @input="fileAdd($event.target.files)">
			</div>
		</div>
		
		<button v-on:click="send">click</button>
		</form>
	</div>

</template>

<script>
    import {
        Head	
    } from '@inertiajs/inertia-vue3'
	import { useForm } from '@inertiajs/inertia-vue3';
	import draggable from 'vuedraggable'
	import { TransitionGroup } from 'vue';
import { tSObjectKeyword } from '@babel/types';

    export default {
        components: {
			draggable
        },
        props:{
            images: Array,
			root: String,
			endpoint: String,
        },
        layout: null,
		setup(preps){
			const form = useForm({
				images: [],
				info: [],
			})
			return {form}
		},
		methods:{
			send(){

				this.form.post(this.endpoint)
				console.log(this.form.images)
			},
			fileAdd(images){
				console.log(images)
				images.forEach(image => {
					image.title = image.name
					image['url'] = URL.createObjectURL(image);
					this.form.images.push(image)

				});
				
			}
		}
    }

</script>
<style scoped>
.image-model-container{
	display: flex;
	gap: 8px;
	box-sizing: border-box;
	border-width: 1px;
	border-style: solid;
	border-color: #e5e7eb;
	min-width: 240px;
	height: 120px;
	border-radius: 10px;
}
.image{
	border-radius: 10px;
}

.image-input{
	border-style: none;
}

.image-input-area{
    background: linear-gradient(111.08deg, #5D7BE6 52.67%, #958BFB 84.06%);
	opacity: 0.6;
    border-radius: 6px;
    width: 250px;
    height: 190px;
    margin-top: 12px;
    margin-right: 12px;
    margin-bottom: 24px;
	display: flex;
	justify-content: center;
	align-items: center;
}
</style>