<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?
/*echo 'arParams<br>';
dump($arParams);
echo '<br>arResult<br>';
dump($arResult);
echo'<br>';*/

?>

<div class="banner-container">
    <div class="slider-controller">
        <?
        //start navigation block
        $counterNav = 1;
        foreach($arResult["BANNERS"] as $navElement)
        {
        ?>
            <div class="slider-control-div">
                <a onclick="showSlide(<?=$counterNav?>)" data-nav="<?=$counterNav?>" class="slider-control-link"></a>
            </div>
        <?
            $counterNav++;
        }
        //end navigation block
        ?>
    </div>
    <?
    $counterBanner = 1;
    foreach($arResult["BANNERS"] as $banner)
    {
        ?>
        <div class="slide-conteiner" data-slide-numb="<?=$counterBanner?>"> 
            <div class="banner-col" >
                <div class="offer-text-contaier">
                    <h1 class="offer-text animate__animated animate__fadeInLeft"><?=$banner["OFFER_TEXT"]?></h1>
                </div>
                <div class="offer-description-container">
                    <p class="offer-description-text animate__animated animate__fadeInLeft"><?=$banner["DESCRIPTION_TEXT"]?></p>
                </div>
                <div class="cta-block">
                    <a href="<?=$banner["CTA_ACTION"]?>" class="cta-button animate__animated animate__fadeInLeft"><?=$banner["CTA_TEXT"]?></a>
                </div>
            </div>
            <div class="banner-col">
                <div class="img-banner-container animate__animated animate__fadeInRight">
                    <img src="<?=$banner["BANERS_PICTURE_SRC"]?>">
                </div>
            </div>
        </div>
        <?
        $counterBanner++;
    }
    ?>
    
    <!--<div class="slide-conteiner" data-slide-numb="2" style="display:none;">
        <div class="banner-col">
            <div class="offer-text-contaier">
                <h1 class="offer-text animate__animated animate__fadeInLeft">Пока!</h1>
            </div>
            <div class="offer-description-container">
                <p class="offer-description-text animate__animated animate__fadeInLeft">Тут будет текс описания</p>
            </div>
            <div class="cta-block">
                <a href="javascript:void(0)" class="cta-button animate__animated animate__fadeInLeft">Тут будет кнопка</a>
            </div>
        </div>
        <div class="banner-col">
            <div class="img-banner-container animate__animated animate__fadeInRight">
                <img src="https://images.unsplash.com/photo-1560796819-89ab1929cdd2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
            </div>
        </div>
    </div>-->
    
</div>

