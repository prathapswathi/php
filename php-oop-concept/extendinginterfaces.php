<?php

interface IInfo {

    public function do_inform();
}

interface IVersion {

    public function get_version();
}

interface ILog extends IInfo, IVersion {

    public function do_log();
}


class DBConnect implements ILog {

    public function do_inform() {
    
        echo "This is a DBConnect class\n";
    }

    public function get_version() {
    
        echo "Version 1.02\n";
    }

    public function do_log() {
    
        echo "Logging\n";
    }

    public function connect() {
    
        echo "Connecting to the database\n";
    }
}

$db = new DBConnect();
$db->do_inform();
$db->get_version();
$db->do_log();
$db->connect();