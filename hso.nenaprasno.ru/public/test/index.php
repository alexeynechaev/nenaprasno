<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
<main id="vue-app" class="main-content">
    <div class="wrapper">

        <? if (! $USER->IsAuthorized()): ?>
            <? include(__DIR__ . '/templates/login.php'); ?>
        <? else: ?>
            <? include(__DIR__ . '/templates/testClosed.php'); ?>
        <? endif ?>
    </div>
</main>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>