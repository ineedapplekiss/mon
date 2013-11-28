<?php

class TestController extends Controller
{
	public function actionTest()
	{
	    $model=new User;
	
	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='user-test-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */
	
	    if(isset($_POST['User']))
	    {
	        $model->attributes=$_POST['User'];
	        if($model->validate())
	        {
	            // form inputs are valid, do something here
	            return;
	        }
	    }
	    $this->run("show");
	    $this->render('/user/test',array('model'=>$model));
	}
	
	public function actionShow()
	{
		echo 123;
	}
}