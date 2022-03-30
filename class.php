<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use CBitrixComponent;

class EasyBanner extends CBitrixComponent{

    public function onPrepareComponentParams($arParams)
    {
        if(CModule::IncludeModule("iblock"))
            {
                $items = GetIBlockElementList($arParams['ID_IBLOCK'], false, Array("SORT"=>"ASC"));
                while($arItem = $items->GetNext())
                {
                    $result[] = $arItem;
                }
                foreach($result as $banner){
                    $res = CIBlockElement::GetByID($banner['ID']);
                    if($obRes = $res->GetNextElement())
                    {
                        $arrayProps = $obRes->GetProperties();
                        $this->arResult["BANNERS"][] = array(
                            "OFFER_TEXT" => $arrayProps["OFFER_TEXT"]['VALUE'],
                            "DESCRIPTION_TEXT" => $arrayProps["DESCRIPTION_TEXT"]['VALUE'],
                            "CTA_TEXT"=> $arrayProps["CTA_TEXT"]['VALUE'],
                            "CTA_ACTION"=> $arrayProps["CTA_ACTION"]['VALUE'],
                            "BANERS_PICTURE_SRC"=> $this->getPictureSrc($arrayProps["BANERS_PICTURE"]['VALUE']),
                        );
                    }
                }

                


            }
        return $arParams;
    }
    
    private function getPictureSrc($fileId){
        if(CModule::IncludeModule('iblock'))
        {
            $arFile = CFile::GetFileArray($fileId);
            if($arFile)
            {
                return $arFile["SRC"];
            }
        }
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }

}