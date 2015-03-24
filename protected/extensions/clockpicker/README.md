# yii-clockpicker
ClockPicker is a wrapper for http://weareoutman.github.io/clockpicker/

Usage:

echo CHtml::textField('time_field', '');

echo CHtml::textField('another_time_field', '');
        
$this->widget('application.extensions.clockpicker.ClockPicker', array(
    'element' => '#time_field, #another_time_field',
    'config' => array(
        'placement' => 'top',
        'align' => 'top',                                
        'autoclose' => true,
        #'donetext' => 'OK',
    )
));
