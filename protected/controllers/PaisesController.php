<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PaisesController extends Controller {

    public function actionCrear() {
        var_dump($_POST);

        $objPais = new Paises();
        if (isset($_POST["Paises"])) {

            $objPais->attributes = $_POST['Paises'];
            if ($objPais->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render("crear", array("objPais" => $objPais));
    }

    public function actionActualizar($id) {
        $objPais = Paises::model()->findByPk($id);
        if (isset($_POST["Paises"])) {

            $objPais->attributes = $_POST['Paises'];
            if ($objPais->save()) {
                $this->redirect(array('index'));
            }
        }
        $this->render("actualizar", array("objPais" => $objPais));
    }

    public function actionIndex() {
        /* @var $lstPaises type */
        $lstPaises = Paises::model()->findAll();

        $this->render("index", array("paises" => $lstPaises));
    }

    public function actionEliminar($id) {
        $objPais = Paises::model()->deleteByPk($id);
        $this->redirect(array('index'));
    }

    public function actionVer($id) {
        $objPais = Paises::model()->findByPk($id);
        $this->render("ver", array("pais" => $objPais));
    }

    public function actionActivar($id) {
        $objPais = Paises::model()->findByPk($id);

        if ($objPais->estatus == 1) {
            $objPais->estatus = 0;
        } else {
            $objPais->estatus = 1;
        }
        
        $objPais->save();
        $this->redirect(array('index'));
    }

}
