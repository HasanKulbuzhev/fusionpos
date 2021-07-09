<?php


namespace frontend\models;


use yii\base\Model;

class ApiModel extends Model
{

    protected $host;
    protected $port;
    protected $version;
    protected static $guzzle_client;

    public function __construct()
    {
        $this->host = 'https://hasandev.fusion24.ru';
        $this->port = '8443';
        $this->version = 'v1';
        $url = $this->host.':'.$this->port.'/'.$this->version;
        self::$guzzle_client = new \GuzzleHttp\Client(['base_uri' => $url]);
    }

}