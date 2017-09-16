<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserRole */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'User Role',
]) . $model->Role_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Role_ID, 'url' => ['view', 'id' => $model->Role_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user-role-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
