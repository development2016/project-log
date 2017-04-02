<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AsiaebuyHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Log Report';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asiaebuy-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Report', ['create','menu_id'=>$menu_id], ['class' => 'btn btn-success pull-right']) ?>
    </p>
    <br>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'status',
            'type_of_buying',
            'note',
            'url:url',

            [
                'header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a('View',$url, [
                                        'title' => 'View',

                            ]);
                        },
                        'update' => function ($url, $model) {
                            return Html::a('Update',$url, [
                                        'title' => 'Update',

                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a('Delete',$url, [
                                        'title' => 'Delete',
                                        'data-method' => 'post',
                                        'data-confirm'=>"Are You Sure Want To Delete This Item ?",

                            ]);
                        },

                    ],
                    'urlCreator' => function ($action, $model, $key, $index) {

                        if ($action === 'view') {
                            $url = ['asiaebuy-history/view','id'=>$model->id,'menu_id'=>$model->menu_id];
                            return $url;
                        }
                        if ($action === 'update') {
                            $url = ['asiaebuy-history/update','id'=>$model->id,'menu_id'=>$model->menu_id];
                            return $url;
                        }
                        if ($action === 'delete') {
                            $url = ['asiaebuy-history/delete','id'=>$model->id,'menu_id'=>$model->menu_id];
                            return $url;
                        }





                    }
                ],

        ],
    ]); ?>
<?php Pjax::end(); ?></div>
