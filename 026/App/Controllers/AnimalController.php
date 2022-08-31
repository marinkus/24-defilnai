<?php

namespace App\Controllers;


use App\App;
use App\DB\Json;

class AnimalController
{
    public function create()
    {
        return App::view('animals_create', ['title' => 'New Animal']);
    }

    public function store()
    {
        Json::connect()->create([
            'type' => $_POST['type'],
            'weight' => $_POST['weight'],
            'tail' => isset($_POST['tail']) ? 1 : 0
        ]);
        return App::redirect('');
    }
    public function list()
    {
        return App::view('animals_list', [
            'title' => 'Animals list',
            'animals' => Json::connect()->showAll()
        ]);
    }
    public function edit(int $id)
    {
        return App::view('animal_edit', [
            'title' => 'Edit Animal',
            'animal' => Json::connect()->show($id)
        ]);
    }
    public function update(int $id)
    {
        Json::connect()->update($id, [
            'type' => $_POST['type'],
            'weight' => $_POST['weight'],
            'tail' => isset($_POST['tail']) ? 1 : 0
        ]);
        return App::redirect('animals');
    }
    public function delete(int $id)
    {
        Json::connect()->delete($id);
        return App::redirect('animals');
    }
}
