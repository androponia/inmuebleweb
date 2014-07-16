<?php

class ClienteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  
				'actions'=>array('index','view','create','update','admin','delete'),
				'roles'=>array('director','administrativo'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$modelc=$this->loadModel($id);
		$modelu = new Usuario;
    	$modelu=Usuario::model()->findByPk($id);

		$this->render('view',array(
        'modelc'=>$modelc,
        'modelu'=>$modelu,
        ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
	    $modelu = new Usuario;
	    $modelc = new Cliente;
	    if(isset($_POST['Cliente'], $_POST['Usuario']))
	    {
	        $modelu->attributes=$_POST['Usuario'];
	 
	        // valida usuario
	        $modelu->tipousuarioid= 4;
	        $valid=$modelu->validate();
	        if($valid)
	        {
	            if ($modelu->save(false)) {
	                $modelc->attributes = $_POST['Cliente'];
	                $modelc->idusuario = $modelu->idusuario;
	                if ($modelc->save(false)) {
	                	$this->redirect(array('view','id'=>$modelc->idusuario));
	                }
	            }
            }
        }
    	$this->render('create', array(
    		'modelc'=>$modelc,
        	'modelu'=>$modelu,
    	));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$modelc=$this->loadModel($id);
		$modelu = new Usuario;
    	$modelu=Usuario::model()->findByPk($id);
        if(isset($_POST['Cliente'], $_POST['Usuario']))
        {
        	$modelc->attributes=$_POST['Cliente'];
            $modelu->attributes=$_POST['Usuario'];
            if($modelc->save() && $modelu->save())
            	$this->redirect(array('admin'));
        }
        $this->render('update',array(
        'modelc'=>$modelc,
        'modelu'=>$modelu,
        ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cliente');
        $this->render('index',array(
                'dataProvider'=>$dataProvider,
        ));
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$modelc = new Cliente('search');
		$modelc->unsetAttributes();  // clear any default values

		$modelu = new Usuario('search');
		$modelu->unsetAttributes();
		$modelu->tipousuarioid = 4;

		if(isset($_GET['Cliente']) && isset($_GET['Usuario']))
		{
			$modelc->attributes=$_GET['Cliente'];
			$modelu->attributes=$_GET['Usuario'];
		}
		$this->render('admin',array(
			'modelc'=>$modelc,
			'modelu'=>$modelu,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Cliente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
