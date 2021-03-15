<?php

class Json {

    private static $jsonObj;

    private $data;

    public static function getDB()
    {
        return self::$jsonObj ?? self::$jsonObj = new self;
    }


    private function __construct()
    {
        if (!file_exists(DIR.'data/boxes.json')) {// pirmas kartas
            $data = json_encode([]);
            file_put_contents(DIR.'data/boxes.json', $data);
        }
        $data = file_get_contents(DIR.'data/boxes.json');
        $this->data = json_decode($data);
    }

    public function __destruct()
    {
        file_put_contents(DIR.'data/boxes.json', json_encode($this->data));
    }


    public function readData() : array
    {
        return $this->data;
    }

    public function readSortData($sortBy) : array
    {

        usort($this->data, 
        function($a, $b) use ($sortBy){
            return $a->$sortBy <=> $b->$sortBy;
        });

        return $this->data;
    }

    public function writeData(array $data) : void
    {
        $this->data = json_encode($data);
    }

    public function getBox(int $id) : ?object
    {
        foreach($this->data as $box) {
            if ($box->id== $id) {
                return $box;
            }
        }
        return null;
    }

    public function store(Box $box) : void
    {
        $id = $this->getNextId();
        $box->id = $id;
        $this->data[] = $box;
    }

    // public function update(object $box) : void
    // {
    //     foreach($this->data as $key => $box) {
    //         if ($box->id== $id) {
    //             $this->data[$key] = $box;
    //             return;
    //         }
    //     }
    // }

    public function update(object $updateBox) : void
    {
        foreach($this->data as $key => $box) {
            if ($box->id== $updateBox->id) {
                $this->data[$key] = $updateBox;
                return;
            }
        }
    }

    public function delete(int $id) : void
    {
        foreach($this->data as $key => $box) {
            if ($box->id== $id) {
                unset($this->data[$key]);
                // normalizuojam masyva iki normalaus masyvo be "skyliu"
                $this->data = array_values($this->data);
                //
                /*
                pvz indeksai pries trynima 0 1 2 3 4
                trinam 2 elementa
                indeksai po trynimo 0 1 3 4
                indeksai po normalizavimo 0 1 2 3
                */
                return;
            }
        }
    }

    private function getNextId() : int
    {
        if (!file_exists(DIR.'data/indexes.json')) {// pirmas kartas
            $index = json_encode(['id'=>1]);
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

}


/*
[
    ['id'=>1, 'bannana'=> 0],
    ['id'=>2, 'bannana'=> 10],
    ['id'=>3, 'bannana'=> 600],
    ['id'=>4, 'bannana'=> 10],
    
]
'index.php' ----> __DIR__ c:/x/box/ <----- atskaitos taskas define DIR
'../index.php' ----> __DIR__ c:/x/box/app
'../../index.php' ----> __DIR__ c:/x/box/app/dargiliau
__DIR__+'index.php'
*/