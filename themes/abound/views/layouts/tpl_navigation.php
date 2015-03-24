<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
         
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                      array(
      'label'=>'MENUDETAILS',
      'url'=>array('/cvMenudetails/index'),
     'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
    		'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
      		array('label'=>'details',  'url'=>array('/cvMenudetails/index')),
        array('label'=>'create', 'url'=>array('/cvMenudetails/create')),
        array('label'=>'manage', 'url'=>array('/cvMenudetails/admin')),
      ),
    ),
  		array(
  				'label'=>'RELATEDLINKS',
  				'url'=>array('/cvRelatedlinks/index'),
  				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
    		'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
  				'items'=>array(
  						array('label'=>'details',  'url'=>array('/cvRelatedlinks/index')),
  						array('label'=>'create', 'url'=>array('/cvRelatedlinks/create')),
  						array('label'=>'manage', 'url'=>array('/cvRelatedlinks/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Siteads',
  				'url'=>array('/cvSiteads/index'),
  				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
    		'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
  				'items'=>array(
  						array('label'=>'details',  'url'=>array('/cvSiteads/index')),
  						array('label'=>'create', 'url'=>array('/cvSiteads/create')),
  						array('label'=>'manage', 'url'=>array('/cvSiteads/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Sitecontent',
  				'url'=>array('/cvSitecontent/index'),
  				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
    		'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
  				'items'=>array(
  						array('label'=>'details',  'url'=>array('/cvSitecontent/index')),
  						array('label'=>'create', 'url'=>array('/cvSitecontent/create')),
  						array('label'=>'manage', 'url'=>array('/cvSitecontent/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Sitefaq',
  				'url'=>array('/cvSitefaq/index'),
  				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
    		'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
  				'items'=>array(
  						array('label'=>'details',  'url'=>array('/cvSitefaq/index')),
  						array('label'=>'create', 'url'=>array('/cvSitefaq/create')),
  						array('label'=>'manage', 'url'=>array('/cvSitefaq/admin')),
  				),
  		),
  		 
  		array(
  				'label'=>'Registration',
  				'url'=>array('/registration/search/index'),
  				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
    		'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
  				'items'=>array(
  						array('label'=>'details',  'url'=>array('/registration/search/index')),
  						array('label'=>'create', 'url'=>array('/registration/search/create')),
  						array('label'=>'manage', 'url'=>array('/registration/search/admin')),
  				),
  		),
  		
  		
  		array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
  		array('label'=>'Logout('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, ),
  		
  		
  		 
  		
     ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

