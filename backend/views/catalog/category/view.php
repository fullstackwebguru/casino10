<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\helpers\Url;
use kartik\widgets\FileInput;
use kartik\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


$attributes = [
    [
        'group'=>true,
        'label'=>'Basic Details',
        'rowOptions'=>['class'=>'info'],
    ],
    [
        'attribute'=>'id', 
        'label'=>'Category #',
        'displayOnly'=>true,
    ],
    [
        'attribute'=>'title', 
        'value'=>$model->title
    ],
    [
        'group'=>true,
        'label'=>'SEO Information',
        'rowOptions'=>['class'=>'info']
    ],
    [
        'attribute'=>'slug', 
        'value'=>$model->slug
    ],
    [
        'attribute'=>'meta_keywords', 
        'value'=>$model->meta_keywords
    ],
    [
        'attribute'=>'meta_description', 
        'value'=>$model->meta_description
    ]
];

//images
$allImages = [];
$allImageConfig = [];

if ($model->image_url) {
    // $allImages[] = Yii::$app->imageCache->img('@mainUpload/' . $model->image_url, '200x150', ['class' => 'file-preview-image']);
    $allImages[] = '<img src="' . cloudinary_url($model->image_url, array("width" => 377, "height" => 220, "crop" => "fill")) .'" class="file-preview-image">';

    $allImageConfig[] =[   
            'caption' => 'Current Image',
            'frameAttr'=> [
                'style' => 'height:150px; width:100px;',
            ],
            'url' => Url::toRoute(['detach', 'id'=>$model->id])
    ];
}


//Company information
//
$viewMsg = 'Not applicable';
$updateMsg = 'Not applicable';
$deleteMsg = 'Remove Company';

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'attribute' => 'company_id',
        'pageSummary' => 'Page Total',
        'vAlign'=>'middle',
        'value'=>function ($model, $key, $index, $widget) { 
            return $model->company->title;
        }
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'label' => 'Mobile',
        'vAlign'=>'middle',
        'trueLabel' => 'Yes',
        'falseLabel' => 'No',
        'value'=>function ($model, $key, $index, $widget) { 
            return $model->company->feature_mobile;
        }
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'label' => 'Instant Play',
        'vAlign'=>'middle',
        'trueLabel' => 'Yes',
        'falseLabel' => 'No',
        'value'=>function ($model, $key, $index, $widget) { 
            return $model->company->feature_instant_play;
        }
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'label' => 'Download',
        'vAlign'=>'middle',
        'trueLabel' => 'Yes',
        'falseLabel' => 'No',
        'value'=>function ($model, $key, $index, $widget) { 
            return $model->company->feature_download;
        }
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'label' => 'LIVE',
        'vAlign'=>'middle',
        'trueLabel' => 'Yes',
        'falseLabel' => 'No',
        'value'=>function ($model, $key, $index, $widget) { 
            return $model->company->feature_live_casino;
        }
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'label' => 'VIP',
        'vAlign'=>'middle',
        'trueLabel' => 'Yes',
        'falseLabel' => 'No',
        'value'=>function ($model, $key, $index, $widget) { 
            return $model->company->feature_vip_program;
        }
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
            if ($action == 'delete') {
                return Url::toRoute(['deleteinfo', 'id'=>$model->category->id, 'infoId'=>$key]);
            } else {
                return '';
            }
        },
        'viewOptions'=>['title'=>$viewMsg, 'data-toggle'=>'tooltip', 'style'=>'display:none;'],
        'updateOptions'=>['title'=>$updateMsg, 'data-toggle'=>'tooltip', 'style'=>'display:none;'],
        'deleteOptions'=>['title'=>$deleteMsg, 'data-toggle'=>'tooltip'], 
    ],
];

$this->registerJs(
   '$(document).ready(function(){ 
        $(document).on("click", "#reset_companyinfos", function() {
            $.pjax.reload({container:"#companyinfos"});  //Reload GridView
        });
    });'
);

?>
<div class="row">
    <div class="col-xs-12">

    <?= DetailView::widget([
        'model'=>$model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>$viewMode,
        'deleteOptions'=>[ // your ajax delete parameters
            'params' => ['id' => $model->id, 'kvdelete'=>true],
        ],
        'panel'=>[
            'heading'=>'Category Details',
            'type'=>DetailView::TYPE_INFO,
        ],
        'attributes' => $attributes,
        'formOptions' => ['action' => Url::toRoute(['view', 'id'=>$model->id])]
    ]);?>

    </div>

</div>

<div class="row">
    <div class="col-xs-12">
    <div class="box-header with-border" id>
    <h3 class="box-title">Companies</h3>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'toolbar'=> false,
        'export' => false,
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
        'pjax' => true,
        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'responsive' => true,
        'showFooter' => false,
        'hover' => true,
        'showPageSummary' => false,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => false,
        ],
        'toolbar'=> [
            ['content'=>
                Html::a('<i class="glyphicon glyphicon-plus"></i>', Url::toRoute(['addinfo', 'id'=>$model->id]), ['title'=>'Add', 'id'=>'add_companyinfos', 'class'=>'showModalButton btn btn-success']) . ' ' .
                Html::button('<i class="glyphicon glyphicon-repeat"></i>', ['type'=>'button', 'title'=>'Add', 'id'=>'reset_companyinfos', 'class'=>'btn btn-default'])
            ],
        ],
        'pjaxSettings' => [
            'neverTimeout' => true,
            'options' => [
                'id' => 'companyinfos'
            ]
        ]
    ]);?>

    </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
    <div class="box-header with-border">
        <h3 class="box-title">Category Image</h3>

        <?= FileInput::widget([
            'name'=>'new_category_image',
            'options' => [
                'id' => 'input-888'
            ],
            'pluginOptions' => [
                'uploadAsync' =>  false,
                'maxFileCount' =>  1,
                'initialPreview' => $allImages,
                'initialPreviewConfig' => $allImageConfig,
                'initialPreviewAsData' => false,
                'overwriteInitial' => true,
                'autoReplace' => true,
                'showClose' => false,
                'showBrowse' => true,
                'showRemove' => false,
                'showUpload' => false,
                'previewFileType' => 'image',
                'uploadUrl' => Url::toRoute(['upload', 'id'=>$model->id]),
            ]
        ]) ?>
    </div>
    </div>
<div>