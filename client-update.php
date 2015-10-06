<!DOCTYPE html>
<html>
<head>
<title>Independent Drivers Consortium - Client Update</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- -->
<link rel="stylesheet" href="inc/jq/themes/theme-02.min.css" />
<link rel="stylesheet" href="inc/jq/themes/jquery.mobile.icons.min.css" />

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


<!--     -->

<script>
	$(function(){
		$( "[data-role='header'], [data-role='footer']" ).toolbar();
		});
    </script>


<script type="text/javascript">
$(document).on('pagehide', 'div', function (event, ui) { 
    var page = jQuery(event.target);
    if (page.attr('data-cache') == 'never') { 
        page.remove(); 
    }; 
});
</script>
<style type="text/css">
img.center {
	display: block;
	margin-left: auto;
	margin-right: auto
}
.box1 {
	display: block;
	margin-left: auto;
	margin-right: auto;
	background-color: #06C;
}
</style>
<style type="text/css">
<!--
.center1 {
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	text-align: center;
}
.box1 {
	background-image: url(pics/stripes_teal_bkgrnd.gif);
	height: 100%;
	width: 100%;
}
.box2 {
	background-image: url(pics/stripes_teal_bkgrnd.gif);
}
.bighead1 {
	color: #000066;
	font-weight: bold;
	font-size: 18px;
}
.bigfont1 {
	font-weight: bold;
	font-size: 18px;
}
.bigfont2 {
	font-weight: bold;
	font-size: 18px;
	text-align: center;
	vertical-align: middle;
	display: block;
	height: 40px;
	line-height: 40px;
}
.fgreen {
	color: #090;
}
.fblue {
	color: #03F;
}
-->
</style>
<style type="text/css">
img.center {
	display: block;
	margin-left: auto;
	margin-right: auto
}
.box1 {
	display: block;
	margin-left: auto;
	margin-right: auto;
	background-color: #06C;
}
</style>
<link href="mob.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div data-role="header" data-position="fixed" data-theme="a">

head

<!--<h1>Page head Title</h1> -->
</div><!-- /header -->



<section id="page01" data-role="page" data-cache="never">



<!--	 <div class="box1 center1" >this box fill all<br><br>
<br>
</div> -->

<div role="main" class="ui-content"> 

<!-- insert -->

<br>
<a class="buttonlink7" href="client-update-contact.php" rel="external"> <span class="bigfont2">Update My Contact Info</span> </a>
<br><br>
<a class="buttonlink7" href="client-update-1.php" rel="external"> <span class="bigfont2">Update My Address</span> </a> <br>
<br>

<a class="buttonlink7" href="client-update-4.php" rel="external"> <span class="bigfont2">Edit My CA PUC TCP Number</span> </a>
<br><br>


<a class="buttonlink7" href="client-contact-info.php" rel="external"> <span class="bigfont2">Show My Info</span> </a> 



<br>
<br>


</div>
<!-- end .box --> 

<!-- end .content --></div>

<!-- end insert --> 

</div>
<!-- /ui-content --> 

</section>
<!-- /page --> 


<footer data-role="footer" class="ui-barNAH" data-position="fixed" data-theme="a">
<div class="ui-grid-c boxblue">
foot
</div>
</footer>



<!-- /footer -->

</body>
</html>
