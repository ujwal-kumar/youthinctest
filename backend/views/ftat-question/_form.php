<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FtatQuestion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ftat-question-form page-content">

    <?php $form = ActiveForm::begin([
                'options' => [
                    'id' => 'create-ftat-question-form'
                ]
    ]); ?>

    <?= $form->field($model, 'Question_Name')->textInput() ?>

    <?php $form->field($model, 'Created_By')->textInput() ?>

    <?php $form->field($model, 'Last_Modified_Date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
        <?= Html::resetButton($model->isNewRecord ? Yii::t('app', 'Reset') : Yii::t('app', 'Cancel'), ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn form-close btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
