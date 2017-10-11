<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Paises extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $ClassName active record class name.
     * @return Users the static model class
     */
    public static function model($ClassName = __CLASS__) {

        
        return parent::model($ClassName);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'paises';
    }

    public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array( 
                    array('nombre, estatus', 'required'));
	}
}

