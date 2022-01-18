<?php
$I = [
    "Vegetables"=> [
        "0"=> "Asparagus",
        "1"=> "Celery",
        "Potatoes"=> ["Yukon gold potato", "Laura potato", "Red gold potato"]
    ],
    "Fruits"=> [
        "0"=> "Grapefruit",
        "1"=> "Pineapple",
        "Grapes"=> ["Red Grape", "Purple Grapes", "Green Grape"],
        "2"=> "Avocado",
        "3"=> "Bananas"
    ],
    "Sweets"=> [
        "Cakes"=> ["Napoleon", "Symphony"],
        "Candies"=> [
            "Lollipops"=> ["Chupa Chups", "Chupa Chups Mini"],
            "0"=> "Haribo",
            "1"=> "Gummi bears"
        ]
    ]
];

$pre = '';
tree($I, $pre);

function tree($I, $pre) {
    $pre = $pre.'-';
    foreach ($I as $k => $v) {
        if (is_array($v)) {
            echo "<br>{$pre}{$k}";
            tree($v, $pre);
        } else echo"<br>{$pre}{$v}";
    }
}

?>