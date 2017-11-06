<template>
    <div class="showcase" :style="style">
        <cell v-for="(cell, index) in showcase.layout.cells" :cell="cell" :unit="unit" :key="index"></cell>
    </div>
</template>
<script>

Vue.component('cell', require('./Cell.vue'));

export default {
    mounted() {
        this.sizeElement();

        var output = this.showcase.layout.cells
        output = Object.assign({}, output)
        console.log(output)

    },
    props: ["showcase"],
    data: function() {
        return {
            unit: 0
        }
    },
    methods: {
        sizeElement() {
            this.setUnit()
            this.setHeight()
        },
        setHeight: function() {
            var height = 0;
            for (var cell of this.showcase.layout.cells) {
                var bottom = cell.position.y + cell.size.height;
                if (bottom > height) {
                    height = bottom;
                }
            }
            this.height = height
        },
        setUnit: function() {
            if(this.$el != undefined) {
                this.unit = this.$el.offsetWidth/6
                return
            }
            this.unit = 0
        }
    },
    computed: {
        style: function() {
            return {
                height: this.height * this.unit + 'px'
            }
        }
     //        computed: {
    }
 //         style: function() {
 //             return {
 //                 height: this.height * this.unit + "px"
 //             }
 //         },
 //        }
}
	// Vue.component('cell', require('./Cell.vue'));

 //    export default {
 //    	mounted() {
 //            console.log(this.showcase);
 //    		this.sizeElement();
 //    	},
 //    	props: ["showcase"],
 //        data: function() {
 //        	return {
 //        		height: 0,
 //        		unit: 0,
 //        	}
 //        },
 //        methods: {
 //        	resolveUnit() {
 //        		if(this.$el != undefined) {
	//         		var unit = this.$el.offsetWidth/6;
	//         		this.unit = unit;
	//         		return;
 //        		}
 //        		this.unit = 0;
 //        	},
 //        	resolveHeight() {
 //        		console.log("resolve height...");
	//     		var height = 0;
	//     		for (var cell of this.showcase.cells) {
	    			
	//     			var bottom = cell.position.y + cell.size.height;
	//     			if (bottom > height) {
	//     				height = bottom;
	//     			}
	//     		}
	//     		this.height = height
 //        	},

 //        	handleResize() {
 //        		console.log("Handlin' resize");
 //        		this.sizeElement();
 //        	},
 //        	sizeElement() {

	//     		this.resolveUnit();
	//     		this.resolveHeight();
 //        	}
 //        },
 //        computed: {
 //        	style: function() {
 //        		return {
 //        			height: this.height * this.unit + "px"
 //        		}
 //        	},
 //        }
 //    }
</script>
