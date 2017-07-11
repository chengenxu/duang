<?php  
	use yii\helpers\Html;
?>
<!-- Html::encode()可以转码 -->
<table class="table">
	<th>id</th><th>名字</th><th>操作</th>
	<?php foreach($arr as $val){?>
		<tr>
			<td>
				<?php echo $val['id'] ?>
			</td>
			<td>
				<?php echo $val['name'] ?>
			</td>
			<td>
				<?php echo Html::a('删除',['resume/delete','id'=>$val['id']]) ?>
				<?php  echo Html::a('刷新',['resume/flush'])?>
			</td>
		</tr>
	<?php  
	}
	?>
</table>