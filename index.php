<?php

    $databasename='';
    $user='jenia';
    $pass='1q2w3e$R';

$dbh = new PDO('mysql:host=localhost;dbname=university', $user, $pass);

$stmt = $dbh->query('SELECT name FROM University');
while ($row = $stmt->fetch())
{
    echo $row['name'] . "\n";
}

echo 'dfsdfsd';
echo $dbh;
