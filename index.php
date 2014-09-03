<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetTitle("om2b");
?>
<?
	if ($_POST['sub']) {
		$fields = array(
				'CUSTOM_NAME' => 'Павел'
		);
		CEvent::Send('ZAYAVKA', SITE_ID, $fields, 'N', 54);
		CModule::IncludeModule('iblock');
		$element = new CIBlockElement();
		$PROP    = array(
				'PHONE' => $_POST['phone'],
				'NAME' => $_POST['name'],
				'EMAIL' => $_POST['email'],
		);
		if ($_FILES['file']) {
			$PROP['FILE'] = CFile::SaveFile($_FILES['file'], 'iblock');
		}
		$element->Add(array(
				'IBLOCK_ID' => 7,
				'NAME' => 'Новая заявка от ' . $_POST['name'],
				'DETAIL_TEXT' => $_POST['message'],
				'PROPERTY_VALUES' => $PROP
		));
		LocalRedirect('/?finish=yes');

	}
	elseif ($_GET['finish']) {
		?>
		<div class = "finish">
			<span class="header">Ваша заявка принята.</span>
			В самое ближайшее
			время с Вами свяжуться наши специалисты. Благодарим за обращение в
			нашу компанию"
			<br>
			<br>
			<a class="button" href="/">Ок</a>
		</div>
	<?
	}
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>