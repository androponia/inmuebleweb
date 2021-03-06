<?php

class HipotecaController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Calculo hipoteca.
	 */
	public function actionCreate()
	{
		$model=new Hipoteca;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

			

		if(isset($_POST['Hipoteca']))
		{
			$model->attributes=$_POST['Hipoteca'];


	      $requestParams = array('LoanAmount' => $model->importedelprestamo,
	      						'ResidualValue' => $model->valorresidual, 
                             'InterestRate' => $model->tasadeinteres,
                             'Months' => $model->meses);

 			$objClienteSOAP = new SoapClient('http://www.webservicex.net/FinanceService.asmx?WSDL');
			 $response = $objClienteSOAP->LeaseMonthlyPayment($requestParams); 


			 $this->render('calculo', array('calculo' => $response->LeaseMonthlyPaymentResult, 'LoanAmount' => $model->importedelprestamo,
	      						'ResidualValue' => $model->valorresidual, 
                             'InterestRate' => $model->tasadeinteres,
                             'Months' => $model->meses));
			 	
			   
			   
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{


		



				$dataProvider=new CActiveDataProvider('Hipoteca');
				$this->render('index',array(
					'dataProvider'=>$dataProvider,
				));


	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Hipoteca::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='hipoteca-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
public function calcularHipoteca()
{

		
}
}
