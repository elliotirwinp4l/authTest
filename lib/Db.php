<?php

/**
 * Created by PhpStorm.
 * User: elliot
 * Date: 09/05/2016
 * Time: 08:35
 */
class Db
{
    function __constructor() {
        try {
            $dbh = new PDO("mysql:host=Config::db()['host'];dbname=Config::db()['name']", Config::db()['user'], Config::db()['pass']);
            $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
    }
}