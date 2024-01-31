<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<link  rel="stylesheet" href="css/style.css"/>
<link  rel="stylesheet" href="css/lightGallery.css"/>

<style>
  ul {
			list-style: none outside none;
		    padding-left: 0;
		}
		.gallery li {
			display: block;
			float: left;
			height: 100px;
			margin-bottom: 6px;
			margin-right: 6px;
			width: 100px;
		}
		.gallery li a {
			height: 100px;
			width: 100px;
		}
		.gallery li a img {
			max-width: 100px;
		}
		
		.test {
    background: none repeat scroll 0 0 #fff;
    left: 500px;
    position: absolute;
    top: 100px;
}
		
    </style>


<script src="templates/js/jquery-1.11.2.min.js"></script>
<script src="templates/js/lightGallery.js"></script>

<script src="templates/js/script.js"></script>

<script>


</script>

</head>

<body>
	
	<div class="wrap">
		
		<div class='header'>
		</div>
		
		<div class="menu">
			<?php echo $menu;?>
		</div>
		
		<div class='content'>
			
			<p class="but">Click</p>
			<!--<ul id="lightgalery" class="gallery">
<li data-src="img/1.jpg" data-sub-html="<div class='test'><h1>Hello</h1><p>Text</p></div>">
	<a href="#">
		<img src="img/th/1_th.jpg">
	</a>		
</li>

<li data-src="img/2.jpg">
	<a href="#">
		<img src="img/th/2_th.jpg">
	</a>		
</li>

<li data-src="img/3.jpg" data-sub-html="<div class='test'><h1>Hello</h1><p>Text</p></div>">
	<a href="#">
		<img src="img/th/3_th.jpg">
	</a>		
</li>

<li data-src="img/4.jpg" data-sub-html="<div class='test'><h1>Hello</h1><p>Text</p></div>">
	<a href="#">
		<img src="img/th/4_th.jpg">
	</a>		
</li>


<li data-src="img/1.jpg" data-sub-html="<div class='test'><h1>Hello</h1><p>Text</p></div>">
	<a href="#">
		<img src="img/th/1_th.jpg">
	</a>		
</li>

<li data-src="img/2.jpg" data-sub-html="<div class='test'><h1>Hello</h1><p>Text</p></div>">
	<a href="#">
		<img src="img/th/2_th.jpg">
	</a>		
</li>

<li data-src="img/3.jpg" data-sub-html="<div class='test'><h1>Hello</h1><p>Text</p></div>">
	<a href="#">
		<img src="img/th/3_th.jpg">
	</a>		
</li>

<li data-src="img/4.jpg" data-sub-html="<div class='test'><h1>Hello</h1><p>Text</p></div>">
	<a href="#">
		<img src="img/th/4_th.jpg">
	</a>		
</li>
			</ul>-->
			
			
			<div style="clear:both">
		
		
			<?php echo $content;?>
			
		</div>
		
		<div class='footer'>
			
			<? echo "<p style='text-align:right;font_size:5px; color:white;margin:10px;'>".$site_name."</p>";?>
		</div>
	</div>
</body>
</html>