<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php 
	/*******************************************************
	// Импортируем пространство имен
	********************************************************/
	use Bitrix\Main\Page\Asset; 

	$APPLICATION->ShowHead(); 

 ?>

<!DOCTYPE HTML>
<html>
<head>
 
<title><?$APPLICATION->ShowTitle()?></title>
 


<?php 
	/*******************************************************
	// Подключаем Css
	********************************************************/
	Asset::getInstance()->addCss(SITE_TEMPLATE_DEFAULT.'/css/bootstrap.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_DEFAULT.'/css/style.css'); 

	/*******************************************************
	// Подключаем JS скрипты
	********************************************************/
	//CJSCore::Init(['jquery']); //Из самого Битрикс
	Asset::getInstance()->addJs(SITE_TEMPLATE_DEFAULT.'/js/jquery.min.js'); 
	Asset::getInstance()->addJs(SITE_TEMPLATE_DEFAULT.'/js/jquery.flexisel.js'); 
	Asset::getInstance()->addJs(SITE_TEMPLATE_DEFAULT.'/js/responsiveslides.min.js'); 

	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">'); 
	Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>");
	Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>");  


 ?>


 
 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


 
<!-- <script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script> -->
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
	
</head>
<body>

 


	<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>
<!-- header -->
	<div class="header">
		<div class="container">

				<div class="logo">
				<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/include/logo.php"
				)
				);?>
				</div>
			
<div class="head-nav">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
							0 => "",
						),
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"ROOT_MENU_TYPE" => "Main",	// Тип меню для первого уровня
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
					false
				);?>
</div>				
					<!-- 
					<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-1">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="404.html">Shortcodes</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="contact.html">Contact</a></li>
										<div class="clearfix"></div>
						</ul> 
					</div>
					-->
				
						<!-- script-for-nav -->
							<script>
								$( "span.menu" ).click(function() {
								  $( ".head-nav ul" ).slideToggle(300, function() {
									// Animation complete.
								  });
								});
							</script>
						<!-- script-for-nav -->
				
						
			
					<div class="clearfix"> </div>
		</div>
	</div>
<!-- header -->
	<!-- Blog -->
	<div class="container">
		<div class="blog">
			
		<div class="blog-content">
					<div class="blog-content-left">