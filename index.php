<?php
// has the functions like store, findall, deletestore etc..
include 'vendor/rakibtg/sleekdb/src/SleekDB.php';

//directory of the databse to store the tables and stuff
$dataDir = __DIR__ . "/myDatabase";

 //using the Store Function to Create a table
use SleekDB\Store;

//Creating new Stores
$newsStore = new Store('news', $dataDir);
$userStore = new Store('users', $dataDir);
$postStore = new Store('posts', $dataDir);

//making Json Type data to add to the table
$user=[
    'name'=> 'Maneth Pathirana',
    'about' => 'smpmaneth@gmail.com',
    'avatar' => [
        'sm' => '/img-sm.jpg',
        'lg' => "/img-lg.jpg"
    ]
];
//adding above data to the Users table
$userStore->insert($user);

//deleting a table(store)
$newsStore->deleteStore();

//fetch all the data from a store(table)
$allNews = $userStore->findAll();

print_r(count($allNews));


?>
