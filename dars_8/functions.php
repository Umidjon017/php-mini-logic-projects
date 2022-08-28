<?php

    function connect()
    {
        global $config;
        $db = new mysqli($config['db']['host'], $config['db']['username'], $config['db']['password']) or die($db->error);
        $db->query("SET NAMES utf8");
        return $db;
    }

    function createDb($dbName)
    {
        $db = connect();
        $name = $dbName ?: 'newDatabase_1';
        $sql = $db->query("CREATE DATABASE {$name}");
        if ($sql)
            return true;
        return false;
    }

    function dropDb($dbName) {
        $db = connect();
        $sql = $db->query("DROP DATABASE {$dbName}");
        if ($sql)
            return true;
        return false;
    }

    function createTable($dbName, $tName) {
        $db = connect();
        $sql = $db->query("
            CREATE TABLE {$dbName}.{$tName}(
                id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                login varchar(25) NOT NULL,
                password varchar(25) NOT NULL,
                status varchar(10) NOT NULL,
                time date NOT NULL
            )ENGINE=InnoDB DEFAULT CHARSET=utf8
        ");
        if ($sql)
            return true;
        return false;
    }

    function addRowToTable($dbName, $tableName, $addTableRow, $afterRow) {
        $db = connect();
        $sql = $db->query("ALTER TABLE {$dbName}.{$tableName} ADD $addTableRow VARCHAR(100) NOT NULL AFTER $afterRow");
        if ($sql)
            return true;
        return false;
    }

    function dropRowFromTable($dbName, $tableRow, $dropRow) {
        $db = connect();
        $sql = $db->query("ALTER TABLE {$dbName}.{$tableRow} DROP {$dropRow}");
        if ($sql)
            return true;
        return false;
    }

    function changeTypeToEnum($dbName, $tableName, $row) {
        $db = connect();
        $sql = $db->query("ALTER TABLE {$dbName}.{$tableName} CHANGE {$row} {$row} ENUM('active', 'inactive') NOT NULL");
        if ($sql)
            return true;
        return false;
    }

    function addIndex($dbName, $tableNme, $row) {
        $db = connect();
        $sql = $db->query("ALTER TABLE {$dbName}.{$tableNme} ADD KEY {$row}($row)");
        if ($sql)
            return true;
        return false;
    }

    function createForeignKey($tableName, $indexedRow, $tableName2, $foreignKeyedRow) {
        $db = connect();
        $sql = $db->query("
            ALTER TABLE test_db.{$tableName} ADD FOREIGN KEY ({$indexedRow})
                REFERENCES test_db.{$tableName2}({$foreignKeyedRow})
                ON DELETE CASCADE
                ON UPDATE CASCADE
        ");
        if ($sql)
            return true;
        return false;
    }