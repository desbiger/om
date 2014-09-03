<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<?
	function GetSubsections($section_id, $array)
	{
		$arResult = $array;
		$result   = array();
		foreach ($arResult['SECTIONS'] as $section) {
			if ($section['IBLOCK_SECTION_ID'] == $section_id) {
				$result[] = $section;
			}
		}
		return $result;
	}

	foreach ($arResult['SECTIONS'] as $vol) {
		if ($vol['DEPTH_LEVEL'] == 1) {
			$result[] = $vol;
		}
	}
?>
<h2>Каталог продукции</h2>
<ul>
	<? foreach ($result as $vol): ?>
		<li>
			<div class = "box">
				<img src = "<?= $vol['PICTURE']['SRC'] ?>" alt = ""/>

				<p class = "name"><?= $vol['NAME'] ?></p>
				<? $subsections = GetSubsections($vol['ID'], $arResult) ?>
				<? if (count($subsections) > 0): ?>
					<ul class = "chars">
						<? foreach ($subsections as $prop): ?>
							<li><?= $prop['NAME'] ?>
								<? $sub2sections = GetSubsections($prop['ID'], $arResult) ?>
								<? if (count($sub2sections) > 0): ?>
									<ul class = "chars">
										<? foreach ($sub2sections as $prop2): ?>
											<li><?= $prop2['NAME'] ?></li>
										<? endforeach ?>
									</ul>
								<? endif ?>
							</li>
						<? endforeach ?>
					</ul>
				<? endif ?>
			</div>
		</li>
	<? endforeach ?>

</ul>