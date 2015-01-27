<?php

namespace istt\wp\controllers;

use Yii;
use istt\wp\models\TermRelationships;
use istt\wp\models\TermRelationshipsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TermRelationshipsController implements the CRUD actions for TermRelationships model.
 */
class TermRelationshipsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TermRelationships models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TermRelationshipsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TermRelationships model.
     * @param string $object_id
     * @param string $term_taxonomy_id
     * @return mixed
     */
    public function actionView($object_id, $term_taxonomy_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($object_id, $term_taxonomy_id),
        ]);
    }

    /**
     * Creates a new TermRelationships model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TermRelationships();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'object_id' => $model->object_id, 'term_taxonomy_id' => $model->term_taxonomy_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TermRelationships model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $object_id
     * @param string $term_taxonomy_id
     * @return mixed
     */
    public function actionUpdate($object_id, $term_taxonomy_id)
    {
        $model = $this->findModel($object_id, $term_taxonomy_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'object_id' => $model->object_id, 'term_taxonomy_id' => $model->term_taxonomy_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TermRelationships model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $object_id
     * @param string $term_taxonomy_id
     * @return mixed
     */
    public function actionDelete($object_id, $term_taxonomy_id)
    {
        $this->findModel($object_id, $term_taxonomy_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TermRelationships model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $object_id
     * @param string $term_taxonomy_id
     * @return TermRelationships the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($object_id, $term_taxonomy_id)
    {
        if (($model = TermRelationships::findOne(['object_id' => $object_id, 'term_taxonomy_id' => $term_taxonomy_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
