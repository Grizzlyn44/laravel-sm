<template lang="html">
	<div class="chat-message">
		<p>{{ message.message }}</p>
		<small>{{ message.user.name }}</small>
		<code>Status: ---</code>
	</div>
</template>

<script>
	
export default {
	props: ['message']
}

            // if(this.usersInRoom.filter(usersInRoom => (usersInRoom.name === "Grizzlyn44"))){
            //     alert('ss');
            // }

</script>

<style lang="css">
	
</style>