<?php

namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class SitioController extends Controller
{
    public function  actionInicio(){
        return $this-> render('inicio');
    }
}