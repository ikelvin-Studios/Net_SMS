<?php
require_once 'Net/SMS/win_http.php';
require_once 'PHPUnit/Framework/TestCase.php';

class Net_SMS_win_httpTest extends PHPUnit_Framework_TestCase {


    public function test() {
        $driver = new Net_SMS_win_http();

        $driver->send(null);
    }
}
