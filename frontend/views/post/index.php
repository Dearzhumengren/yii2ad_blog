<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\components\TagsCloudWidget;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="container">

    <div class="row">

        <div class="col-md-9">


            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://www.wwq97.cn/wp-content/uploads/2018/01/ac1e711874adfac2fba95eae90c3c777.jpg" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="http://www.wwq97.cn/wp-content/uploads/2018/01/8de6d2e02ea0b59ea8c164b0b0577efa.jpg" alt="Second slide">
                    </div>

                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            <ol class="breadcrumb">
                <li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
                <li>文章列表</li>
            </ol>



            <?= \yii\widgets\ListView::widget([
                    'id'=>'postList',
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_listitem',//子视图，显示一篇文章的标题内容
                    'layout'=>'{items} {pager}',
                    'pager'=>[
                            'maxButtonCount'=>10,
                            'nextPageLabel'=>Yii::t('app','下一页'),
                            'prevPageLabel'=>Yii::t('app','上一页'),
                    ],
            ]) ?>
        </div>

        <div class="col-md-3">
            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden="true">
                            查找文章
                        </span>
                    </li>
                    <li class="list-group-item">
                        <form class="form-inline" action="index.php?r=post/index" id="w0" method="get" >
                            <div class="form-group">
                                <input type="text" class="form-control" name="PostSearch[title]" id="w0input" placeholder="按标题">

                            </div>
                            <br>
                            <button type="buttons" class="btn btn-info">搜索</button>
                        </form>
                    </li>

                </ul>
            </div>

            <div class="tagcloudbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-tags" aria-hidden="true">
                            标签云
                        </span>
                    </li>
                    <li class="list-group-item">
                        <?= TagsCloudWidget::widget(['tags'=>$tags])?>
                    </li>

                </ul>
            </div>

            <div class="commentbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-comment" aria-hidden="true">
                            <最新回复></最新回复>
                        </span>
                    </li>
                    <li class="list-group-item">
                        <?= \frontend\components\RctReplyWidget::widget(['recentComments'=>$recentComments,]);?>
                    </li>

                </ul>
            </div>


        </div>


    </div>



    </div>

</div>
