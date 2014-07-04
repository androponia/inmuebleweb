<?php

class EmpleadoController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('admin','view'),
				//'users'=>array('*'),
				'roles'=>array('director'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'roles'=>array('director'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('admin'),
				'roles'=>array('director'),
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
		$modele=$this->loadModel($id);
		$modelu = new Usuario;
    	$modelu=Usuario::model()->findByPk($id);

		$this->render('view',array(
        'modele'=>$modele,
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
	    $modele = new Empleado;
	    if(isset($_POST['Empleado'], $_POST['Usuario']))
	    {
	        $modelu->attributes=$_POST['Usuario'];
	 


// foreach($_SESSION as $valor)
// {
// echo $valor.',';
// }

	        // if ($modelu->tipousuarioid == 1)
	        // {
	        // 	var_dump($_POST);

	        // 	echo (Yii::app()->user->id);


	        // 	echo ('.Yii::app()->user->name.');
	        // }


	       // valida usuario
	        $valid=$modelu->validate();
	        if($valid)
	        {
	        	$modelu->password = sha1($modelu['password']);
	            if ($modelu->save(false)) {
	                $modele->attributes = $_POST['Empleado'];
	                $modele->idusuario = $modelu->idusuario;
	                if ($modele->save(false)) {
	                	$this->redirect(array('view','id'=>$modele->idusuario));
	                }
	            }
            }
        }
    	$this->render('create', array(
    		'modele'=>$modele,
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
		$modele=$this->loadModel($id);
		$modelu = new Usuario;
    	$modelu=Usuario::model()->findByPk($id);
        if(isset($_POST['Empleado'], $_POST['Usuario']))
        {
        	$modelc->attributes=$_POST['Empleado'];
            $modelu->attributes=$_POST['Usuario'];
            if($modelc->save() && $modelu->save())
            	$this->redirect(array('admin'));
        }
        $this->render('update',array(
        'modele'=>$modele,
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

			$modelu = new Usuario;
	    	$modelu = Usuario::model()->findByPk($id);
	    	$modelu->delete();

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
		$dataProvider=new CActiveDataProvider('Empleado');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$modele = new Empleado('search');
		$modele->unsetAttributes();  // clear any default values

		$modelu = new Usuario('search');
		$modelu->unsetAttributes();
		$modelu->tipousuarioid = array(1,2,3);

		if(isset($_GET['Empleado']) && isset($_GET['Usuario']))
		{
			$modele->attributes=$_GET['Empleado'];
			$modelu->attributes=$_GET['Usuario'];
		}
		$this->render('admin',array(
			'modele'=>$modele,
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
		$model=Empleado::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='empleado-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
