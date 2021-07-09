<?php


namespace frontend\storage;


use GuzzleHttp\Client;

class ApiStorageRepository implements ApiStorageInterface
{

    private $connection;

    public function __construct(Client $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @inheritDoc
     */
    public function load(array $params)
    {
        // TODO: Implement load() method.

        return $this->connection->get(
            $params['uri'],
            [
                'query' => $params['params'],
            ]
        );
    }

    public function save(array $items)
    {
        // TODO: Implement save() method.
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}