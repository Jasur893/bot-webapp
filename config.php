<?php
session_start();
// header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Tashkent');

const API_KEY = '7044669176:AAER4UHopx87WwetTa1cBFJfwBJDSO4F4-o';
// admin akkounti id raqamini ushbu bot orqali bilishingiz mumkin @infomiruz_idbot
$admin = "1078608772";
$system_pass = "123";
// $kurs_rub = 140;
$logging = true; //false
$share_btn = [
    'share_btn' => "Do'stlarni taklif qilish 👭",
    'share_text' => "🤩🥳 Salom, biz do'stlarimiz bilan yangi guruhda, sovg'alar o'yini tashkil etdik, omadingizni sinab ko'rmaysizmi (tekinga) ?!",
    'share_link' => "https://t.me/my_super_grouptuzel"
];
$db_mysql = [
    "status" => true,
    "host" => "localhost",
    "name" => "cmhosting_webapp",
    "user" => "root",
    "pass" => ""
];
$products = [
    [
        'title' => 'Qizil olma',
        'info' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        'photo' => "1.png",
        'price' => 4200,
    ],
    [
        'title' => 'Samarqand Gilos',
        'info' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        'photo' => "2.png",
        'price' => 5000,
    ],
    [
        'title' => 'Ananas',
        'info' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        'photo' => "3.png",
        'price' => 3500,
    ],
    [
        'title' => 'Qulupnay',
        'info' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        'photo' => "4.png",
        'price' => 2100,
    ],
    [
        'title' => 'Apelsin',
        'info' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        'photo' => "5.png",
        'price' => 3600,
    ],
    [
        'title' => 'Limon',
        'info' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        'photo' => "6.png",
        'price' => 2800,
    ]
];