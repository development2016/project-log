<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyMenu */

$this->title = 'Update Menu: ' . $model->menu;
$this->params['breadcrumbs'][] = ['label' => 'List Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->menu, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asiaebuy-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
