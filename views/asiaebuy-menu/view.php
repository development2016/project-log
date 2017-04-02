<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyMenu */

$this->title = $model->menu;
$this->params['breadcrumbs'][] = ['label' => 'List Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asiaebuy-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <p class=pull-right>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'menu',
            'akses',
            'date_create',
            'date_update',
        ],
    ]) ?>

</div>
