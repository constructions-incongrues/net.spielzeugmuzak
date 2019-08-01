<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>

<title><%title%> : <%obj_name%></title>

<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/style.css' type='text/css' />

<style type='text/css'>
#menu { left: 0; float: left; }
</style>

<!--[if lte IE 6]>
<style type='text/css'>
#menu { left: -40px; margin: 0; padding: 0; }
#content { left: 40px;}
#top-section { float: right; position: absolute; }
</style>
<![endif]-->

<!--[if lte IE 6]>
<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/ie.css' type='text/css' />
<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/ie.js'></script>
<![endif]-->

<plug:front_lib_css />
<plug:front_dyn_css />
<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/jquery.js'></script>
<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/cookie.js'></script>
<plug:front_lib_js />
<script type='text/javascript'>
path = '<%baseurl%>/files/gimgs/';
 
$(document).ready(function()
{
	setTimeout('move_up()', 1);
	
});
</script>
<plug:front_dyn_js />
<plug:backgrounder color='<%color%>', img='<%bgimg%>', tile='<%tiling%>' />
</head>

<body class='section-<%section_id%>'>

<div class="top-section" id='top-section'>
<%obj_itop%>
</div>

<div id='menu'>
<div class='container'>

<plug:front_index />

<!-- you must provide a link to Indexhibit on your site someplace - thank you -->
<div class='container'>
</div>

</div>	
</div>	

<div id='content'>
<div class='content'>


<!-- text and image -->
<plug:front_exhibit />
<!-- end text and image -->

</div>
</div>

<div class="bottom-section" id='copy'><%obj_ibot%></div>
<div id='indexhibit'><a href="http://www.villapiegee.spielzeugmuzak.net" target="_self"><img src='http://www.spielzeugmuzak.net/villapiegee/files/villa.png'  height='100' /></a>
</div>
</body>
</html>