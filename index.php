<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ФИО - Город улица номер");
?>

<? // 20 m - 2 hours
\Bitrix\Main\Loader::includeModule('iblock');

$nav = new \Bitrix\Main\UI\AdminPageNavigation("nav-news");
$nav->allowAllRecords(false)
   ->setPageSize(3)
   ->initFromUri();

// инфоблок имеет Символьный код API: piple
$itemsList = \Bitrix\Iblock\Elements\ElementPipleTable::getList([
    "offset" => $nav->getOffset(),
    "count_total" => true,
    "limit" => $nav->getLimit(),
    'select' => ['ID', 'NAME', 'IBLOCK_ID', 'CODE',
        'FIO_VALUE'=>'FIO.VALUE',
        'NUMBER_VALUE'=>'HOME.ELEMENT.NUMBER.VALUE',
        'STREET_VALUE'=>'HOME.ELEMENT.STREET.VALUE',
        'SITY_VALUE'=>'HOME.ELEMENT.SITY.VALUE',
    ],
]);

$nav->setRecordCount($itemsList->getCount());

while ($items = $itemsList->fetch())
{
   //echo "<pre>"; print_r($items); echo "</pre>";
   echo "<pre>"; print_r($items['FIO_VALUE'].' - '.$items['SITY_VALUE'].' '.$items['STREET_VALUE'].' '.$items['NUMBER_VALUE']); echo "</pre>";
}

$APPLICATION->IncludeComponent("bitrix:main.pagenavigation", "",
   ["NAV_OBJECT" => $nav, "SEF_MODE" => "N",],
   false
);
?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>