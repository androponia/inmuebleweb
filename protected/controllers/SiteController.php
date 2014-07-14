<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		
		//Agarro los id de los 6 destacados
		
		$arrayIdDestacado=Destacado::model()->findAll(array('select'=>'iddestacado'));		
		//echo '<br><br><br><br><br><pre>', print_r($arrayIdDestacado),'</pre>';
		//Creo un array para cargarle las 6 propiedades buscadas con los id's destacado
		
		foreach($arrayIdDestacado as $val)
		{
			$idPropiedad[] = Destacado::model()->find(array(
				'select'=>'idpropiedad',
				'condition'=>'iddestacado='.$val->iddestacado,
				));
		}
		//$idPropiedad tiene los 6 idpropiedad de los destacados
		//echo '<br><br><br><br><br><pre>', print_r($idPropiedad),'</pre>';

		//Cargo las url de las imagenes de todas las propiedades, pero todas juntas hay que diferenciarlas por propiedad
		
		foreach($idPropiedad as $val)
		{	
			//$arrayFinal[]=$val->idpropiedad;
			$urlImagenes[] = Imagen::model()->findAll(array(
				'select'=>'archivo',
				'condition'=>'propiedadid='.$val->idpropiedad,
				));
		}
		
		$this->render('index', array(
					'arrayUrl'=>$urlImagenes
			));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				/*$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";*/
					
///////////////////////////ENVIAR CORREO
			//con index funciona
			$dataProvider= new CActiveDataProvider('ContactForm');
			$text=$this->renderPartial('/site/contact',	
						array('dataProvider'=>$dataProvider,'model'=>$model),
							true);
			/*$this->render('index',array(
					'dataProvider'=>$dataProvider,));*/
///////////////////////////////////////
			 $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
		     $mailer->IsSMTP();
		     $mailer->IsHTML(true);
		     $mailer->SMTPAuth = true;
		     $mailer->SMTPSecure = "ssl";
		     $mailer->Host = "smtp.gmail.com";
		     $mailer->Port = 465;
		     $mailer->Username = "inmuebleweb@gmail.com";
		     $mailer->Password = "ceroundostres";
		     //$mailer->Username = $model->email;
		     //$mailer->Password = $model->password;
		     $mailer->From = $model->email;
		     $mailer->FromName = $model->name;

		     $mailer->AddAddress("inmuebleweb@gmail.com");

		     $mailer->Subject = $model->subject;

		     //asigno un archivo adjunto al mensaje
			 //$mailer­>AddAttachment("ruta/archivo_adjunto.gif");
		     //$mailer->Body = "ESTo es lo que necesito";

		     //$mailer->MsgHTML($model->name.$model->body.$model->email);
		     $mailer->MsgHTML($text);
			 $mailer->Send();
		    /* if($mailer->Send()) {
		          echo "Mensaje enviado con Exito!";
		     }
		     else {
		     	//$mailer­>ErrorInfo
		          echo "Error: Mensaje no enviado";
     		};*/
///////////////////////////////FIN ENVIAR COOREO
				//mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Gracias por contactarnos, tendra noticias nuestras pronto.
											InmoviliariaWeb');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model)); 
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	
}