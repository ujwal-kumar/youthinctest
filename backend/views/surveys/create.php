<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Survey */

$this->title = Yii::t('app', 'Create Survey');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Surveys'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="survey-create  page-content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
