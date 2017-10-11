<?php

class HolaController extends Controller {

    public function actionIndex() {
        $twiter ="@JesusBremont";
        $model= Users::model("Users")->findAll();
        
        $this->render("index", array("model"=>$model,"twiter"=>$twiter));        
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

