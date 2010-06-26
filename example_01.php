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

$table = new LazyTable($rows);
$table->render();
?>
