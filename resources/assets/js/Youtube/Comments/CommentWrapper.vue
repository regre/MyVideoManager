<template>
	<div class="Comment__wrapper">
		<CommentAdd />

		<div v-for="comment in comments" v-bind:key="comment.id">
			<Comment :comment="comment" />
		</div>
	</div>
</template>

<script>
	// import axios from 'axios';
	import Comment from './Comment.vue';
	import CommentAdd from './CommentAdd.vue';
	export default {
		components: {
			Comment, CommentAdd
		},

		created() {
			window.eventBus.$on('commentAddedEvent', comment => this.handleNewCommentAdded(comment));
			this.loadComments();
			window.Echo.channel('comments').listen('.comment.created', event => {
				console.log('event', event);
				this.handleNewCommentAdded(event.comment);
			});
		},

		data() {
			return {
				comments: []
			}
		},

		methods: {
			handleNewCommentAdded(comment) {
				this.comments.unshift(comment);
			},

			loadComments() {
				var url = window.Laravel.basePath = 'api/video/comments';
				var postData = {
					videoId: this.$route.params.id
				}

				axios.post(url, postData).then(response => {
					this.comments = response.data;
				})
			}
		}
	}
	
</script>