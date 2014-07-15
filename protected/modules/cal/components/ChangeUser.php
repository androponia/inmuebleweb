<?php

Yii::import('zii.widgets.CPortlet');

class ChangeUser extends CPortlet
{

    public $title;
    public $userId;

    public function init()
    {
        $this->title = Yii::t('CalModule.fullCal', 'change user');
        parent::init();
    }

    protected function renderContent()
    {
        if (Yii::app()->user->getIsGuest()) return;

        // check admin privileges
        $isAdmin = (bool) Yii::app()->user->getState('isAdmin');
        if (!$isAdmin) return;

        // create you own users list
        $users = array(
            '1' => 'director',
            '2' => 'administrativo1',
            '3' => 'agente',
            '4' => 'cliente',
        );

        echo CHtml::beginForm();
        echo '<br>';
        echo CHtml::dropDownList("currentUser", $this->userId, $users);
        echo ' ';
        echo CHtml::submitButton(Yii::t('CalModule.fullCal', 'OK'));
        echo CHtml::endForm();
        echo '<br>';
    }
}