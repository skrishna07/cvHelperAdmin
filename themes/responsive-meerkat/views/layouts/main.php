<!DOCTYPE HTML>
<html dir="ltr" lang="en-US" > 
<head>

<title>This is Lab.SixtyFive</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta name="description" content="Blog inspired by good design, smart business and people who can get things done" />
<meta name="keywords" content="business, design, responsive web, expression engine, slaes, business development, programming, web development, productivity, project management, agile" />


<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />

<script type="text/javascript">
	var analyticsFileTypes = [''];
	var analyticsEventTracking = 'enabled';
</script>

<!-- Google Analytics -->
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'YOUR GOOGLE TRACK ID']);
	_gaq.push(['_trackPageview']);
	_gaq.push(['_trackPageLoadTime']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>

<!-- Facebook Like -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Google+1 -->
<script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

</head> 
<body class="home blog" style="margin: 0px;">

<section class="wrapper1"><!--wrapper (for centering)--> 
 
<div class="wrapper2"><!--wrapper 2 (for everything except the footer)--> 
 
<!--header--> 
<header class="header"> 
	<h1 id="logo"><?php echo Yii::app()->name; ?></h1> 
	<p class="strapline">Inspired by smart business, good design and people who can get things done</p> 
</header> 

<nav class="navwrapper">
	<div class="menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
</nav>
<!--end header--> 
<!--posts--> 
 
<section class="main"> 



<article class="post">

<div>

<form id="contact_form" method="post" action=""  >
<div style="padding: 10px 10px 10px 10px; background-color: #FFEC8B;">
        <h2>Something important!</h2>
        <h3>If you have something to say ...</h3>
<style>input:not([type=submit]):not([type=file]):not([type=checkbox])  {
	font-size: 20px;
width: 80%;
    border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 10px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}</style>
                <p><input type="text" id="from" name="from" value="" /></p>
		<div style="display:none;"><textarea  name="message" rows="10" cols="40" value="test">I'm interested in Meerkats 2.0</textarea></div>
               <p> <input style="height: 20px;" name="submit" type='submit' value='Send' /></p>
</div>
</form>

                    <?php echo $content; ?>
	</div>
</article>



</section>

<!--end posts--> 
 
<!--sidebar1 wrapper--> 
 
<aside class="sidebar1wrapper"> <!--sidebar1 content--> 
 
<div class="sidebar1"> 
 

<h2>Follow</h2>
    <div class="textwidget">
        <a href=""><img src="http://www.goldhawklabs.com/images/site/icon_big_rss.png" ></a> 
        <a href=""><img src="http://www.goldhawklabs.com/images/site/btn_twitter.jpg"></a> 
        <a href=""><img src="http://www.goldhawklabs.com/images/site/Quora_20_20.png"></a> 
        <a href=""><img src="http://www.goldhawklabs.com/images/site/linkedin-icon-20.gif"></a> 
        <a href=""><img src="http://www.goldhawklabs.com/images/site/tumblr_icon.png"></a>
</div> 




	<h2>About</h2>
	<div class="textwidget"><p>An inspirational slogan about your company perhaps.</p>
	</div> 
		
	<h2>Links</h2>
	<div class="textwidget">
		<p><a href="">Link #1</a></p>
		<p><a href="">Link #2</a></p>
		<p><a href="">Link #3</a></p>
		<p><a href="">Link #4</a></p>
		<p><a href="">Link #5</a></p>
	</div>

        <div class="widgetblock">
            <h2>More Links</h2>
		<p><a href="">Link #1</a></p>
		<p><a href="">Link #2</a></p>
		<p><a href="">Link #3</a></p>
		<p><a href="">Link #4</a></p>
		<p><a href="">Link #5</a></p>
	</div>

</div> <!--end sidebar1 content--> 
 
</aside> <!--end sidebar1 wrapper--> 

<!--sidebar2 wrapper--> 
 
<aside class="sidebar2wrapper"> <!--sidebar2--> 
 
<div class="sidebar2">

	<h2>Little Note</h2>
	<div class="textwidget">
	<p style="padding: 10px 10px; background-color: #FFEC8B;"><strong>Lorem Ipsum: </strong> faucibus a, gravida proin morbi ornare, tellus metus nonummy ut pellentesque leo. A vitae vel pede tortor vel. Leo a felis felis vestibulum vehicula velit.</p>
	</div>
	
	
	<div class="widgetblock">
	<h2>Links</h2>
		<p><a href="">Link #1</a></p>
		<p><a href="">Link #2</a></p>
		<p><a href="">Link #3</a></p>
		<p><a href="">Link #4</a></p>
		<p><a href="">Link #5</a></p>
	</div>

</div><!--end sidebar2--> 

 
</aside> <!--end sidebar2 wrapper--> 
 
</div> <!--wrapper 2 end (for everything except the footer)-->
<!--footer--> 
 
	<footer class="footer"> 
		<p>Meerkats Theme by <a href="http://www.goldhawklabs.com">Goldhawk</a> | Built on <a href="http://www.expressionengine.com/">Expresion Engine</a></p> 
		<p>Copyright &copy 2012</p> 
	</footer> 
 
<!--end footer--> 
 
</section> 
 
 
<!--end wrapper--> 
 
</body> 
</html>
