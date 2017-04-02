<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AsiaebuyMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asiaebuy-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </p>

    <h3><b>Buyer</b></h3>

<?= GridView::widget([
        'dataProvider' => $dataProvider_buyer,
        'filterModel' => $searchModel_buyer,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'menu',
            'count',

            [
                'header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {log} {delete}',
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
                        'log' => function ($url, $model) {
                            return Html::a('Log',$url, [
                                        'title' => 'Log',

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
                            $url = ['asiaebuy-menu/view','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'update') {
                            $url = ['asiaebuy-menu/update','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'log') {
                            $url = ['asiaebuy-history/index','menu_id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'delete') {
                            $url = ['asiaebuy-menu/delete','id'=>$model->id];
                            return $url;
                        }



                    }
                ],

        ],
    ]); ?>


 <h3><b>Seller</b></h3>

  
<?= GridView::widget([
        'dataProvider' => $dataProvider_seller,
        'filterModel' => $searchModel_seller,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'menu',
            'count',

            [
                'header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {log} {delete}',
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
                        'log' => function ($url, $model) {
                            return Html::a('Log',$url, [
                                        'title' => 'Log',

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
                            $url = ['asiaebuy-menu/view','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'update') {
                            $url = ['asiaebuy-menu/update','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'log') {
                            $url = ['asiaebuy-history/index','menu_id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'delete') {
                            $url = ['asiaebuy-menu/delete','id'=>$model->id];
                            return $url;
                        }



                    }
                ],
        ],
    ]); ?>


 <h3><b>Approval</b></h3>

<?= GridView::widget([
        'dataProvider' => $dataProvider_approval,
        'filterModel' => $searchModel_approval,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'menu',
            'count',

            [
                'header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {log} {delete}',
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
                        'log' => function ($url, $model) {
                            return Html::a('Log',$url, [
                                        'title' => 'Log',

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
                            $url = ['asiaebuy-menu/view','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'update') {
                            $url = ['asiaebuy-menu/update','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'log') {
                            $url = ['asiaebuy-history/index','menu_id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'delete') {
                            $url = ['asiaebuy-menu/delete','id'=>$model->id];
                            return $url;
                        }



                    }
                ],
        ],
    ]); ?>

</div>
