<div class = "main_banner">
	<div class = "banner">
		<img src = "include/img/banner.jpg" alt = ""/>
	</div>
</div>
<div class = "content">
<div id = "catalog">
	<div class = "center_block">
<!--		--><?//$APPLICATION->IncludeComponent("bitrix:catalog.section", "catalog", array(
//				"IBLOCK_TYPE" => "base",
//				"IBLOCK_ID" => "8",
//				"SECTION_ID" => "",
//				"SECTION_CODE" => "",
//				"SECTION_USER_FIELDS" => array(
//						0 => "TECH",
//						1 => "",
//				),
//				"ELEMENT_SORT_FIELD" => "sort",
//				"ELEMENT_SORT_ORDER" => "asc",
//				"ELEMENT_SORT_FIELD2" => "id",
//				"ELEMENT_SORT_ORDER2" => "desc",
//				"FILTER_NAME" => "arrFilter",
//				"INCLUDE_SUBSECTIONS" => "Y",
//				"SHOW_ALL_WO_SECTION" => "Y",
//				"HIDE_NOT_AVAILABLE" => "N",
//				"PAGE_ELEMENT_COUNT" => "",
//				"LINE_ELEMENT_COUNT" => "",
//				"PROPERTY_CODE" => array(
//						0 => "TECH",
//						1 => "",
//				),
//				"OFFERS_LIMIT" => "5",
//				"TEMPLATE_THEME" => "blue",
//				"ADD_PICT_PROP" => "-",
//				"LABEL_PROP" => "-",
//				"PRODUCT_SUBSCRIPTION" => "N",
//				"SHOW_DISCOUNT_PERCENT" => "N",
//				"SHOW_OLD_PRICE" => "N",
//				"MESS_BTN_BUY" => "Купить",
//				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
//				"MESS_BTN_SUBSCRIBE" => "Подписаться",
//				"MESS_BTN_DETAIL" => "Подробнее",
//				"MESS_NOT_AVAILABLE" => "Нет в наличии",
//				"SECTION_URL" => "",
//				"DETAIL_URL" => "",
//				"SECTION_ID_VARIABLE" => "SECTION_ID",
//				"AJAX_MODE" => "N",
//				"AJAX_OPTION_JUMP" => "N",
//				"AJAX_OPTION_STYLE" => "Y",
//				"AJAX_OPTION_HISTORY" => "N",
//				"CACHE_TYPE" => "N",
//				"CACHE_TIME" => "36000000",
//				"CACHE_GROUPS" => "Y",
//				"SET_META_KEYWORDS" => "Y",
//				"META_KEYWORDS" => "-",
//				"SET_META_DESCRIPTION" => "Y",
//				"META_DESCRIPTION" => "-",
//				"BROWSER_TITLE" => "-",
//				"ADD_SECTIONS_CHAIN" => "N",
//				"DISPLAY_COMPARE" => "N",
//				"SET_TITLE" => "Y",
//				"SET_STATUS_404" => "N",
//				"CACHE_FILTER" => "N",
//				"PRICE_CODE" => array(),
//				"USE_PRICE_COUNT" => "N",
//				"SHOW_PRICE_COUNT" => "1",
//				"PRICE_VAT_INCLUDE" => "Y",
//				"CONVERT_CURRENCY" => "N",
//				"BASKET_URL" => "/personal/basket.php",
//				"ACTION_VARIABLE" => "action",
//				"PRODUCT_ID_VARIABLE" => "id",
//				"USE_PRODUCT_QUANTITY" => "N",
//				"ADD_PROPERTIES_TO_BASKET" => "Y",
//				"PRODUCT_PROPS_VARIABLE" => "prop",
//				"PARTIAL_PRODUCT_PROPERTIES" => "N",
//				"PRODUCT_PROPERTIES" => array(),
//				"PAGER_TEMPLATE" => ".default",
//				"DISPLAY_TOP_PAGER" => "N",
//				"DISPLAY_BOTTOM_PAGER" => "Y",
//				"PAGER_TITLE" => "Товары",
//				"PAGER_SHOW_ALWAYS" => "Y",
//				"PAGER_DESC_NUMBERING" => "N",
//				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//				"PAGER_SHOW_ALL" => "Y",
//				"AJAX_OPTION_ADDITIONAL" => "",
//				"PRODUCT_QUANTITY_VARIABLE" => "quantity"
//		), false);?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"catalog", 
	array(
		"IBLOCK_TYPE" => "base",
		"IBLOCK_ID" => "8",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?>
	</div>
</div>
<div id = "pricing">
	<a class = "button fancyboxBgNone" href = "#feedback">Узнать стоимость</a>
</div>
<div id = "experts">
	<div class = "star center_block">
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "specialists", array(
				"IBLOCK_TYPE" => "base",
				"IBLOCK_ID" => "6",
				"SECTION_ID" => "",
				"SECTION_CODE" => "",
				"SECTION_USER_FIELDS" => array(
						0 => "",
						1 => "",
				),
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER2" => "desc",
				"FILTER_NAME" => "arrFilter",
				"INCLUDE_SUBSECTIONS" => "Y",
				"SHOW_ALL_WO_SECTION" => "Y",
				"HIDE_NOT_AVAILABLE" => "N",
				"PAGE_ELEMENT_COUNT" => "",
				"LINE_ELEMENT_COUNT" => "",
				"PROPERTY_CODE" => array(
						0 => "EMAIL",
						1 => "ICQ",
						2 => "SKYPE",
						3 => "DOLZH",
						4 => "MOB",
						5 => "PHONE",
						6 => "",
				),
				"OFFERS_LIMIT" => "5",
				"TEMPLATE_THEME" => "blue",
				"ADD_PICT_PROP" => "-",
				"LABEL_PROP" => "-",
				"PRODUCT_SUBSCRIPTION" => "N",
				"SHOW_DISCOUNT_PERCENT" => "N",
				"SHOW_OLD_PRICE" => "N",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"SECTION_URL" => "",
				"DETAIL_URL" => "",
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"META_KEYWORDS" => "-",
				"SET_META_DESCRIPTION" => "Y",
				"META_DESCRIPTION" => "-",
				"BROWSER_TITLE" => "-",
				"ADD_SECTIONS_CHAIN" => "N",
				"DISPLAY_COMPARE" => "N",
				"SET_TITLE" => "Y",
				"SET_STATUS_404" => "N",
				"CACHE_FILTER" => "N",
				"PRICE_CODE" => array(),
				"USE_PRICE_COUNT" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"PRICE_VAT_INCLUDE" => "Y",
				"CONVERT_CURRENCY" => "N",
				"BASKET_URL" => "/personal/basket.php",
				"ACTION_VARIABLE" => "action",
				"PRODUCT_ID_VARIABLE" => "id",
				"USE_PRODUCT_QUANTITY" => "N",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRODUCT_PROPERTIES" => array(),
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => "Товары",
				"PAGER_SHOW_ALWAYS" => "Y",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"AJAX_OPTION_ADDITIONAL" => "",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity"
		), false);?>
	</div>
</div>
<div id = "certif">
	<div class = "center_block">
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "sertif", Array(
				"IBLOCK_TYPE" => "base",
			// Тип инфоблока
				"IBLOCK_ID" => "5",
			// Инфоблок
				"SECTION_ID" => "",
			// ID раздела
				"SECTION_CODE" => "",
			// Код раздела
				"SECTION_USER_FIELDS" => array( // Свойства раздела
						0 => "",
						1 => "",
				),
				"ELEMENT_SORT_FIELD" => "sort",
			// По какому полю сортируем элементы
				"ELEMENT_SORT_ORDER" => "asc",
			// Порядок сортировки элементов
				"ELEMENT_SORT_FIELD2" => "id",
			// Поле для второй сортировки элементов
				"ELEMENT_SORT_ORDER2" => "desc",
			// Порядок второй сортировки элементов
				"FILTER_NAME" => "arrFilter",
			// Имя массива со значениями фильтра для фильтрации элементов
				"INCLUDE_SUBSECTIONS" => "Y",
			// Показывать элементы подразделов раздела
				"SHOW_ALL_WO_SECTION" => "Y",
			// Показывать все элементы, если не указан раздел
				"HIDE_NOT_AVAILABLE" => "N",
			// Не отображать товары, которых нет на складах
				"PAGE_ELEMENT_COUNT" => "",
			// Количество элементов на странице
				"LINE_ELEMENT_COUNT" => "",
			// Количество элементов выводимых в одной строке таблицы
				"PROPERTY_CODE" => array( // Свойства
						0 => "",
						1 => "",
				),
				"OFFERS_LIMIT" => "5",
			// Максимальное количество предложений для показа (0 - все)
				"TEMPLATE_THEME" => "blue",
			// Цветовая тема
				"ADD_PICT_PROP" => "-",
			// Дополнительная картинка основного товара
				"LABEL_PROP" => "-",
			// Свойство меток товара
				"PRODUCT_SUBSCRIPTION" => "N",
			// Разрешить оповещения для отсутствующих товаров
				"SHOW_DISCOUNT_PERCENT" => "N",
			// Показывать процент скидки
				"SHOW_OLD_PRICE" => "N",
			// Показывать старую цену
				"MESS_BTN_BUY" => "Купить",
			// Текст кнопки "Купить"
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
			// Текст кнопки "Добавить в корзину"
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
			// Текст кнопки "Уведомить о поступлении"
				"MESS_BTN_DETAIL" => "Подробнее",
			// Текст кнопки "Подробнее"
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
			// Сообщение об отсутствии товара
				"SECTION_URL" => "",
			// URL, ведущий на страницу с содержимым раздела
				"DETAIL_URL" => "",
			// URL, ведущий на страницу с содержимым элемента раздела
				"SECTION_ID_VARIABLE" => "SECTION_ID",
			// Название переменной, в которой передается код группы
				"AJAX_MODE" => "N",
			// Включить режим AJAX
				"AJAX_OPTION_JUMP" => "N",
			// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",
			// Включить подгрузку стилей
				"AJAX_OPTION_HISTORY" => "N",
			// Включить эмуляцию навигации браузера
				"CACHE_TYPE" => "N",
			// Тип кеширования
				"CACHE_TIME" => "36000000",
			// Время кеширования (сек.)
				"CACHE_GROUPS" => "Y",
			// Учитывать права доступа
				"SET_META_KEYWORDS" => "Y",
			// Устанавливать ключевые слова страницы
				"META_KEYWORDS" => "-",
			// Установить ключевые слова страницы из свойства
				"SET_META_DESCRIPTION" => "Y",
			// Устанавливать описание страницы
				"META_DESCRIPTION" => "-",
			// Установить описание страницы из свойства
				"BROWSER_TITLE" => "-",
			// Установить заголовок окна браузера из свойства
				"ADD_SECTIONS_CHAIN" => "N",
			// Включать раздел в цепочку навигации
				"DISPLAY_COMPARE" => "N",
			// Выводить кнопку сравнения
				"SET_TITLE" => "Y",
			// Устанавливать заголовок страницы
				"SET_STATUS_404" => "N",
			// Устанавливать статус 404, если не найдены элемент или раздел
				"CACHE_FILTER" => "N",
			// Кешировать при установленном фильтре
				"PRICE_CODE" => "",
			// Тип цены
				"USE_PRICE_COUNT" => "N",
			// Использовать вывод цен с диапазонами
				"SHOW_PRICE_COUNT" => "1",
			// Выводить цены для количества
				"PRICE_VAT_INCLUDE" => "Y",
			// Включать НДС в цену
				"CONVERT_CURRENCY" => "N",
			// Показывать цены в одной валюте
				"BASKET_URL" => "/personal/basket.php",
			// URL, ведущий на страницу с корзиной покупателя
				"ACTION_VARIABLE" => "action",
			// Название переменной, в которой передается действие
				"PRODUCT_ID_VARIABLE" => "id",
			// Название переменной, в которой передается код товара для покупки
				"USE_PRODUCT_QUANTITY" => "N",
			// Разрешить указание количества товара
				"ADD_PROPERTIES_TO_BASKET" => "Y",
			// Добавлять в корзину свойства товаров и предложений
				"PRODUCT_PROPS_VARIABLE" => "prop",
			// Название переменной, в которой передаются характеристики товара
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
			// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
				"PRODUCT_PROPERTIES" => "",
			// Характеристики товара
				"PAGER_TEMPLATE" => ".default",
			// Шаблон постраничной навигации
				"DISPLAY_TOP_PAGER" => "N",
			// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "Y",
			// Выводить под списком
				"PAGER_TITLE" => "Товары",
			// Название категорий
				"PAGER_SHOW_ALWAYS" => "Y",
			// Выводить всегда
				"PAGER_DESC_NUMBERING" => "N",
			// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "Y",
			// Показывать ссылку "Все"
				"AJAX_OPTION_ADDITIONAL" => "",
			// Дополнительный идентификатор
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			// Название переменной, в которой передается количество товара
		), false);?>

	</div>
</div>
<div id = "vantage">
	<h2>Мы работаем честно и открыто, а бывает...</h2>
	<img src = "include/img/vantage.png" alt = ""/>
</div>
<div id = "vantage2">
	<div class = "center_block">
		<h2>Почему стоит работать с нами</h2>

		<div class = "text">
			<p>Все решения в одном месте</p>
			<span class = "star"></span>

			<p>Мы любим и ценим<br/>наших клиентов</p>
			<span class = "star"></span>

			<p>Мы открыты к любому сотрудничеству</p>
			<span class = "star"></span>

			<p>Приветливые и опытные специалисты</p>
			<span class = "star"></span>

			<p>Мы всегда идём на встречу</p>
		</div>
		<div class = "feedback">
			<form method = "POST" enctype = "multipart/form-data">
				<p class = "title">Оставьте заявку <br/>прямо сейчас и получите дополнительные скидки</p>
				<input class = "name" type = "text" name = "name" placeholder = "Имя" />
				<input class = "phone" type = "text" name = "phone" placeholder = "Телефон" />
				<input class = "email" type = "email" name = "email" placeholder = "E-mail" required/>
				<textarea class = "message" name = "message" placeholder = "Сообщение" required></textarea>
				<label for = "file4" class = "attach">Прикрепить файл заявки</label>
				<input class = "submit" name = "sub" type = "submit" value = "Отправить заявку"/>
				<input name = "file" id = "file4" type = "file" style = "display: none"/>
			</form>
		</div>
	</div>
</div>
<div id = "partners">
	<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "nas_vibrali", array(
			"IBLOCK_TYPE" => "base",
			"IBLOCK_ID" => "9",
			"SECTION_ID" => "",
			"SECTION_CODE" => "",
			"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
			),
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_ORDER" => "asc",
			"ELEMENT_SORT_FIELD2" => "id",
			"ELEMENT_SORT_ORDER2" => "desc",
			"FILTER_NAME" => "arrFilter",
			"INCLUDE_SUBSECTIONS" => "Y",
			"SHOW_ALL_WO_SECTION" => "Y",
			"HIDE_NOT_AVAILABLE" => "N",
			"PAGE_ELEMENT_COUNT" => "",
			"LINE_ELEMENT_COUNT" => "",
			"PROPERTY_CODE" => array(
					0 => "",
					1 => "PHOTO",
			),
			"OFFERS_LIMIT" => "5",
			"TEMPLATE_THEME" => "blue",
			"ADD_PICT_PROP" => "-",
			"LABEL_PROP" => "-",
			"PRODUCT_SUBSCRIPTION" => "N",
			"SHOW_DISCOUNT_PERCENT" => "N",
			"SHOW_OLD_PRICE" => "N",
			"MESS_BTN_BUY" => "Купить",
			"MESS_BTN_ADD_TO_BASKET" => "В корзину",
			"MESS_BTN_SUBSCRIBE" => "Подписаться",
			"MESS_BTN_DETAIL" => "Подробнее",
			"MESS_NOT_AVAILABLE" => "Нет в наличии",
			"SECTION_URL" => "",
			"DETAIL_URL" => "",
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "N",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"META_KEYWORDS" => "-",
			"SET_META_DESCRIPTION" => "Y",
			"META_DESCRIPTION" => "-",
			"BROWSER_TITLE" => "-",
			"ADD_SECTIONS_CHAIN" => "N",
			"DISPLAY_COMPARE" => "N",
			"SET_TITLE" => "Y",
			"SET_STATUS_404" => "N",
			"CACHE_FILTER" => "N",
			"PRICE_CODE" => array(),
			"USE_PRICE_COUNT" => "N",
			"SHOW_PRICE_COUNT" => "1",
			"PRICE_VAT_INCLUDE" => "Y",
			"CONVERT_CURRENCY" => "N",
			"BASKET_URL" => "/personal/basket.php",
			"ACTION_VARIABLE" => "action",
			"PRODUCT_ID_VARIABLE" => "id",
			"USE_PRODUCT_QUANTITY" => "N",
			"ADD_PROPERTIES_TO_BASKET" => "Y",
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"PARTIAL_PRODUCT_PROPERTIES" => "N",
			"PRODUCT_PROPERTIES" => array(),
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Товары",
			"PAGER_SHOW_ALWAYS" => "Y",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "Y",
			"AJAX_OPTION_ADDITIONAL" => "",
			"PRODUCT_QUANTITY_VARIABLE" => "quantity"
	), false);?>
</div>
<div id = "reviews">
	<div class = "center_block">
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "otzivy", array(
				"IBLOCK_TYPE" => "base",
				"IBLOCK_ID" => "10",
				"SECTION_ID" => "",
				"SECTION_CODE" => "",
				"SECTION_USER_FIELDS" => array(
						0 => "",
						1 => "",
				),
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER2" => "desc",
				"FILTER_NAME" => "arrFilter",
				"INCLUDE_SUBSECTIONS" => "Y",
				"SHOW_ALL_WO_SECTION" => "Y",
				"HIDE_NOT_AVAILABLE" => "N",
				"PAGE_ELEMENT_COUNT" => "",
				"LINE_ELEMENT_COUNT" => "",
				"PROPERTY_CODE" => array(
						0 => "PHOTO",
				),
				"OFFERS_LIMIT" => "5",
				"TEMPLATE_THEME" => "blue",
				"ADD_PICT_PROP" => "-",
				"LABEL_PROP" => "-",
				"PRODUCT_SUBSCRIPTION" => "N",
				"SHOW_DISCOUNT_PERCENT" => "N",
				"SHOW_OLD_PRICE" => "N",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"SECTION_URL" => "",
				"DETAIL_URL" => "",
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"META_KEYWORDS" => "-",
				"SET_META_DESCRIPTION" => "Y",
				"META_DESCRIPTION" => "-",
				"BROWSER_TITLE" => "-",
				"ADD_SECTIONS_CHAIN" => "N",
				"DISPLAY_COMPARE" => "N",
				"SET_TITLE" => "Y",
				"SET_STATUS_404" => "N",
				"CACHE_FILTER" => "N",
				"PRICE_CODE" => array(),
				"USE_PRICE_COUNT" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"PRICE_VAT_INCLUDE" => "Y",
				"CONVERT_CURRENCY" => "N",
				"BASKET_URL" => "/personal/basket.php",
				"ACTION_VARIABLE" => "action",
				"PRODUCT_ID_VARIABLE" => "id",
				"USE_PRODUCT_QUANTITY" => "N",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRODUCT_PROPERTIES" => array(),
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => "Товары",
				"PAGER_SHOW_ALWAYS" => "Y",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"AJAX_OPTION_ADDITIONAL" => "",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity"
		), false);?>
	</div>
</div>
<div id = "schema">
	<div class = "center_block">
		<h2>Как мы работаем с 1996г.</h2>

		<div class = "steps">
			<p class = "step1">Вы отправляете нам заявку или звоните по бесплатному номеру <br/>8 800 250-10-09</p>

			<p class = "step2">С Вами свяжется<br/> наш мененджер. Проконсультирует <br/>при необходимости. Согласует цены, скидки, сроки
			                   поставки.</p>

			<p class = "step3">Мы выставляем вам счет и заключаем договор поставки.</p>

			<p class = "step4">Мы выполняем поставку.</p>

			<p class = "step5">Вы становитесь постоянным клиентом. Мы дарим подарки и предоставляем отсрочку платежей.</p>
		</div>
	</div>
</div>
<div id = "payment">
	<div class = "center_block">
		<h2>Доставка и оплата</h2>

		<div class = "oplata">
			<div class = "box">
				<h3>Способы оплаты</h3>
				<ul>
					<li>Наличный расчёт в магазине «АВАНГАРД ОМ»</li>
					<li>Безналичный расчёт</li>
					<li>Отсрочка платежей постоянным клиентам</li>
				</ul>
				<a href = "#reqizit" class = "details fancybox">Реквизиты для оплаты</a>

				<div id = "reqizit">
					<h2>Реквизиты ООО ПМТС «ОМ» <br/> для безналичных банковских платежей</h2>

					<p>
						Получатель: <b> ООО Предприятие Материально-Технического Снабжения «ОМ»</b>
						<br/>Адрес юридический и почтовый: <b>305010, РФ, г. Курск, ул. Коммунальная, д. 1А </b>
					</p>
					<br/>
					<table>
						<tr>
							<td>ИНН</td>
							<td>463 100 87 39</td>
							<td>ОКПО</td>
							<td>354 267 64</td>
						</tr>
						<tr>
							<td>КПП</td>
							<td>463 201 001</td>
							<td>ОКВЭД</td>
							<td>51.70.</td>
						</tr>
						<tr>
							<td>ОГРН</td>
							<td>102 460 096 74 12</td>
							<td>ОКОПФ</td>
							<td>65</td>
						</tr>
						<tr>
							<td colspan = "4"><br/></td>
						</tr>
						<tr>
							<td colspan = "2">1) Расчётный счёт для платежей в <span class = "orange">рублях</span> РФ:</td>
							<td colspan = "2">407 028 107 192 000 24 673</td>
						</tr>
						<tr>
							<td colspan = "2"></td>
							<td colspan = "2">в ОАО АКБ «АВАНГАРД» г. Москва</td>
						</tr>
						<tr>
							<td colspan = "2">Корр. счёт</td>
							<td colspan = "2">301 018 100 000 000 00 201</td>
						</tr>
						<tr>
							<td colspan = "2">БИК</td>
							<td colspan = "2">044 525 201</td>
						</tr>
						<tr>
							<td colspan = "2"></td>
							<td colspan = "2"></td>
						</tr>
						<tr>
							<td colspan = "4"><br/></td>
						</tr>
						<tr>
							<td colspan = "2">2) Расчётные счёта для платежей в валюте:</td>
							<td colspan = "2"><br/><br/></td>
						</tr>
						<tr>
							<td colspan = "2">2.1) Расчётный счёт в <span class = "orange">долларах США</span> :</td>
							<td colspan = "2">407 029 786 192 000 24 673</td>
						</tr>
						<tr>
							<td colspan = "2"></td>
							<td colspan = "2">в ОАО АКБ «АВАНГАРД» г. Москва</td>
						</tr>
						<tr>
							<td colspan = "2">Корр. счёт</td>
							<td colspan = "2">301 018 100 000 000 00 201</td>
						</tr>
						<tr>
							<td colspan = "2">БИК</td>
							<td colspan = "2">044 525 201</td>
						</tr>
						<tr>
							<td colspan = "4"><br/></td>
						</tr>
						<tr>
							<td colspan = "2">2.2) Расчётный счёт в <span class = "orange">ЕВРО</span> :</td>
							<td colspan = "2">407 029 782 330 000 08 531</td>
						</tr>
						<tr>
							<td colspan = "2"></td>
							<td colspan = "2">в Курском ОСБ № 8596/005 СБ РФ</td>
						</tr>
						<tr>
							<td colspan = "2">Корр. счёт</td>
							<td colspan = "2">301 018 103 000 000 00 606</td>
						</tr>
						<tr>
							<td colspan = "2">БИК</td>
							<td colspan = "2">043 807 606</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class = "dostavka">
			<div class = "box">
				<h3>Способы доставки</h3>
				<ul>
					<li>Самовывоз из магазина в центре города или из офиса/склада в ЖД округе</li>
					<li>Автотранспортом по городу Курску и области</li>
					<li>Транспортными компаниями</li>
					<li>Ж\д транспортом</li>
					<li>Авиабагажом</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id = "contacts">
	<div class = "center_block">
		<div class = "feedback">
			<form method = "POST" enctype = "multipart/form-data">
				<p class = "title">Оставьте заявку <br/>прямо сейчас и получите дополнительные скидки</p>
				<input class = "name" type = "text" name = "name" placeholder = "Имя" />
				<input class = "phone" type = "text" name = "phone" placeholder = "Телефон" />
				<input class = "email" type = "email" name = "email" placeholder = "E-mail" required/>
				<textarea class = "message" name = "message" placeholder = "Сообщение" required></textarea>
				<label for = "file3" class = "attach">Прикрепить файл заявки</label>
				<input class = "submit" name = "sub" type = "submit" value = "Отправить заявку"/>
				<input name = "file" id = "file3" type = "file" style = "display: none"/>
			</form>
		</div>
	</div>
	<script type = "text/javascript" charset = "utf-8" src = "//api-maps.yandex.ru/services/constructor/1.0/js/?sid=7pZZGffJfY4AwbVPSiQZTrcPaOMipDOv&width=100%&height=400"></script>
</div>
</div>
<div class = "footer">
	<div class = "center_block">
		<div class = "box1">
			<div class = "logo">
				<img src = "include/img/logo_footer.png" alt = ""/>
			</div>
			<div class = "slang">
				<h1>Комплексное снабжение</h1>
				<span>с доставкой по России <br/> и Таможенному союзу</span>
			</div>
			<div class = 'hitmedia'>Разработка сайта <a href = 'http://hit-media.ru/'>High Tech Media</a></div>

			<a href = "http://vk.com/prom46" class = "vk" target = "_blank">Присоединяйтесь к нам</a>
		</div>
		<div class = "box2">
			<h3 class = "name">офис ПМТС «ОМ»</h3>

			<p>г. Курск, ул. Коммунальная, 1-А</p>

			<p>
				<span class = "blue">т/ф: </span>
				<span>(4712) 39-39-09, 39-39-08,</span>
				<span class = "space">34-22-02, 34-22-42</span>
			</p>

			<p>
				<span class = "blue">E-mail: </span> om@prom46.ru
			</p>

			<p>
				<span class = "blue">Скайп: </span> elena-om
			</p>

			<p>
				<span class = "blue">Моб.: </span> +7 910 740-96-21
			</p>

			<p>
				<span class = "blue">Офисный: </span> +7 920 736-39-09
			</p>

		</div>
		<div class = "box3">
			<p class = "fs">Звонок по России бесплатный</p>

			<p class = "phone">8 800 250-10-09</p>

			<h3 class = "name">магазин "АВАНГАРД ОМ"</h3>

			<p>г. Курск, ул. Пионеров д. 1-А </p>

			<p>
				<span class = "blue">т/ф: </span>
				(4712) 34-18-96
			</p>

			<p>
				<span class = "blue">Моб.: </span> +7 910 740-32-66
			</p>

			<p>
				<span class = "blue">E-mail: </span> oms4@prom46.ru
			</p>
		</div>
	</div>
</div>


<div id = "feedback" style = "display: none">
	<div class = "feedback">
		<form method = "POST" enctype = "multipart/form-data">
			<p class = "title">Оставьте заявку <br/>прямо сейчас и получите дополнительные скидки</p>
			<input class = "name" type = "text" name = "name" placeholder = "Имя" />
			<input class = "phone" type = "text" name = "phone" placeholder = "Телефон" />
			<input class = "email" type = "email" name = "email" placeholder = "E-mail" required/>
			<textarea class = "message" name = "message" placeholder = "Сообщение" required></textarea>
			<label for = "file" class = "attach">Прикрепить файл заявки</label>
			<input class = "submit" name = "sub" type = "submit" value = "Отправить заявку"/>
			<input name = "file" id = "file" type = "file" style = "display: none"/>
		</form>
	</div>

</div>
<div id = "pageUp"></div>
</body>
</html>