<template>
	<Head>
    	<title>{{ $page.props.title }} - My awesome app</title>
  	</Head>
	<form  @submit.prevent="send()">
		<input class="h-10" type="file" @input="fileUpload($event.target.files[0]) ">
		<button v-on:click="send">click</button>
	</form>
	<div v-for="image in images">
		<img :src="image['url']" width="125" >
		<h1> 1 {{image['name']}}</h1>
	</div>
</template>
<script>
    import {
        Head
    } from '@inertiajs/inertia-vue3'
	import { useForm } from '@inertiajs/inertia-vue3';
	import appCSS from '/css/unlock-main.css';

    export default {
        components: {
            Head
        },
        layout: null,
		setup(preps){
			const form = useForm({
				images: null
			})
			return {form}
		},
		data(){
			return{
				url: null,
				images: []
			}
		},
		methods:{
			send(){
				this.form.images = this.images
				console.log(this.form.images)
			},
			fileUpload(image){
				console.log(image)
				image['url'] = URL.createObjectURL(image);
				this.images.push(image)


			}
		}
    }

</script>
