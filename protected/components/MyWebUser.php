<?php

class MyWebUser extends CWebUser
{
    public function getUser($attrib = "")
    {
        $model = LcsUsers::model()->findByPk(Yii::app()->user->getId());
        switch ($attrib) {
            case 'churchId':
                if (Yii::app()->session['church_id']) {
                    return Yii::app()->session['church_id'];
                } else {
                    return $model->church_id;
                }
                break;
            case 'fullname':
                return $model->user_fullname;
                break;
            case 'userId':
                return $model->user_id;
                break;
            case 'churchName':
                $church = Church::model()->findByPk($model->church_id);
                return $church->church_name;
                break;
            case 'churchCountry':
                $church = Church::model()->findByPk($model->church_id);
                return $church->address->country;
                break;
            case 'churchCity':
                $church = Church::model()->findByPk($model->church_id);
                return $church->address->city;
                break;
            case 'churchAddress':
                $church = Church::model()->findByPk($model->church_id);
                return $church->address->address_det;
                break;
            case 'latlng':
                $church = Church::model()->findByPk($model->church_id);
                return $church->latlng;
                break;
            case 'status':
                $church = Church::model()->findByPk($model->church_id);
                return $church->status;
                break;
            case 'userStatus':
                return $model->user_status;
                break;
            default:
                return $model->attributes;
                break;
        }
    }
}

?>