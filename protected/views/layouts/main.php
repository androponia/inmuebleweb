<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->bootstrap->register(); ?>
	
</head>

<body style="background-color:rgba(120,120,120, .8); margin: 8px;">

<div class="container" id="page">
	<div class="header">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    		'type'=>'inverse', // null or 'inverse'
    		'brand'=>'InmuebleWeb',
    		'brandUrl'=>'#',
    		'collapse'=>true, // requires bootstrap-responsive.css
    		'items'=>array(
        		'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Buscar"></form>',
        		array(
            		'class'=>'bootstrap.widgets.TbMenu',
            		'htmlOptions'=>array('class'=>'pull-right'),
            		'items'=>array(
                		array('label'=>'Login', 'url'=>'#', 'items'=>array(
                    		array('label'=>'Action', 'url'=>'#'),
                    		array('label'=>'Another action', 'url'=>'#'),
                    		'---',
                    		array('label'=>'Separated link', 'url'=>'#'),
                		)),
            		),
        		),
    		),
		)); ?>
	</div><!-- header -->
	<div class="mainCont">
		<div class="menuLateral">
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
    			'type'=>'list', // '', 'tabs', 'pills' (or 'list')
    			'stacked'=>false, // whether this is a stacked menu
    			'items'=>array(
        			array('label'=>'Home', 'url'=>'#', 'active'=>true),
        			array('label'=>'Profile', 'url'=>'#'),
        			array('label'=>'Messages', 'url'=>'#'),
        			array('label'=>'Profile', 'url'=>'#'),
        			array('label'=>'Messages', 'url'=>'#'),
        			array('label'=>'Profile', 'url'=>'#'),
        			array('label'=>'Messages', 'url'=>'#'),
        			array('label'=>'Profile', 'url'=>'#'),
        			array('label'=>'Messages', 'url'=>'#'),
        			array('label'=>'Profile', 'url'=>'#'),
        			array('label'=>'Messages', 'url'=>'#'),
    			),
			)); ?>
		</div><!-- menuLateral -->
		<div class="carousel">
				<?php echo $content; ?>
		</div><!-- carousel -->
	</div><!-- mainCont -->
	
	<div class="mainFooter">
        <center><p>CopyRight &copy; 2013 <a href="#">inmuebleweb.com</a></p></center>
        <center> <p>All right Reserved</p> </center>
    </div><!-- footer -->
</div><!-- page -->

</body>
</html>





