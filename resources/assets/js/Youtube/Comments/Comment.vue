<template>
	<div class="comment__wrapper">
		<div class="card-body">
			{{ comment.body }}
			<br>
			<small class="text-muted">{{comment.created_at}}</small>
		</div>	
	</div>
</template>

<script>
	export default {
		props: ['comment']
	}
</script>