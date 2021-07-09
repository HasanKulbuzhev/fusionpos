<?php

namespace frontend\config\bootstrap;

use frontend\services\ApiService;
use GuzzleHttp\Client;


class ApiBootstrap implements \yii\base\BootstrapInterface
{

    /**
     * @inheritDoc
     */
    public function bootstrap($app)
    {
        // TODO: Implement bootstrap() method.
        $container = \Yii::$container;
        $container->setSingleton('frontend\services\ApiService');
        $container->set('frontend\storage\ApiStorageInterface', function () {
            return new \frontend\storage\ApiStorageRepository(new Client([
                'base_uri' => \Yii::$app->params['api_host'].':'.\Yii::$app->params['api_port'].'/'.\Yii::$app->params['api_version'].'/',
                'headers' =>
                    [
                        'Authorization' => 'Bearer '.\Yii::$app->params['api_token'],
                    ],
            ])
        );
        });
    }
}