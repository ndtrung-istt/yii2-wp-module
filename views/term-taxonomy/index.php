<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel istt\wp\models\TermTaxonomySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('sakila', 'Term Taxonomies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-taxonomy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('sakila', 'Create {modelClass}', [
    'modelClass' => 'Term Taxonomy',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'term_taxonomy_id',
            'term_id',
            'taxonomy',
            'description:ntext',
            'parent',
            // 'count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
