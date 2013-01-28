<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NayaDimension :: Home</title>
<meta name="keywords" content="naya dimension, nayadimension, NayaDimension" />
<meta name="description" content="web solution, big data, android apps and more..." />
<link href="<?php echo base_url(); ?>/css/naya_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>/js/showhide.js"></script> 
<script type="text/JavaScript" src="<?php echo base_url(); ?>/js/jquery.mousewheel.js"></script> 

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/ddsmoothmenu.js">
</script>

<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="<?php echo base_url(); ?>/js/cloud-carousel.1.0.5.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap:2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			buttonLeft: $('#slider-left-but'),
			buttonRight: $('#slider-right-but'),
			yRadius:30,
			xPos: 480,
			yPos: 32,
			speed:0.15
		}
	);
	$('#site_title h1 a').mouseenter(function(){
		$('#bulb').css('background', 'url(<?php echo base_url();?>img/templatemo_light_on.png) no-repeat scroll 0 0 transparent');	
	});
	$('#site_title h1 a').mouseleave(function(){
		$('#bulb').css('background', 'url(<?php echo base_url();?>img/templatemo_light_off.png) no-repeat scroll 0 0 transparent');	
	});
	
});
 
</script>
 
</head>

<body>

<div id="naya_wrapper">
	
    <div id="naya_header">
    	<div id="site_title"><h1><a href="index.html">NayaDimension</a></h1></div>
        <div id="bulb"></div>        
        <div class="cleaner"></div>
    </div> <!-- END of header -->
