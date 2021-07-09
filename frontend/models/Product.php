<?php


namespace frontend\models;


use yii\base\Model;

class Product extends Model
{
    public static $api_params = [
        'uri' => 'menu',
        'params' => [
            'filter' => ["id_network" => 1],
            'expand' => 'recipe',
        ]
    ];

}