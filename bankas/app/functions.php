<?php

function readData() : array
{
    if (!file_exists(DIR.'data/saskaitos.json')) { // pirmas kartas
        $data = json_encode([]);
        file_put_contents(DIR.'data/saskaitos.json', $data);
    }

    $data = file_get_contents(DIR.'data/saskaitos.json');
    return json_decode($data, 1);
}

function writeData(array $data) : void
{
    $data = json_encode($data);
    file_put_contents(DIR.'data/saskaitos.json', $data);
}

function getNextId() : int
{
    if (!file_exists(DIR.'data/indexes.json')) { // pirmas kartas
        $index = json_encode(['id'=> 1]);
        file_put_contents(DIR.'data/indexes.json', $index);
    }  
    $index = file_get_contents(DIR.'data/indexes.json');
    $index = json_decode($index, 1);
    $id = (int) $index['id'];
    $index['id'] = $id + 1;
    $index = json_encode($index);
    file_put_contents(DIR.'data/indexes.json', $index);
    return $id;
}

function create(string $vardas, string $pavarde, int $kodas) : void
{
    $saskaitos = readData();
    $id = getNextId();
    $saskaita = ['id' => $id, 'kodas' => $kodas, 'vardas' => $vardas, 'pavarde' => $pavarde, 'suma'=> 0];
    $saskaitos[] = $saskaita;
    writeData($saskaitos);
}

function delete(int $id) : void
{
    $saskaitos = readData();
    $saskaitos2 = [];
    foreach ($saskaitos as $key => $value) {
        if($value['id'] == $id) 
        continue;
        $saskaitos2[] = $value;
    }
    writeData($saskaitos2);
}

function getRecord(int $id) : array
{
    $saskaitos = readData();
    $saskaitos2 = [];
    foreach ($saskaitos as $key => $value) {
        if($value['id'] == $id) {
        return $value;
        }
    }
}

function editBalance(int $id, int $suma) : void
{
    $saskaitos = readData();
    foreach ($saskaitos as $key => $value) {
        if($value['id'] == $id) {
            $saskaitos[$key]['suma'] = $suma + $saskaitos[$key]['suma'];
            break;

        }
    }
    writeData($saskaitos);
}

