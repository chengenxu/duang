<?php  
namespace frontend\controllers;
use Yii;
use yii\web\Controller; 
use common\models\Resume; 
use common\models\Info;
class ResumeController extends Controller
{
	//public $enableCsrfValidation=false;
	//增加
	public function actionIndex()
	{
		$resume=new Resume();
		if(Yii::$app->request->ispost)
		{
			$data=Yii::$app->request->post();
			$resume->name=$data['Resume']['name'];
			if($resume->save())
			{
				return $this->redirect(['list']);
			}

		}
		else
		{
			return $this->render('index',['resume'=>$resume]);
		}
		
	}
	//列表
	public function actionList()
	{
		$data=Resume::find()->all();
		return $this->render('list',['arr'=>$data]);
	}
	//删除
	public function actionDelete()
	{
		$id=Yii::$app->request->get('id');
		$did=Resume::deleteAll('id='.$id);
		if($did)
		{
			 echo "<script>alert('删除成功');location.href='?r=resume/list'</script>";
		}
	}
	//刷新
	public function actionFlush()
	{
		$data=Resume::find()->orderBy('id desc')->all();
		return $this->render('list',['arr'=>$data]);
	}
	//验证
	public function actionVali()
	{
		$info=new Info();
		if(Yii::$app->request->ispost)
		{
			$data=Yii::$app->request->post();
			$name=$data['Info']['name'];
			$pwd=md5($data['Info']['pwd']);
			$email=$data['Info']['email'];
			$info->save();
		}
		else
		{
			return $this->render('vali',['info'=>$info]);
		}
		
	}
}  
?>