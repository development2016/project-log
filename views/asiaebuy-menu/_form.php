<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asiaebuy-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akses')->dropDownList([ 'Buyer' => 'Buyer', 'Seller' => 'Seller', 'Approval' => 'Approval', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
