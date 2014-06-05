<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Casa', 'url'=>array('/site/index')),
                	
                	//para ir viendo he ir probando 
                //obviamente no se necesitan todas las solapas
                 	array('label'=>'Barrio', 'url'=>array('/barrio/index')),
					array('label'=>'Ciudad', 'url'=>array('/ciudad/index')),
					array('label'=>'Cliente', 'url'=>array('/cliente/index')),
					array('label'=>'Departamento', 'url'=>array('/departamento/index')),
					array('label'=>'Destacado', 'url'=>array('/destacado/index')),
					array('label'=>'Empleado', 'url'=>array('/empleado/index')),
					array('label'=>'Imagen', 'url'=>array('/imagen/index')),
					array('label'=>'Pais', 'url'=>array('/pais/index')),
					array('label'=>'Propiedad', 'url'=>array('/propiedad/index')),
					array('label'=>'Requerida', 'url'=>array('/requerida/index')),
					array('label'=>'TipoUsuario', 'url'=>array('/tipousuario/index')),
					array('label'=>'Ubicacion', 'url'=>array('/ubicacion/index')),
					array('label'=>'Usuario', 'url'=>array('/usuario/index')),
					array('label'=>'Visita', 'url'=>array('/visita/index')),

                array('label'=>'Acerca de ', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); 

?>
<br />
<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
