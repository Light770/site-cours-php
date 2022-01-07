<?php
$db = new PDO('dblib:host='.$config['database']['host'].';dbname='.$config['database']['dbname'].';charset=UTF-8', $config['database']['user'], $config['database']['password']);


function sqlNew($db, $table, $column , $value)
{

   /* $sql = "SELECT"
    foreach ($column as $value) {
        $sql .= ' ,' . $value;
    }
    $sql .=  ' FROM fruit ORDER BY name';
foreach  ($conn->query($sql) as $row) {
    print $row['name'] . "\t";
    print  $row['color'] . "\t";
    print $row['calories'] . "\n";
}*/
}

function sqlFetch($db, $table, $id, $key)
{
 /*  
    $sql = "SELECT"
    foreach ($column as $value) {
        $sql .= ' ,' . $value;
    }
    $sql .=  ' FROM fruit ORDER BY name';
    foreach  ($conn->query($sql) as $row) {
        print $row['name'] . "\t";
        print  $row['color'] . "\t";
        print $row['calories'] . "\n";  
    }
    */
}