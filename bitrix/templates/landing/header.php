<!DOCTYPE html>
<html>
<head>
	<title><? $APPLICATION->ShowTitle() ?></title>
	<meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8"/>
	<meta name = "robots" content = "index, follow"/>
	<? $APPLICATION->ShowHead() ?>
	<link rel = "stylesheet" href = "/include/css/styles.css"/>
	<link rel = "stylesheet" type = "text/css" href = "/include/source/jquery.fancybox.css" media = "screen"/>

	<script type = "text/javascript" src = "/include/js/jquery-1.7.1.min.js"></script>
	<script type = "text/javascript" src = "/include/source/jquery.fancybox.js"></script>
	<script type = "text/javascript" src = "/include/js/jquery.bxslider.min.js"></script>
	<script type = "text/javascript" src = "/include/js/jquery.jcarousel.js"></script>
	<script type = "text/javascript" src = "/include/js/slider.horizontal.js"></script>
	<script type = "text/javascript" src = "/include/js/myscripts.js"></script>
	<script type = "text/javascript">
		$(function () {
			Myscripts.init();
		});
	</script>

</head>
<body>
<? $APPLICATION->ShowPanel() ?>
<div class = "header">
	<div class = "anchors">
		<div class = "center_block">
			<ul>
				<li><a href = "#catalog">Каталог</a></li>
				<li><a href = "#experts">Мы</a></li>
				<li><a href = "#certif">Преимущества</a></li>
				<li><a href = "#schema">Схема работы</a></li>
				<li><a href = "#payment">Доставка и оплата</a></li>
				<li><a href = "#contacts">Контакты</a></li>
			</ul>
		</div>
	</div>
	<div class = "head">
		<div class = "center_block">
			<div class = "logo">
				<a href = "/">
					<img src = "include/img/logo.png" alt = ""/>
				</a>

			</div>
			<div class = "slang">
				<h1>Комплексное снабжение</h1>
				<span>с доставкой по России <br/> и Таможенному союзу</span>
			</div>
			<div class = "call">
				<!--				<a class = "go" href = "#">Позвонить с сайта</a>-->
				<a class = "zingayaButton zingayacf0b4caf355e45329ef7dcf28c4fe7f1" id = "zingayaButtoncf0b4caf355e45329ef7dcf28c4fe7f1" href = "https://zingaya.com/widget/cf0b4caf355e45329ef7dcf28c4fe7f1" onclick = "window.open(this.href+'?referrer='+escape(window.location.href)+'', '_blank', 'width=236,height=220,resizable=no,toolbar=no,menubar=no,location=no,status=no'); return false;"></a>
				<script>
					var ZingayaConfig = {
						"buttonLabel": "Позвонить с сайта",
						"labelColor": "#13487f",
						"labelFontSize": 15,
						"labelTextDecoration": "none",
						"labelFontWeight": "bold",
						"labelShadowDirection": "bottom",
						"labelShadowColor": "#8fd3ec",
						"labelShadow": 0,
						"buttonBackgroundColor": "#68c3f0",
						"buttonGradientColor1": "#68c3f0",
						"buttonGradientColor2": "#5bbaee",
						"buttonGradientColor3": "#5fbdef",
						"buttonGradientColor4": "#62bfef",
						"buttonShadow": "true",
						"buttonHoverBackgroundColor": "#69ad26",
						"buttonHoverGradientColor1": "#30b3f1",
						"buttonHoverGradientColor2": "#2aa8ef",
						"buttonHoverGradientColor3": "#2cacf0",
						"buttonHoverGradientColor4": "#2daef0",
						"buttonActiveShadowColor1": "#BAE8FF",
						"buttonActiveShadowColor2": "#09608C",
						"buttonCornerRadius": 2,
						"buttonPadding": 10,
						"iconColor": "#fff",
						"iconOpacity": 1,
						"iconDropShadow": 0,
						"iconShadowColor": "#13487f",
						"iconShadowDirection": "bottom",
						"iconShadowOpacity": 0.5,
						"callme_id": "cf0b4caf355e45329ef7dcf28c4fe7f1",
						"poll_id": null,
						"analytics_id": null,
						"type": "button",
						"widgetPosition": "right",
						"save": 1};
					(function (d, t) {
						var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
						g.src = '//d1bvayotk7lhk7.cloudfront.net/js/zingayabutton.js';
						g.async = 'true';
						g.onload = g.onreadystatechange = function () {
							if (this.readyState && this.readyState != 'complete' && this.readyState != 'loaded') return;
							try {
								Zingaya.load(ZingayaConfig, 'zingayacf0b4caf355e45329ef7dcf28c4fe7f1');
								if (!Zingaya.SVG()) {
									var p = d.createElement(t);
									p.src = '//d1bvayotk7lhk7.cloudfront.net/PIE.js';
									p.async = 'true';
									s.parentNode.insertBefore(p, s);
									p.onload = p.onreadystatechange = function () {
										if (this.readyState && this.readyState != 'complete' && this.readyState != 'loaded') return;
										if (window.PIE) PIE.attach(document.getElementById("zingayaButton" + ZingayaConfig.callme_id));
									}
								}
							} catch (e) {
							}
						};
						s.parentNode.insertBefore(g, s);
					}(document, 'script'));

				</script>
			</div>
			<div class = "phone">
				<p>Звонок по России бесплатный</p>

				<p class = "number">8 800 250-10-09</p>
			</div>
		</div>
	</div>
</div>

