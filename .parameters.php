<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"IBLOCK" => array(
			"NAME" => "Совместимость инфоблока",
			"SORT" => 110,
		),
		"APPIARANCE" => array(
			"NAME" => "Внешний вид",
			"SORT" => 120,
		),
	),
	"PARAMETERS" => array(
		"PATH_TO_BASKET" => array(
			"NAME" =>"Код параметра текста оффера",
			"TYPE" => "STRING",
			"DEFAULT" => '={SITE_DIR."personal/cart/"}',
			"PARENT" => "IBLOCK",
		),
		"PATH_TO_ORDER" => array(
			"NAME" => "Код параметра текста описания оффера",
			"TYPE" => "STRING",
			"DEFAULT" => '={SITE_DIR."personal/order/make/"}',
			"PARENT" => "IBLOCK",
		),
		"HIDE_ON_BASKET_PAGES" => array(
			"NAME" => GetMessage("SBBL_HIDE_ON_BASKET_PAGES"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y"
		),
    )
    );