<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyHistory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'List Report', 'url' => ['index','menu_id' =>$menu_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asiaebuy-history-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <p class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->id,'menu_id'=>$menu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id,'menu_id'=>$menu_id], [
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
            'id',
            'note:ntext',
            'remark:ntext',
            'status',
            'type_of_buying',
            'url:url',
            'date_create',
            'date_update',
            'menu_id',
        ],
    ]) ?>

</div>
