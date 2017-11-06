<template>
    <div class="cell" :style="style">
    	<cell-content v-for="(content, index) in cell.content" :key="index" :content="content">   
        </cell-content>
    </div>
</template>
<script>

	Vue.component('cell-content', require('./Content.vue'));

    export default {
        props: ['cell', 'unit'],
        methods: {
        },
        computed: {
        	style: function() {
        		var height = 0;
        		if(this.cell.size.height == null) {
        			height = "auto";
        		} else {
        			height = this.cell.size.height * this.unit;
        		}
        		return {
        			height: height + 'px',
        			left: this.cell.position.x * this.unit + 'px',
        			top: this.cell.position.y * this.unit + 'px',
        			width: this.cell.size.width * this.unit + 'px',
        		}
        	}
        }
    }
</script>
