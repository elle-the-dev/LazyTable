<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

<style type="text/css">
button.editable, button.deletable
{
    width: 20px;
    height: 20px;
    background-color: transparent;
    background-repeat: no-repeat;
    color: transparent;
    border: none;
    cursor: pointer;
}

button.editable
{
    background-image: url('css/img/editicon.gif');
}

button.deletable
{
    background-image: url('css/img/trashicon.gif');
}

td.editdelete
{
    width: 50px;
}

td.editdelete form, td.editdelete form div
{
    display: inline;
}
</style>

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
    'class' => 'lazyTable',
    'editable' => true,
    'editMethod' => 'get',
    'editParams' => array (
        'type' => 'fruit'
    ),
    'deletable' => true,
    'deleteMethod' => 'post',
    'deleteParams' => array (
        'type' => 'fruit'
    )
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
        'heading' => 'Price'
    )
);

$table = new LazyTable($rows, $tableSettings, $columnSettings);
$table->render();
?>
