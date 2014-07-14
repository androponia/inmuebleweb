<?php

class PropiedadController extends Controller
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
				'actions'=>array('admin','view','create','update','delete','buscar'),
				'roles'=>array('director'),
			),
			array('allow',
				'actions'=>array('buscar'),
				'users'=>array('*'),
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

	/*
	*procedimiento para mandar correo y no repetir codigo
	*/
	public function enviarcorreo ($dato1,$dato2,$dato3){
				$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				$mailer->IsSMTP();
			    $mailer->IsHTML(true);
			    $mailer->SMTPAuth = true;
			    $mailer->SMTPSecure = "ssl";
			    $mailer->Host = "smtp.gmail.com";
			    $mailer->Port = 465;
			    $mailer->Username = "inmuebleweb@gmail.com";
			    $mailer->Password = "ceroundostres";
			    $mailer->From = "Notificacion";
			    $mailer->FromName = "inmuebleweb Administracion";
			    $mailer->AddAddress("inmuebleweb@gmail.com");
			    $mailer->Subject ="Se a Eliminado una Propiedad";
			    $nom=Yii::app()->user->name;
			    $mailer->Body='El empleado: '.Yii::app()->user->name.'<br /> A Eliminado la Propiedad de Codigo: '.$id;
				$mailer->Send();
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Propiedad;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Propiedad']))
		{
			$model->attributes=$_POST['Propiedad'];
			if($model->save())
			{
				$dataProvider= new CActiveDataProvider('Propiedad');
				$text=$this->renderPartial('/propiedad/create',	
						array('dataProvider'=>$dataProvider,'model'=>$model),
							true);
				$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				$mailer->IsSMTP();
			    $mailer->IsHTML(true);
			    $mailer->SMTPAuth = true;
			    $mailer->SMTPSecure = "ssl";
			    $mailer->Host = "smtp.gmail.com";
			    $mailer->Port = 465;
			    $mailer->Username = "inmuebleweb@gmail.com";
			    $mailer->Password = "ceroundostres";
			    $mailer->From = "Notificacion";
			    $mailer->FromName = "inmuebleweb Administracion";
			    $mailer->AddAddress("inmuebleweb@gmail.com");
			    $mailer->Subject ="Se a Dado de Alta una Propiedad";
			    //$mailer->MsgHTML($text);
			    $mailer->Body='El empleado: '.Yii::app()->user->name.'<br /> A Dado de Alta la Propiedad de Codigo: '.$model->idpropiedad.'<br /><br />'.$text;
				$mailer->Send();
				$this->redirect(array('view','id'=>$model->idpropiedad));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Propiedad']))
		{
			$model->attributes=$_POST['Propiedad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idpropiedad));
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
			$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
			$mailer->IsSMTP();
		    $mailer->IsHTML(true);
		    $mailer->SMTPAuth = true;
		    $mailer->SMTPSecure = "ssl";
		    $mailer->Host = "smtp.gmail.com";
		    $mailer->Port = 465;
		    $mailer->Username = "inmuebleweb@gmail.com";
		    $mailer->Password = "ceroundostres";
		    $mailer->From = "Notificacion";
		    $mailer->FromName = "inmuebleweb Administracion";
		    $mailer->AddAddress("inmuebleweb@gmail.com");
		    $mailer->Subject ="Se a Eliminado una Propiedad";
		    $nom=Yii::app()->user->name;
		    $mailer->Body='El empleado: '.Yii::app()->user->name.'<br /> A Eliminado la Propiedad de Codigo: '.$id;
			$mailer->Send();
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
		$dataProvider=new CActiveDataProvider('Propiedad');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Propiedad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Propiedad']))
			$model->attributes=$_GET['Propiedad'];

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
		$model=Propiedad::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='propiedad-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionBuscar()
	{
		$nomBarrio=$_POST['buscadorProp'];
			
		$modelb = new Barrio;
    	$modelb = Barrio::model()->findByAttributes(array('nombre'=>$nomBarrio));
    	
    	if ($modelb != null){
	    	$idBarrio = $modelb->idbarrio;
				
			$ubicaciones = Ubicacion::model()->findAllByAttributes(array('barrioid'=>$idBarrio));
			$propiedades=array();

	    	foreach($ubicaciones as $var)
	    	{
	    		$idProp = $var->propiedadid;
	    		$propiedades[] = Propiedad::model()->findAllByAttributes(array('idpropiedad'=>$idProp));
	    	}
	    	
	    	$this->render('hola', array(
						'propiedades'=>$propiedades,
						'ubicaciones'=>$ubicaciones,
					));
	    }

	    else
	    {
	    	$this->render('chau');
	    }


	}
}
