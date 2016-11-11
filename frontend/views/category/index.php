<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\Banner;

$this->title = 'Top 10';
$this->params['breadcrumbs'][] = $this->title;

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;


$this->registerMetaTag([
            'name'=>'keywords',
            'content' => $model->meta_keywords
        ]);

$this->registerMetaTag([
            'name'=>'description',
            'content' => $model->meta_description
        ]);

?>

<?= Banner::widget() ?>
