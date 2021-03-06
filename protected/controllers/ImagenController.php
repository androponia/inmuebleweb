<?php

class ImagenController extends Controller
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($idpropiedad, $orden)
	{

        $model=new Imagen;

		$modeli = new Imagen;
    	$modeli = Imagen::model()->findAllByAttributes(array('propiedadid'=>$idpropiedad, 'orden'=>$orden ));
	
		if($modeli == null)
		{
	        $model->orden = $orden;
	        $model->propiedadid = $idpropiedad;

	        if(isset($_POST['Imagen']))
	        {
	        	//$usuario = Usuario::model()->findByPk($id);
	            $rnd = rand(0,9999);  // genera numero randomico entre 0-9999
	            $model->attributes=$_POST['Imagen'];
	 
	            $uploadedFile=CUploadedFile::getInstance($model,'archivo');
	            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
	            $model->archivo = $fileName;
	 
	            if($model->save())
	            {

//					$uploadedFile->saveAs('/var/www/inmuebleweb/images/'.$model->archivo);
	//                $uploadedFile->saveAs(Yii::app()->baseUrl.'/images/'.$fileName); // carga imagen al servidor
	                $uploadedFile->saveAs(Yii::app()->basePath.'/images/'.$fileName);  // imagen cargada al servidor

	                $this->redirect(array('propiedad/view','id'=>$model->propiedadid));
	            }
	        }
	        $this->render('create',array(
	            'model'=>$model,
	        ));
        }
		else
		{
			$this->redirect(array('propiedad/view','id'=>$idpropiedad));
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{

		$model=$this->loadModel($id);
 
        if(isset($_POST['Imagen']))
        {
            $_POST['Imagen']['archivo'] = $model->archivo;
            $model->attributes=$_POST['Imagen'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'archivo');
 
            if($model->save())
            {
                if(!empty($uploadedFile))  // check if uploaded file is set or not
                {

//	                $uploadedFile->saveAs(Yii::app()->baseUrl.'/images/'.$fileName); // carga imagen al servidor

                    $uploadedFile->saveAs('/var/www/inmuebleweb/images/'.$model->archivo);
                }
                $this->redirect(array('admin'));
            }
 
        }
 
        $this->render('update',array(
            'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('Imagen');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Imagen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imagen']))
			$model->attributes=$_GET['Imagen'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Imagen::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='imagen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
