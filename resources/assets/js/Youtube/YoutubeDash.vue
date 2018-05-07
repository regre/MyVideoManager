<template>
	<div class="YoutubeDash__wrapper">
		<video-group :videos="videos"></video-group>
	</div>
</template>


<script>
import VideoGroup from './VideoGroup.vue';
import Search from './Search';

export default {
	components: {
		VideoGroup
	},
	created() {
		Search({
			apiKey: 'AIzaSyBFccUWWWwugZQ38p8Se4B8NELhkL4zxyc',
			term: 'avengers infinity war',
			items: 10
		}, response => this.videos = response);			
	},

	data() {
		return {
		videos: null
		}
	}
}
</script>