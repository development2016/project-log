<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyHistory */

$this->title = 'Update Report : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'List Report', 'url' => ['index','menu_id' => $menu_id]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id,'menu_id'=>$menu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asiaebuy-history-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
