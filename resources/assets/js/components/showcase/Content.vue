<template>
	<div class="content-frame">
		<div class="image-content content" v-if="content.type == 'image'">
			<img :src="'img/' + content.image.url" />
		</div>
		<div class="copy-content content" v-if="content.type == 'copy'">
			<p>{{ content.copy.text }}</p>
		</div>
		<div class="product-content content" v-if="content.type == 'product'">
				<img :src="'img/' + content.product.image.url" />
				<div class="product-details">
					<div class="info">					
						Exampe Earrings
					</div>
					<div class="buttons">
						<a href="#" class="shop-button"><div>Shop on Wherever</div></a>
						<a href="#" class="love-button"><i class="fa fa-heart" aria-hidden="true"></i></a>
					</div>
				</div>
		</div>
	</div>
</template>
<script>
	export default {
		props: ["content"]
	}
</script>