<?php
namespace app\controllers\api;

use yii\rest\ActiveController;

class ClientController extends ActiveController
{
    public $modelClass = 'app\models\Client'; // Cambia el nombre de la clase de modelo si es diferente
}