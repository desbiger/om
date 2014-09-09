<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("mail-test");
?>

<?
	$fields = array(
		'USER_NAME' => 'Пользователь',
		'PHONE' => '123-45-67'
	);
CEvent::Send('ZAYAVKA', "s1", $fields);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>