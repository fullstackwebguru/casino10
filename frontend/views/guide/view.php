<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use kartik\markdown\Markdown;
use frontend\widgets\LatestGuide;
use frontend\widgets\RecentGuide;
use frontend\widgets\SearchBox;
use frontend\widgets\NewsletterBox;

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="single_page">
    <div class="container">
      <div class="bread_crumb">
        <ul>
          <li><?=  Html::a('Home',['/']) ?></li>
          <li><span>/</span></li>
          <li><?=  Html::a('All Guides',['/guide']) ?></li>
          <li><span>/</span></li>
          <li><strong><?= $model->title ?></strong></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <div class="page_contents">
            <a href="javascript:void(0)" class="thumbnail">
            <img src="<?= cloudinary_url($model->image_url, array("width" => 752, "height" => 352, "crop" => "fill")) ?>" alt="<?=$model->title ?>">
            </a>
            <div class="page_meta">
              On <?= Yii::$app->formatter->asDate($model->created_at, 'long'); ?>
            </div>
            <?= Markdown::convert($model->description) ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="sidebar">
            <div class="single_sidebar sidebar_seach_box">
            <?= SearchBox::widget(['type' => 'side']) ?>
            </div>
            <?= RecentGuide::widget() ?>
            <?= NewsletterBox::widget() ?>
          </div>
        </div>
      </div>
    </div>

    <?= LatestGuide::widget(); ?>
</div>