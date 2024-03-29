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
		$id     = $element->Add(array(
				'IBLOCK_ID' => 7,
				'NAME' => 'Новая заявка от ' . $_POST['name'],
				'DETAIL_TEXT' => $_POST['message'],
				'PROPERTY_VALUES' => $PROP
		));
		$fields = array(
				'USER_NAME' => $_POST['name'],
				'PHONE' => $_POST['phone'],
				'EMAIL' => $_POST['email'],
				'DETAIL_TEXT' => $_POST['message']
		);
		CEvent::Send('ZAYAVKA', "s1", $fields);

		LocalRedirect('/?finish=yes&element_id=' . $id);

	}
	elseif ($_GET['finish']) {
		?>
		<div class = "finish">
			<span class = "header">Спасибо, Ваша заявка№ <?= $_REQUEST['element_id'] ?> от <?= date('d/m Yг.') ?> принята.</span>
			В самое ближайшее
			время с Вами свяжуться наши специалисты. Благодарим за обращение в
			нашу компанию
			<br>
			<strong>OM2B – Отлаженный Механизм для Вашего Бизнеса.</strong>
			<br>
			Благодарим за обращение в нашу компанию!
			<a class = "button" href = "/">ОK</a>
		</div>
	<?
	}
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>