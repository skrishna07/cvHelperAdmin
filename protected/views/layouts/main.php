<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dataTables.responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css">
	<script type="text/javascript" charset="utf8"  src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8"  src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" charset="utf8"  src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf8"  src="<?php echo Yii::app()->request->baseUrl; ?>/js/dataTables.responsive.min.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	
	<div id="menu-top" >
<?php
$this->widget('application.extensions.eflatmenu.EFlatMenu', array(
 
  'items'=>array(
    array(
      'label'=>'MENUDETAILS',
      'url'=>array('/cvMenudetails/index'),'active' => true, 'icon-class'=>'fa-home',
    
      'items'=>array(
        array('label'=>'create', 'url'=>array('/cvMenudetails/create')),
        array('label'=>'manage', 'url'=>array('/cvMenudetails/admin')),
      ),
    ),
  		array(
  				'label'=>'RELATEDLINKS',
  				'url'=>array('/cvRelatedlinks/index'),'active' => true,
  				
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvRelatedlinks/create')),
  						array('label'=>'manage', 'url'=>array('/cvRelatedlinks/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Siteads',
  				'url'=>array('/cvSiteads/index'),'active' => true,
  				
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvSiteads/create')),
  						array('label'=>'manage', 'url'=>array('/cvSiteads/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Sitecontent',
  				'url'=>array('/cvSitecontent/index'),'active' => true,
  				
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvSitecontent/create')),
  						array('label'=>'manage', 'url'=>array('/cvSitecontent/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Sitefaq',
  				'url'=>array('/cvSitefaq/index'),'active' => true,
  				
  				'items'=>array(
  						array('label'=>'create', 'url'=>array('/cvSitefaq/create')),
  						array('label'=>'manage', 'url'=>array('/cvSitefaq/admin')),
  				),
  		),
  		 
  	
  		array(
  				'label'=>'Registration',
  				'url'=>array('/registration/search/index'),'active' => true,
  				  				'items'=>array(
  					
  						array('label'=>'create', 'url'=>array('/registration/search/create')),
  						array('label'=>'manage', 'url'=>array('/registration/search/admin')),
  				),
  		),
  		
  		array('label'=>'Login', 'url'=>array('/site/login'),'active' => true, 'visible'=>Yii::app()->user->isGuest),
  		array('label'=>'Logout('.Yii::app()->user->name.')', 'active' => true,'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, ),
  		
  		
  		 
  		
     ),
)); ?>

			</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
