<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AsiaebuyMenu */

$this->title = 'Create Menu';
$this->params['breadcrumbs'][] = ['label' => 'List Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asiaebuy-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
