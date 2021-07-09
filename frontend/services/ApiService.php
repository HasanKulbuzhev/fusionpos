<?php


namespace frontend\services;


use frontend\storage\ApiStorageInterface;
use yii\base\Model;

class ApiService
{
    private $storage;

    private $_items = [];

    public function __construct(ApiStorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function remove($id)
    {
        $this->storage->delete($id);
    }

    public function getItem(array $params,$id = null)
    {
        if (!is_null($id)){
            $params['params']['filter']['id'] = $id;
        }
        $params['params']['filter'] = json_encode($params['params']['filter'],JSON_NUMERIC_CHECK );
        $this->loadItems($params);
        return $this->_items[0];


    }

    public function getItems(array $params)
    {
        if(isset($params['params']['filter'])) {
            $params['params']['filter'] = json_encode($params['params']['filter'], JSON_NUMERIC_CHECK);
            }
        $this->loadItems($params);
        return $this->_items;
    }

    private function loadItems($params){
        $this->_items = json_decode($this->storage->load($params)->getBody()->getContents(), true)["data"]["items"];
    }

}