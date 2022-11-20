<?php
    function getDB(){
        $pdo = new PDO('mysql:host=mysql206.phy.lolipop.lan;dbname=LAA1419703-shop;charset=utf8'
            ,'LAA1419703'
            ,'mami082121P');
        return $pdo;
    }