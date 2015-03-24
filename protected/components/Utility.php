<?php
class Utility
{

static function getParentmenus()
{

return CHtml::listData(CvMenudetails::model()->findAllByAttributes(
                array(
                        'has_sub_menu'=>'Y',
                )), 'menu_id','menu_label');
		



}

static function getAllmenus()
{

	return CvMenudetails::model()->findAllByAttributes( array(
                        'has_sub_menu'=>'N',
                ));




}



}




?>