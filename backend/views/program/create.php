<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Program */

$this->title = Yii::t('app', 'Create Program');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-create page-content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= 
        $this->render('_form', [
            'model' => $model,
            'partner' => $partner,
            'prgmCat' => $prgmCat,
            'categoryList' => $categoryList,
            'partnerTypeList' => $partnerTypeList,
            'programTypeList' => $programTypeList,
        ]) 
        ?>

</div>
