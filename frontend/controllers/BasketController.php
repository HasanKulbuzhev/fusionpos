<?php


namespace frontend\controllers;

use frontend\services\ApiService;
use yii\web\Controller;

class BasketController extends Controller
{

    private $service;

    public function __construct($id, $module, ApiService $service, $config = [])
    {
        $this->service = $service;
        parent::__construct($id, $module, $config);
    }

    public function actionBasketAdd($productId)
    {
        $session = \Yii::$app->session;
        $basket = $session['basket'];
        $basket[$productId] = (!isset($basket[$productId])) ? 1 : $basket[$productId]++;//[productId => count,productId  => count]
        $productPrice = (int)$this->service->getItem(\frontend\models\Product::$api_params,$productId)['price'];
        $basket['fullPrice'] = (!isset($basket['fullPrice'])) ? $productPrice : $basket['fullPrice']+$productPrice;
        $session['basket'] = $basket;
        return $this->goBack();
    }

    public function actionBasketRemove($productId)
    {
        $session = \Yii::$app->session;
        $basket = $session('basket');
        unset($basket[$productId]);
    }

}