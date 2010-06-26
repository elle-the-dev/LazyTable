<link rel="stylesheet" type="text/css" href="css/tablesorter.css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
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
    'class' => 'tablesorter',
);

$columnSettings = array (
    'id' => array (
        'visible' => false
    ),
    'fruit' => array (
        'heading' => 'Fruit',
        'link'  => 'http://en.wikipedia.org/wiki/__fruit__ (fruit)'
    ),
    'price' => array (
        'heading' => 'Price',
        'sorted' => 'desc',
        'formatFunction' => 'number_format',
        'formatArgs' => array (
            '__price__',
            2,
            '.',
            ','
        )
    )
);

$table = new LazyTable($rows, $tableSettings, $columnSettings);
$table->render();
?>
