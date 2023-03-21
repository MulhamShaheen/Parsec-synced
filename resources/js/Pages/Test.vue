<template>
	<Head>
    	<title>{{ $page.props.title }} - My awesome app</title>
  	</Head>

	<form @submit.prevent="send()">
		<input class="h-10" type="file" multiple name="image" @input="fileAdd($event.target.files)">
	</form>
	<draggable 
		v-model="images" 
		group="people" 
		@start="drag=true" 
		@end="drag=false" 
		item-key="id">
		<template class="flex" #item="{element}">
			<div class="image-model-container">
				<img class="image" :src="element.url" width="125" >
			</div>
		</template>
	</draggable>
	<button v-on:click="send" >upload</button>
</template>
<script>
    import {
        Head	
    } from '@inertiajs/inertia-vue3'
	import { useForm } from '@inertiajs/inertia-vue3';
	import InfoEditor from '../Shared/Components/InfoEditor';
	import draggable from 'vuedraggable'
	import { TransitionGroup } from 'vue';

    export default {
        components: {
            Head,
			InfoEditor,
			draggable
        },
        layout: null,
		setup(preps){
			const form = useForm({
				images: [],
				info: [],
			})
			return {form}
		},
		data(){
			return{
				url: null,
				images: [],
				drag: false,
			}
		},
		methods:{
			send(){
				// route('gallery.update', {
				// 	_method: 'post',
				// 	images: this.form.images,});

				this.form.post(route('gallery.update'))
				console.log(this.form.images)
			},
			fileAdd(images){
				console.log(images)
				images.forEach(image => {
					image.title = image.name
					this.form.images.push(image)
					image['url'] = URL.createObjectURL(image);
					this.images.push(image)

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
</style>