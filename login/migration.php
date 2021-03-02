<?php
// vienkartinis, naudojamas pirma karta uzpildyti duomenim

$users = [
    ['name' => 'Petras', 'surname' => 'Lapinskas', 'pass' => password_hash('123', PASSWORD_DEFAULT)],
    ['name' => 'Ona', 'surname' => 'Lapinskiene', 'pass' => password_hash('123', PASSWORD_DEFAULT)],
    ['name' => 'Saulius', 'surname' => 'Saulius', 'pass' => password_hash('123', PASSWORD_DEFAULT)],
];

file_put_contents(__DIR__.'/users.json', json_encode($users));