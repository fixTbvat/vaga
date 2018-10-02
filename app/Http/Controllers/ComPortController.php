<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use lepiaf\SerialPort\SerialPort;
use lepiaf\SerialPort\Parser\SeparatorParser;
use lepiaf\SerialPort\Configure\TTYConfigure;

class ComPortController extends Controller
{

    public function getData()
    {
        $serialPort = new SerialPort(new SeparatorParser(), new TTYConfigure());


        $serialPort->open("COM1");
        dd($serialPort);
        while ($data = $serialPort->read()) {
            echo $data . "\n";

//if ($data === "OK") {
//$serialPort->write("1\n");
//$serialPort->close();
//}
//}

        }
    }
}
