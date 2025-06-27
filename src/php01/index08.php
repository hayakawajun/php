<?php

$user = array(
        [
                "name" => "John",
                "age"  => 15 ,
                "gender" => "男性"
        ],
        [
                "name" => "Kate",
                "age"  => 20 ,
                "gender" => "女性"
        ],
        [
                "name" => "Bob",
                "age"  => 24 ,
                "gender" => "男性"
        ],
        [
                "name" => "Jane",
                "age"  => 15 ,
                "gender" => "女性"
        ]
);

foreach($user as $person => $date){
        echo $date[0]."は".$date[1]."歳の".$date[2]."です。";
        echo "<br />";
}