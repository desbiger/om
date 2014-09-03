<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}?>
<h2>Каталог продукции</h2>
<ul>
	<? foreach ($arResult['ITEMS'] as $vol): ?>
		<li>
			<div class = "box">
				<img src = "<?= $vol['DETAIL_PICTURE']['SRC'] ?>" alt = ""/>

				<p class = "name"><?= $vol['NAME'] ?></p>
				<? if (count($vol['PROPERTIES']['TECH']['VALUE']) > 0): ?>
					<ul class = "chars">
						<? foreach ($vol['PROPERTIES']['TECH']['VALUE'] as $prop): ?>
							<li><?=$prop?></li>
						<? endforeach ?>
					</ul>
				<? endif ?>
			</div>
		</li>
	<? endforeach ?>

</ul>