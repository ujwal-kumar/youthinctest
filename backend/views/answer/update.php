<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Answer */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Answer',
]) . $model->Answer_Id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Answers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Answer_Id, 'url' => ['view', 'id' => $model->Answer_Id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="answer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
