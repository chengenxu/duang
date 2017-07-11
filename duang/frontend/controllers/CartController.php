<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;

class CartController extends Controller
{

	public $enableCsrfValidation=false;		
	//public $layout='main';
	public function actionIndex()
	{
		if(Yii::$app->request->isPost)
		{
			$name=Yii::$app->request->post('name');
			$sql="insert into resume (name) value('$name')";
			 $bloon=Yii::$app->db->createCommand($sql)->execute();
			 if($bloon)
			 {
			 	echo "<script>alert('添加成功');location.href='?r=cart/list'</script>";
			 }

		}else
		{
			return $this->render('index');
		}
	}
	public function actionList()
	{
		$sql="select * from resume";
		$data=Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render('list',['data'=>$data]);


	}
	public function actionDel()
	{
		$id=$_GET['id'];
		$sql="delete from resume where id='$id'";
		$bloon=Yii::$app->db->createCommand($sql)->execute();
		if($bloon)
		{
			echo "<script>alert('删除数据');location.href='?r=cart/list'</script>";
		}
	}
	public function actionUpd()
	{

		{
			$id=$_GET['id'];
			$sql="select * from resume where id='$id'";
			$data=Yii::$app->db->createCommand($sql)->queryOne();
			return $this->render('upd',['data'=>$data]);
		}
		
	}
	public function actionSave()
	{

		$id=$_POST['id'];
		$name=$_POST['name'];
		$sql="update resume set name='$name' where id='$id'";
		$bloon=Yii::$app->db->createCommand($sql)->execute();
		if($bloon)
		{
			echo "<script>alert('修改成功');location.href='?r=cart/list'</script>";
		}else
		{
			echo "error";
		}

	}



}

 ?>