<?php
include 'vendor/rakibtg/sleekdb/src/SleekDB.php';

$dataDir = __DIR__ . "/myDatabase";
use SleekDB\Store;
$newsStore = new Store('news', $dataDir);
$userStore = new Store('users', $dataDir);
$postStore = new Store('posts', $dataDir);


$user=[
    'name'=> 'Maneth Pathirana',
    'about' => 'smpmaneth@gmail.com',
    'avatar' => [
        'sm' => '/img-sm.jpg',
        'lg' => "/img-lg.jpg"
    ]
];
$userStore->insert($user);

$article = [
    "title" => "Google Pixel XL",
    "about" => "Google announced a new Pixel!",
    "author" => [
        "avatar" => "profile-12.jpg",
        "name" => "Foo Bar",
    ],
];
// $results = $newsStore->insert($article);

$newsStore->deleteStore();

$allNews = $userStore->findAll();

print_r(count($allNews));


?>
