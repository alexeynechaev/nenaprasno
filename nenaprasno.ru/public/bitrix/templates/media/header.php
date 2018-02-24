<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500">
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="/assets/build/style.min.css">
    <link rel="stylesheet" href="/assets/style.css">
	<meta property="og:title" content="<?$APPLICATION->ShowTitle();?>" />
	<meta property="og:description" content="<?$APPLICATION->ShowProperty("description");?>">
	<meta property="og:image" content="<?$APPLICATION->ShowProperty("image");?>">
	<meta property="og:image:url" content="<?$APPLICATION->ShowProperty("image");?>">
</head>
<body class="header-fixed">

<header class="main-header">
    <div class="wrapper">
        <a href="/" class="main-header-toggler js-offcanvas">
			<img src="/assets/images/icon-menu.svg">
        </a>

        <a href="/" class="main-header-logo">
            <img src="/assets/images/logo.svg" alt="Profilaktika Media — Ненапрасно" width="230">
        </a>

        <a href="/" class="main-header-logo-mobile">
            <img src="/assets/images/logo-mobile.svg" alt="Profilaktika Media — Ненапрасно" width="120">
        </a>

		<?$APPLICATION->IncludeComponent("bitrix:menu", "main-header-menu", Array("ROOT_MENU_TYPE" => "top", "USE_EXT" => "Y"), false);?>

        <form action="" class="main-header-search">
            <a href="/search/" class="main-header-search-toggle">
				<img src="/assets/images/icon-search.svg">
            </a>
        </form>

        <div class="main-header-userarea">
            <div class="main-header-userarea-links">
                <a href="http://nenaprasno-cabinet.webglyphs.ru/login">Вход</a>
                <br>
                <a href="http://nenaprasno-cabinet.webglyphs.ru/registration">Регистрация</a>
            </div>
        </div>

        <div class="main-header-right-mobile">
            <a href="/search/" class="main-header-search-toggle">
				<img src="/assets/images/icon-search.svg">
            </a>
            <a href="#" class="main-header-user-toggle">
				<img src="/assets/images/icon-lock.svg">
            </a>
        </div>

    </div>
</header>

<div id="offcanvas" class="main-offcanvas-overlay">
	<nav class="main-offcanvas">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "main-offcanvas-menu", Array("ROOT_MENU_TYPE" => "top", "USE_EXT" => "Y"), false);?>
		<div class="main-offcanvas-padding">
			<a href="http://nenaprasno-cabinet.webglyphs.ru/login">Войти</a> &nbsp;|&nbsp; <a href="http://nenaprasno-cabinet.webglyphs.ru/registration">Зарегистрироваться</a>
		</div>
	</nav>
</div>

<main class="main-content m-t-lg m-b-lg">