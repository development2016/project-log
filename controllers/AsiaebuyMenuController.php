<?php

namespace app\controllers;

use Yii;
use app\models\AsiaebuyMenu;
use app\models\AsiaebuyMenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AsiaebuyMenuController implements the CRUD actions for AsiaebuyMenu model.
 */
class AsiaebuyMenuController extends Controller
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
     * Lists all AsiaebuyMenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel_buyer = new AsiaebuyMenuSearch();
        $dataProvider_buyer = $searchModel_buyer->search(Yii::$app->request->queryParams);
        $dataProvider_buyer->query->andWhere(['akses'=>'Buyer']);

        $searchModel_seller = new AsiaebuyMenuSearch();
        $dataProvider_seller = $searchModel_seller->search(Yii::$app->request->queryParams);
        $dataProvider_seller->query->andWhere(['akses'=>'Seller']);

        $searchModel_approval = new AsiaebuyMenuSearch();
        $dataProvider_approval = $searchModel_approval->search(Yii::$app->request->queryParams);
        $dataProvider_approval->query->andWhere(['akses'=>'Approval']);



        return $this->render('index', [
            'searchModel_buyer' => $searchModel_buyer,
            'dataProvider_buyer' => $dataProvider_buyer,
            'searchModel_seller' => $searchModel_seller,
            'dataProvider_seller' => $dataProvider_seller,
            'searchModel_approval' => $searchModel_approval,
            'dataProvider_approval' => $dataProvider_approval,
        ]);
    }

    /**
     * Displays a single AsiaebuyMenu model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AsiaebuyMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AsiaebuyMenu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AsiaebuyMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AsiaebuyMenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AsiaebuyMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AsiaebuyMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AsiaebuyMenu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
