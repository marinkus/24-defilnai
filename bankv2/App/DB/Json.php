<?php

namespace App\DB;

// use App\Controllers\UserController as UC;
// use App\App;

class Json implements DataBase
{
    private $data, $file;
    static private $object;

    static public function connect($file = 'data')
    {
        return self::$object ?? self::$object = new self($file);
    }

    private function __construct($file)
    {
        $this->file = $file;
        if (!file_exists(DIR . 'App/DB/' . $this->file . '.json')) {
            file_put_contents(DIR . 'App/DB/' . $this->file . '.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR . 'App/DB/' . $this->file . '.json'), 1);
    }

    private function getId(): int
    {
        if (!file_exists(DIR . 'App/DB/' . $this->file . '_id.json')) {
            file_put_contents(DIR . 'App/DB/' . $this->file . '_id.json', json_encode(0));
        }
        $id = json_decode((file_get_contents(DIR . 'App/DB/' . $this->file . '_id.json')));
        $id++;
        file_put_contents(DIR . 'App/DB/' . $this->file . '_id.json', json_encode($id));
        return $id;
    }

    public function __destruct()
    {
        file_put_contents(DIR . 'App/DB/' . $this->file . '.json', json_encode($this->data));
    }
    public function create(array $userData): void
    {
        $userData['id'] = $this->getId();
        $this->data[] = $userData;
    }
    public function update(int $userId, array $userData): void
    {
        foreach ($this->data as &$user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId;
                $user = $userData;
                break;
            }
        }
    }
    public function balance(int $userId, array $userData): void
    {
        foreach ($this->data as &$user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId;
                $user['funds'] += $userData['funds'];
                break;
            }
        }
    }
    public function charge(int $userId, array $userData): void
    {
        foreach ($this->data as &$user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId;
                $user['funds'] -= $userData['funds'];
                break;
            }
        }
    }
    public function delete(int $userId): void
    {
        foreach ($this->data as $index => $user) {
            if ($user['id'] == $userId) {
                unset($this->data[$index]);
                $this->data = array_values($this->data);
                break;
            }
        }
    }
    public function show(int $userId): array
    {
        foreach ($this->data as $user) {
            if ($user['id'] == $userId) {
                return $user;
            }
        }
    }
    public function showAll(): array
    {
        return $this->data;
    }
}
