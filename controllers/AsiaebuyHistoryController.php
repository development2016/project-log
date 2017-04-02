<?php

namespace app\controllers;

use Yii;
use app\models\AsiaebuyHistory;
use app\models\AsiaebuyHistorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AsiaebuyMenu;

/**
 * AsiaebuyHistoryController implements the CRUD actions for AsiaebuyHistory model.
 */
class AsiaebuyHistoryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AsiaebuyHistory models.
     * @return mixed
     */
    public function actionIndex($menu_id)
    {
        $searchModel = new AsiaebuyHistorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['menu_id'=>$menu_id]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'menu_id' => $menu_id
        ]);
    }

    /**
     * Displays a single AsiaebuyHistory model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id,$menu_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'menu_id' => $menu_id
        ]);
    }

    /**
     * Creates a new AsiaebuyHistory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($menu_id)
    {
        $model = new AsiaebuyHistory();

        $menu = AsiaebuyMenu::find()->where(['id'=>$menu_id])->one();

        $connection = \Yii::$app->db;
        $sql = $connection->createCommand('SELECT COUNT(menu_id) AS count FROM asiaebuy_history WHERE status IN ("Bug","Error","Cosmetic","Pending","") AND menu_id = "'.$menu_id.'"');
        $model2 = $sql->queryAll();

        foreach ($model2 as $key => $value) {
            $count =  $value['count'];
        }


        if ($model->load(Yii::$app->request->post()) ) {

            $model->date_create = date('Y-m-d');
            $model->menu_id = $menu_id;
            $menu->count = $count +1;
            $model->save() && $menu->save();


            return $this->redirect(['view', 'id' => $model->id,'menu_id'=>$model->menu_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'menu_id' => $menu_id
            ]);
        }
    }

    /**
     * Updates an existing AsiaebuyHistory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id,$menu_id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->date_update = date('Y-m-d');
            $model->save();
           return $this->redirect(['view', 'id' => $model->id,'menu_id'=>$model->menu_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                 'menu_id' => $menu_id
            ]);
        }
    }

    /**
     * Deletes an existing AsiaebuyHistory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id,$menu_id)
    {
        
        $menu = AsiaebuyMenu::find()->where(['id'=>$menu_id])->one();

        $connection = \Yii::$app->db;
        $sql = $connection->createCommand('SELECT COUNT(menu_id) AS count FROM asiaebuy_history WHERE status IN ("Bug","Error","Cosmetic","Pending","") AND menu_id = "'.$menu_id.'"');
        $model2 = $sql->queryAll();

        foreach ($model2 as $key => $value) {
            $count =  $value['count'];
        }

        $menu->count = $count - 1;
        $menu->save();

        $this->findModel($id)->delete();
        return $this->redirect(['index','menu_id'=>$menu_id]);
    }

    /**
     * Finds the AsiaebuyHistory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AsiaebuyHistory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AsiaebuyHistory::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
