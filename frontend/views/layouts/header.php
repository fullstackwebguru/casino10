<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header>
    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container" id="full-width">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="#">Top5BestCasinos.<span style="color:#f05342">Today</span></a>
                <p id="date"><?= Yii::$app->formatter->asDate('now', 'full'); ?></p>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="mob-right">
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><?=  Html::a('Home',['/']) ?></li>
                    <li><?=  Html::a('Categories',['/category']) ?></li>
                    <li><?=  Html::a('Compare Casino',['/compare']) ?></li>
                    <li><?=  Html::a('Guide',['/guide']) ?></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- End of Navigation -->
    <!-- top banner-->
</header>