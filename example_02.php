<?php
require_once('LazyTable.class.php');

$rows = array (
    0 => array (
        'id'    => 1,
        'fruit' => 'apple',
        'price' => 1.49
    ),
    
    1 => array (
        'id'    => 2,
        'fruit' => 'orange',
        'price' => 1.99
    ),

    2 => array (
        'id'    => 3,
        'fruit' => 'banana',
        'price' => 3.50
    )
);

$tableSettings = array (
    'id'    => 'fruitTable',
    'class' => 'lazyTable'
);

$columnSettings = array (
    'id' => array (
        'visible' => false
    ),
    'fruit' => array (
        'heading' => 'Fruit'
    ),
    'price' => array (
        'heading' => 'Price'
    )
);

$table = new LazyTable($rows, $tableSettings, $columnSettings);
$table->render();
?>
