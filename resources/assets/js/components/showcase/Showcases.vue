<template>
	<div>
		<usim-showcase v-for="showcase in showcases" :key="showcase.id" :showcase="showcase"></usim-showcase>
	</div>
</template>

<script>

	export default {
		mounted() {
			this.getShowcases();
		},
		data: function() {
			return {
				showcases: []
			}
		},
		methods: {
			getShowcases() {
				axios.get('http://api.usim.dev/v1/showcase')
					.then(response => {
			    		this.showcases = response.data
			    	})
				    .catch(e => {
				      this.errors.push(e)
				    })
			}
		}
	}
</script>