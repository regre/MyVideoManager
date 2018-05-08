<script>
	import Search from './Search';

	export default {
		data() {
			return {
				searchString: ''
			}
		},
		methods: {
			handleFormSubmit() {
				window.eventBus.$emit('searchForYoutubeStarted');

				Search({
					apiKey: 'AIzaSyBFccUWWWwugZQ38p8Se4B8NELhkL4zxyc',
					term: this.searchString,
					items: 10
				}, data => {
					window.eventBus.$emit('searchResultFromYoutube', data);
					this.searchString = '';
				});	
			}
		}
	}
</script>

<template>
	<div class="Search__wrapper">
		<form v-on:submit.prevent="handleFormSubmit">
			<input 
				v-model="searchString"
				type="text" 
				class="form-control">
		</form>
	</div>
</template>

<style lang="scss">
	.Search__wrapper {
		margin-bottom: 10px;
	}
</style>