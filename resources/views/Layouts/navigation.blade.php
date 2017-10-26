<?php
$nav_items = [
	"Home" => "/",
	"Student Records" => "/students",
	"About" => "/about",
	"Contact" => "/contact",
	"FAQ" => "/frequently-asked-questions",
];
$navitem_count = count($nav_items);
$navitem_width = 100/$navitem_count;




/*
|	This is the area that receives the input from the user on where to
|	position the hamburger menu on mobile.
*/
// $burger_position on line 21 will be commented out in the future as the same variable
// on line 22 will be supplemented from the value in the logged-in user's config settings.
$burger_position = "right";
$burger_class = "burger-".$burger_position;
//$slide_direction_choice = "right";




//*** TO-DO later: Initiative to make the nav items' width relative to their word lengths
//***
//*** try to use strlen($nav_items) to measure each item's length,
//*** then pass these values to an array with each corresponding nav_item assignment.
//*** find a way to calculate their proportions with each other.
//*** finally, pass those values to CSS as grid-template-columns values, making sure to consider adding some allowance for the spacings between each item(?).


?>

<!-- MOBILE MENU -->
<nav id="mobilenav-cont">
  <div class="{{ $burger_class }}">
	<div class="navicon-cont" onclick="showNavItems()">
		<span>&#9776;</span>
	</div>
  </div>
</nav>
<!-- MOBILE MENU Extension - Overlay Nav -->
	<div id="mobileNav" class="overlay">
		<a id="close-bttn" href="javascript:void(0);" onclick="hideNavItems()">&times;</a>
		<div class="mobilenav-items">
			@foreach ($nav_items as $na_key => $na_url)
				<a href="{{ $na_url }}">{{ $na_key }}</a>
			@endforeach
		</div>
	</div>


<!-- DESKTOP MENU -->
<nav class="desktopnav-cont">
<div id="desktop-nav" class="for-nav" style="grid-template-columns: repeat({{ $navitem_count }}, 1fr);">
	@foreach ($nav_items as $na_key => $na_url)
		<a href="{{ $na_url }}">{{ $na_key }}</a>
	@endforeach
</div>
</nav>


<script type="text/javascript">
	function showNavItems(){
		document.getElementById("mobileNav").style.width = "100%";
	}
	function hideNavItems(){
		document.getElementById("mobileNav").style.width = "0%";
	}
</script>