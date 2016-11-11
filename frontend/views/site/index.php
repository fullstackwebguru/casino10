<?php

/* @var $this yii\web\View */

use frontend\widgets\LatestGuide;
use frontend\widgets\NewsletterBox;
use frontend\widgets\Banner;
use yii\helpers\Url;

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Banner::widget() ?>

<section id="tables-1">
    <h1 class="headlines-hp">TOP 5<span class="red"> CASINO WEBSITES</span></h1>
    <div class="container" id="front">
        <div class="row">
            <div class="col-sm-12">
                <p class="top-question"><i class="fa fa-question-circle" aria-hidden="true"></i> Wondering how we rank the products?</p>
            </div>
        </div>
        <div class="table-condensed desk">
            <table class="table">
                <thead>
                    <tr class="header-titles">
                        <th class="hearder-box">#</th>
                        <th class="hearder-box">Casino site</th>
                        <th class="hearder-box">Offers</th>
                        <th class="hearder-box">Features</th>
                        <th class="hearder-box">Ratings</th>
                        <th class="hearder-box">Play</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> </td>
                    </tr>

                    <?php

                    $compIndex = 0;
                    foreach($category->cateComps as $catComp) {
                        $company = $catComp->company;

                        $compIndex ++;
                    ?>

                    <?php 

                    if ($compIndex == 1) {
                
                    ?>
                    <tr id="first">
                        <td class="t-images-1"><img src="images/nr1.jpg" id="nr1" alt="nr1"></td>

                    <?php
                    } else {
                    ?>
                        <tr>
                            <td class="offers"><p class="nr-desk"><?= $compIndex ?></p></td>
                    <?php } ?>
                        <td class="t-images">
                            <a href="<?=Url::toRoute($company->getRoute())?>"><img src="images/table-img-1.jpg" class=" t-img" alt="casino-img"></a>
                        </td>
                        <td class="offers">
                            <p class="offers-3"><?= $company->bonus_offer; ?> </p>
                        </td>
                        <td class="padd-2">
                            <div class="i-wrapp">
                                <div class="col-xs-6 no-padding"><i class="fa fa-laptop red" aria-hidden="true"></i></div>
                                <div class="col-xs-6 no-padding"><i class="fa fa-mobile red" aria-hidden="true"></i></div>
                                <div class="col-xs-6 no-padding"><i class="fa fa-video-camera red" aria-hidden="true"></i></div>
                                <div class="col-xs-6 no-padding"><i class="fa fa-usd red" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td class="padd-1">
                            <div class="rate-wrapp">
                                <p class="rate-number"><a href="#">5.0</a></p>
                                <div class="stars-wrapper">
                                    <i class="glyphicon glyphicon-star orange"></i>
                                    <i class="glyphicon glyphicon-star orange"></i>
                                    <i class="glyphicon glyphicon-star orange"></i>
                                    <i class="glyphicon glyphicon-star orange"></i>
                                    <i class="glyphicon glyphicon-star orange"></i>
                                </div>
                            </div>
                        </td>
                        <td class="btn-padd"><a href="#" class=" btn btn-md t-btn">GET BONUS</a></td>
                    </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <hr class="cas-top mob">
        <div class="small-wrapp mob first-mob ">
            <div class="cas-mob-wrapp">
                <img src="images/nr1.png" id="nr-1" alt="nr1">
                <a href="#"><img src="images/table-img-1.jpg" class="img-responsive t-img" alt="casino-img"></a>
                <p class="offers-3">£1800 Bonus</p>
                <div class="i-wrapp-mob">
                    <div class="row">
                        <div class="col-xs-6 no-padding"><i class="fa fa-laptop red" aria-hidden="true"></i></div>
                        <div class="col-xs-6 no-padding"><i class="fa fa-mobile red" aria-hidden="true"></i></div>
                        <div class="col-xs-6 no-padding"><i class="fa fa-video-camera red" aria-hidden="true"></i></div>
                        <div class="col-xs-6 no-padding"><i class="fa fa-usd red" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="rate-wrapp">
                    <p class="rate-number"><a href="#">5.0</a></p>
                    <div class="stars-wrapper">
                        <i class="glyphicon glyphicon-star orange"></i>
                        <i class="glyphicon glyphicon-star orange"></i>
                        <i class="glyphicon glyphicon-star orange"></i>
                        <i class="glyphicon glyphicon-star orange"></i>
                        <i class="glyphicon glyphicon-star orange"></i>
                    </div>
                </div>
                <div class="col-sm-12 more"> <a href="#" class=" btn btn-md btn-primary t-btn ">GET BONUS</a>
                </div>
            </div>
        </div>
    </div>
</section>