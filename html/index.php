
<?php

echo "Mysql Connection Test : ";

try {
    $dbh = new PDO('mysql:host='.$_ENV['DATABASE_HOST'].';dbname='.$_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
    foreach($dbh->query('show databases') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}

echo "ElasticSearch Connection Test : ";


