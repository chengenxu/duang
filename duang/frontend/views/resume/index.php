<?php
use yii\widgets\ActiveForm; 
use yii\helpers\Html;
?>
<div class="fuck-form">
	<?php $form=ActiveForm::begin(); ?>
		<?php echo $form->field($resume,'name')->textInput();?>
		<div class="form-group">
        	<?= Html::submitButton('新增简历', ['class' => 'btn btn-success']) ?>
    	</div>
	<?php ActiveForm::end(); ?>
</div>
