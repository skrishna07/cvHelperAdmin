<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  
  <title><?php echo Html::encode($this->title); ?></title>
  <?php $this->head(); ?>
	
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  
  <!-- CSS  -->
  <link href="<?php echo $this->theme->baseUrl ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo $this->theme->baseUrl ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php $this->beginBody() ?>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo"><?php echo Html::encode(\Yii::$app->name); ?></a>
	  		<?php
$this->widget('zii.widgets.CMenu',array(
  'activeCssClass'=>'active',
  'activateParents'=>true,
  'items'=>array(
    array(
      'label'=>'MENUDETAILS',
      'url'=>array('/cvMenudetails/index'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'create', 'url'=>array('/cvMenudetails/create')),
        array('label'=>'manage', 'url'=>array('/cvMenudetails/admin')),
      ),
    ),
  		array(
  				'label'=>'RELATEDLINKS',
  				'url'=>array('/cvRelatedlinks/index'),
  				'linkOptions'=>array('id'=>'menuCompany'),
  				'itemOptions'=>array('id'=>'itemCompany'),
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvRelatedlinks/create')),
  						array('label'=>'manage', 'url'=>array('/cvRelatedlinks/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Siteads',
  				'url'=>array('/cvSiteads/index'),
  				'linkOptions'=>array('id'=>'menuCompany'),
  				'itemOptions'=>array('id'=>'itemCompany'),
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvSiteads/create')),
  						array('label'=>'manage', 'url'=>array('/cvSiteads/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Sitecontent',
  				'url'=>array('/cvSitecontent/index'),
  				'linkOptions'=>array('id'=>'menuCompany'),
  				'itemOptions'=>array('id'=>'itemCompany'),
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvSitecontent/create')),
  						array('label'=>'manage', 'url'=>array('/cvSitecontent/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Sitefaq',
  				'url'=>array('/cvSitefaq/index'),
  				'linkOptions'=>array('id'=>'menuCompany'),
  				'itemOptions'=>array('id'=>'itemCompany'),
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvSitefaq/create')),
  						array('label'=>'manage', 'url'=>array('/cvSitefaq/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Userdetails',
  				'url'=>array('/cvUserdetails/index'),
  				'linkOptions'=>array('id'=>'menuCompany'),
  				'itemOptions'=>array('id'=>'itemCompany'),
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvUserdetails/create')),
  						array('label'=>'manage', 'url'=>array('/cvUserdetails/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Userlogs',
  				'url'=>array('/cvUserlogs/index'),
  				'linkOptions'=>array('id'=>'menuCompany'),
  				'itemOptions'=>array('id'=>'itemCompany'),
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvUserlogs/create')),
  						array('label'=>'manage', 'url'=>array('/cvUserlogs/admin')),
  				),
  		),
  		array(
  				'label'=>'Registration',
  				'url'=>array('/registration/search/index'),
  				'linkOptions'=>array('id'=>'menuCompany'),
  				'itemOptions'=>array('id'=>'itemCompany'),
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/registration/search/create')),
  						array('label'=>'manage', 'url'=>array('/registration/search/admin')),
  				),
  		),
  		
  		
  		array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
  		array('label'=>'Logout('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, ),
  		
  		
  		 
  		
     ),
)); ?>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text"><?php echo Html::encode(\Yii::$app->name); ?></h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m12">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="mdi-image-flash-on"></i></h2> 
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="mdi-social-group"></i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="mdi-action-settings"></i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>
      
    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>  


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo $this->theme->baseUrl ?>/js/materialize.js"></script>
  <script src="<?php echo $this->theme->baseUrl ?>/js/init.js"></script>
  
  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage(); ?>