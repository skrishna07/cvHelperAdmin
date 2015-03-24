<?php
/**
 * ClockPicker Class File
 * 
 * @author Phelipe B. Folgierini  <phelipebf@gmail.com>
 * @version 1
 * @license http://www.opensource.org/licenses/mit-license.php MIT license
 * 
 * @desc ClockPicker is a wrapper for http://weareoutman.github.io/clockpicker/
 */

class ClockPicker extends CWidget {

    /**
     * @var string Path of the asset files after publishing.
     */
    private $assetsPath;
    
    /**
     * @var string the selected HTML elements
     */
    public $element;
    
    /**
     * @var array options for maskMoney 
     */
    public $config = array();
        
    public function init() {
        $assets = dirname(__FILE__) . '/' . 'assets';
        $this->assetsPath = Yii::app()->getAssetManager()->publish($assets);        
        Yii::app()->getClientScript()->registerScriptFile($this->assetsPath . '/' . 'jquery-clockpicker.min.js');
           
        Yii::app()->getClientScript()->registerCssFile($this->assetsPath . '/' . 'jquery-clockpicker.min.css');
      
    }

     public function run() {
         Yii::app()->clientScript->registerScript('processClockPicker', '$("'.$this->element.'").clockpicker('.json_encode($this->config).')');
     }
}

?>
