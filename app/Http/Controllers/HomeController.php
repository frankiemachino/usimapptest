<?php

namespace App\Http\Controllers;

// use App\Entities\Banner;
// use App\Entities\Showcase;
use JavaScript;
use App\Entities\Collection;
use Illuminate\Http\Request;
use App\Showcases\Showcase;
use App\Showcases\Cell;
use TheAbaci\UsimApi\Client;

class HomeController extends Controller
{

	public function __construct(Client $usim) {
		$this->usim = $usim;
	}

	public function index() {
		
		$page = (object) [
			'title' => ''
		];

		/*
		$showcases = "[
	        		cells: [
		        		{
		        			position: {
		        				x: 0,
		        				y: 0
		        			},
		        			size: {
		        				height: 2.5,
		        				width: 2
		        			},
		        			content: [
		        				{
		        					type: 'image',
		        					position: {
		        						x: 0,
		        						y: 0,
		        					},
		        					size: {	
				        				height: 1,
				        				width: 1
		        					},
		        					image: {
		        						url: 'benjamin-bortels-324343.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
		        					}
		        				}
		        			]
		        		},
		        		{
		        			position: {
		        				x: 2,
		        				y: 0
		        			},
		        			size: {
		        				height: 1.5,
		        				width: 1
		        			},
		        			content: [
		        				{
		        					type: 'product',
		        					position: {
		        						x: 0,
		        						y: 0,
		        					},
		        					size: {	
				        				height: 1,
				        				width: 1
		        					},
		        					product: {
			        					image: {
			        						url: 'natalie-rhea-riggs-282055.jpg',
				        					position: {
				        						x: 0,
				        						y: 0,
				        					},
				        					size: {
						        				height: 1,
						        				width: 1
				        					}
			        					}
		        					}
		        				}
		        			]
		        		},
		        		{
		        			position: {
		        				x: 3,
		        				y: 0
		        			},
		        			size: {
		        				height: 1.5,
		        				width: 1.5
		        			},
		        			content: [
		        				{
		        					type: 'image',
		        					position: {
		        						x: 0,
		        						y: 0,
		        					},
		        					size: {	
				        				height: 1,
				        				width: 1
		        					},
		        					image: {
		        						url: 'benjamin-bortels-324343.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
		        					}
		        				}
		        			]
		        		},
		        		{
		        			position: {
		        				x: 4.5,
		        				y: 0
		        			},
		        			size: {
		        				height: 1.5,
		        				width: 1.5
		        			},
		        			content: [
		        				{
		        					type: 'image',
		        					position: {
		        						x: 0,
		        						y: 0,
		        					},
		        					size: {	
				        				height: 1,
				        				width: 1
		        					},
		        					image: {
		        						url: 'benjamin-bortels-324343.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
		        					}
		        				}
		        			]
		        		},
		        		{
		        			position: {
		        				x: 2,
		        				y: 1.5
		        			},
		        			size: {
		        				height: 1.5,
		        				width: 1
		        			},
		        			content: [
		        				{
		        					type: 'image',
		        					position: {
		        						x: 0,
		        						y: 0,
		        					},
		        					size: {	
				        				height: 1,
				        				width: 1
		        					},
		        					image: {
		        						url: 'benjamin-bortels-324343.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
		        					}
		        				}
		        			]
		        		},
		        		{
		        			position: {
		        				x: 3,
		        				y: 1.5
		        			},
		        			size: {
		        				height: 2,
		        				width: 3
		        			},
		        			content: [
		        				{
		        					type: 'image',
		        					position: {
		        						x: 0,
		        						y: 0,
		        					},
		        					size: {	
				        				height: 1,
				        				width: 1
		        					},
		        					image: {
		        						url: 'benjamin-bortels-324343.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
		        					}
		        				}
		        			]
		        		},
		        		{
		        			position: {
		        				x: 0,
		        				y: 3
		        			},
		        			size: {
		        				height: null,
		        				width: 3
		        			},
		        			content: [
		        				{
		        					type: 'copy',
		        					position: {
		        						x: 0,
		        						y: 0,
		        					},
		        					size: {	
				        				height: 1,
				        				width: 1
		        					},
		        					copy: {
		        						text: 'This is the text, yo...'
		        					}
		        				}
		        			]
		        		},
	        		],
	        	]";
	    */
	    
	    /*
	    $showcases = "[
	    	{
		    	cells: [
		    		{
		    			position: {x: 0, y: 0},
		    			size: {width: 2, height: 2.5},
		    			content: [
		    				{
		    					type: 'image',
				    			position: {x: 0, y: 0},
				    			size: {width: 1, height: 1},
				    			image: {
		        						url: 'benjamin-bortels-324343.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
		        					}
		    				}
		    			]
		    		},
		    		{
		    			position: {x: 2, y: 0},
		    			size: {width: 1, height: 1.5},
		    			content: [
		    				{
				    			type: 'product',
	        					position: {x: 0, y: 0},
	        					size: {width: 1, height: 1},
	        					product: {
		        					image: {
		        						url: 'natalie-rhea-riggs-282055.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
			       					}
		        				}
		    				}
		    			]
		    		},
		    		{
		    			position: {x: 3, y: 0},
		    			size: {width: 1.5, height: 1.5},
		    			content: [
		    				{
				    			type: 'product',
	        					position: {x: 0, y: 0},
	        					size: {width: 1, height: 1},
	        					product: {
		        					image: {
		        						url: 'natalie-rhea-riggs-282055.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
			       					}
		        				}
		    				}
		    			]
		    		},
		    		{
		    			position: {x: 4.5, y: 0},
		    			size: {width: 1.5, height: 1.5},
		    			content: [
		    				{
				    			type: 'product',
	        					position: {x: 0, y: 0},
	        					size: {width: 1, height: 1},
	        					product: {
		        					image: {
		        						url: 'natalie-rhea-riggs-282055.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
			       					}
		        				}
		    				}
		    			]
		    		},
		    		{
		    			position: {x: 2, y: 1.5},
		    			size: {width: 1, height: 1.5},
		    			content: [
		    				{
				    			type: 'product',
	        					position: {x: 0, y: 0},
	        					size: {width: 1, height: 1},
	        					product: {
		        					image: {
		        						url: 'natalie-rhea-riggs-282055.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
			       					}
		        				}
		    				}
		    			]
		    		},
		    		{
		    			position: {x: 3, y: 1.5},
		    			size: {width: 3, height: 2},
		    			content: [
		    				{
		    					type: 'image',
				    			position: {x: 0, y: 0},
				    			size: {width: 1, height: 1},
				    			image: {
		        						url: 'benjamin-bortels-324343.jpg',
			        					position: {
			        						x: 0,
			        						y: 0,
			        					},
			        					size: {
					        				height: 1,
					        				width: 1
			        					}
		        					}
		    				}
		    			]
		    		},
		    	],
		    },
	    	{
		    	cells: [
		    		{
		    			position: {x: 0, y: 0},
		    			size: {width: 2, height: 2.5},
		    			content: [
		    				{
		    					type: 'image',
				    			position: {x: 0, y: 0},
				    			size: {width: 1, height: 1}
		    				}
		    			]
		    		}
		    	],
		    }
		]";
		*/
		
		// $content = "home";

	    return view('home');
	}

	protected function showcases() {
		
		$showcases = $this->getShowcases();

	    return view('showcases', compact("showcases"));
	}

	protected function getCollection($name) {

    	$client = new Client();
    	$res = $client->request('GET', "http://usim.dev/api/collections/$name");

		$collectionJson = json_decode($res->getBody());

		$collection = new Collection();

		$collection->name = $collectionJson->name;
		$collection->products = $collectionJson->products;

		return $collection;
	}

	protected function getShowcases() {
		return [
			new Showcase(
				"Throw Me A Rope",
				[
					new Cell(2, 50, 2, 0),
				]
			),
		];
	}
}
