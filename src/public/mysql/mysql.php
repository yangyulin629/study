<?php


$connection = mysqli_connect('192.168.1.8', 'cdb', 'CDB2017!', 'cdb', 5306);
$result = $connection->query('select * from cdb.rules a inner join cdb.rules b on a.id = b.id');

while($row = mysqli_fetch_array($result)) {
    print_r($row);
}


