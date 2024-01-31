jQuery(document).ready(function ($) {
	
	/*$("#lightgalery").lightGallery({
		mode:'fade',
		speed:500,
		addClass:'myclass',
		preload:2,
		//selector:'p'
		thumbnail:true,
		//showThumbByDefault:true
		//thumbWidth:200,
		//thumbMargin:50
		loop:true,
		auto:true,
		pause:5000,
		eskKey:false,
		closable:false,
		counter:true
	});*/
	
	$(".but").click(function () {
		$(this).lightGallery({
			dynamic:true,
			
			dynamicEl:[
			
			{'src':'img/1.jpg','thumb':'img/th/1_th.jpg','sub-html':"<div class='test'><h1>Hello</h1><p>Text</p></div>"},
			{'src':'img/2.jpg','thumb':'img/th/2_th.jpg'},
			{'src':'img/3.jpg','thumb':'img/th/3_th.jpg'},
			{'src':'img/4.jpg','thumb':'img/th/4_th.jpg'},
			]
		});
	});
		
	
});