<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[MailTemplate]].
 *
 * @see MailTemplate
 */
class MailTemplatesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MailTemplate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MailTemplate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
