<?php


namespace frontend\storage;


interface ApiStorageInterface
{
    /**
     * @return array
     */
    public function load(array $params);

    public function save(array $items);
    /**
     * @param int
     */
    public function delete($id);

}