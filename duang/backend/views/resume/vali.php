<?php  
use yii\widgets\ActiveForm; 
use yii\helpers\Html; 
?>
<?php  $form=ActiveForm::begin()?>
	<?php echo  $form->field($info,'name')->textInput()?>
	<?php echo  $form->field($info,'pwd')->passwordInput()?>
	<?php echo  $form->field($info,'email')->textInput()?>
	<div class="form-group">
        <?= Html::submitButton('用户注册', ['class' => 'btn btn-success']) ?>
    </div>
<?php  ActiveForm::end()?>