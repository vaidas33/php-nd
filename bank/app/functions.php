<?php
//nuskaitom duomenis is JSON
function readData() : array //funkcija privalo grazinti array
{
    if(!file_exists(DIR.'data/users.json')) {
        $data = json_encode([]);
        file_put_contents(DIR.'data/users.json', $data);
    }
    $data = file_get_contents(DIR.'data/users.json');
    return json_decode($data, 1);
}

function writeData(array $data) : void
{
    $data = json_encode($data); // is stringo i masyva
    file_put_contents(DIR.'data/users.json', $data);
}

function getNextId() : int
{
    if(!file_exists(DIR.'data/indexes.json')) {
        $index = json_encode(['id' => 1]);
        file_put_contents(DIR.'data/indexes.json', $index);
    }
    $index = file_get_contents(DIR.'data/indexes.json');
    $index = json_decode($index, 1);
    $id = (int) $index['id'];
    $index['id'] = $id + 1;
    $index = json_encode($index);
    file_put_contents(DIR.'/data/indexes.json', $index);
    return $id;
}

function getUser(int $id) : ?array
{
    $users = readData();
    foreach($users as $user) {
        if($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

// function create(string $fName, string $lName, string $accountNum, int $personId) : void
// {
//     $users = readData();
//     $id = getNextId();
//     $user = ['id' => $id, 'fName' => $fName, 'lName' => $lName, 'accountNum' => $accountNum, 'personId' => $personId, 'currentAmount' => 0];
//     // 2d array, jo sekantis index'as musu sukurtas useris
//     $users[] = $user;
//     writeData($users);
// }

function create(string $fName, string $lName, string $personId) : void
{
    $users = readData();
    $id = getNextId();
    foreach($users as $user) 
    {
        if($user['personId'] == $personId) {
            $_SESSION['status'] = 'Ivyko klaida! Bandykite dar karta.';
            return;
        }
    }
    $user = ['id' => $id, 'fName' => $fName, 'lName' => $lName, 'accountNum' => createAccountNum(), 'personId' => $personId, 'currentAmount' => 0];
    // 2d array, jo sekantis index'as musu sukurtas useris
    $users[] = $user;
    writeData($users);
    $_SESSION['status'] = 'Operacija atlikta sėkmingai!';
}

function add(int $id, float $addAmount) : void
{
    $users = readData();
    $user = getUser($id);
    if(!$user) {
        return;
    }
    $addAmountround = round($addAmount, 2);
    if($addAmountround <= 0) {
        $_SESSION['status'] = 'Ivyko klaida! Bandykite dar karta.';
        return;
    }
    $user['currentAmount'] += $addAmountround;
    deleteUser($id);
    $users = readData();
    $users[] = $user;
    writeData($users);
    $_SESSION['status'] = 'Operacija atlikta sėkmingai!';
}

function withdraw(int $id, float $withdraw) : void
{
    $users = readData();
    $user = getUser($id);
    if(!$user) {
        return;
    }
    $withdrawRound = round($withdraw, 2);
    if($withdraw <= 0) {
        $_SESSION['status'] = 'Ivyko klaida! Bandykite dar karta.';
        return;
    }
    $currentAmount = (float) $user['currentAmount'];
    $afterWithdraw = $currentAmount - $withdrawRound;
    $afterWithdrawRound = round($afterWithdraw, 2);
    if($afterWithdraw >= 0) {
        $user['currentAmount'] = $afterWithdrawRound;
        deleteUser($id);
        $users = readData();
        $users[] = $user;
        writeData($users);
        $_SESSION['status'] = 'Operacija atlikta sėkmingai!';
    }  else {
        $_SESSION['status'] = 'Ivyko klaida! Bandykite dar karta.';
        return;
    }
}

function deleteUser(int $id) : void
{
    $users = readData();
    foreach($users as $key => $user) {
        if($user['id'] == $id) {
            unset($users[$key]);
            writeData($users);
            return;
        } else {
            $_SESSION['status'] = 'Ivyko klaida! Bandykite dar karta.';
        }
    }
};

function checkPersonId(string $personId)
{
    $users = readData();
    foreach($users as $user) {
        if($user['personId'] == $personId) {
            $_SESSION['status'] = 'Ivyko klaida! Bandykite dar karta.';
            return;
        } else {
            return $personId;
        }
    }
    // be paskutinio kontrolinio skaiciaus
    // /^[3-6][3-9][0-9](?:0[1-9]|1[012])((?:0[1-9])|(?:1[0-2]))[0-9][0-9][1-9]/
}

function createAccountNum() : string
{
    $checkedNum = '01';
    $bankCode = '88000';
    // $priorAccountNum = '12345678901';
    $randAccNum = '';
    for($i = 0; $i <= 10; $i++) {
        $rand = (string) rand(0, 9);
        $randAccNum .= $rand;
    }
    $accountNum = 'LT' . $checkedNum . $bankCode . $randAccNum;
    $accountNum = (string) $accountNum;
    return $accountNum;
}

// function message($result) : void
// {
//     if(isset($_SESSION['status'])) {
//         echo '<p style="color:green;margin-left:80px;">'.$_SESSION['status'].'</p>';
//         unset($_SESSION['status']);
//     }
// }
/*
//  accountNum - LT + 18num    personId - 11num
[
    ['id' => '1', 'name' => 'A', 'surname' => 'B', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
    ['id' => '2', 'name' => 'C', 'surname' => 'D', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
]
*/