<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asiaebuy-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Complete' => 'Complete', 'Bug' => 'Bug', 'Error' => 'Error', 'Cosmetic' => 'Cosmetic', 'Pending' => 'Pending', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'type_of_buying')->dropDownList([ 'Guide Buying' => 'Guide Buying', 'Sales Lead' => 'Sales Lead', 'Both'=>'Both'], ['prompt' => '']) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
