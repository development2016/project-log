<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyHistory */

$this->title = 'Create Report';
$this->params['breadcrumbs'][] = ['label' => 'List Report', 'url' => ['index','menu_id' => $menu_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asiaebuy-history-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
