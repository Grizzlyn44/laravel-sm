<template lang="html">
	<div class="chat-composer">
		<input type="text" placeholder="Type your message..." @keyup.enter="sendMessage" v-model="messageText">
		<button class="btn btn-primary" @click="sendMessage">Send</button>
	</div>
</template>

<script>
	
export default {

	data() {
		return {
			messageText: ''
		}
	},
	methods: {
		sendMessage() {
			this.$emit('messagesent', {
				message: this.messageText,
				user: {
					name: $('.username').text()
				}
			});
			this.messageText = '';
		}
	}

}

</script>

<style lang="css">
	
</style>