<?php 
use frontend\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
 ?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$this->title?></title>
	<?= Html::csrfMetaTags()?>
	<title><?= Html::encode($this->title)?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<?php $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>