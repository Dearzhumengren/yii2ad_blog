<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    <?php
     /*$psObjs = \common\models\Poststatus::find()->all();
     $allObjs = \yii\helpers\ArrayHelper::map($psObjs,'id','name');*/

    /*$allStatus = (new \yii\db\Query())
                ->select(['name','id'])
                ->from('poststatus')
                ->indexBy('id')
                ->column();*/




    ?>

    <?= $form->field($model,'status')
    ->dropDownList(\common\models\Poststatus::find()
        ->select(['name','id'])
        ->orderBy('position')
        ->indexBy('id')
        ->column(),['prompt'=>'请选择状态'])?>



    <?= $form->field($model, 'author_id')->dropDownList(\common\models\Adminuser::find()
        ->select(['nickname','id'])
        ->indexBy('id')
        ->column(),['prompt'=>'请选择状态'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增':'修改', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
