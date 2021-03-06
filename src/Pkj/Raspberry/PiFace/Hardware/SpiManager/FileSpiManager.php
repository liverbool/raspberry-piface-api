<?php

namespace Pkj\Raspberry\PiFace\Hardware\SpiManager;

use Pkj\Raspberry\PiFace\Hardware\SpiManager\SpiInterface;

class FileSpiManager implements SpiInterface
{
    public function __construct($bus, $chipselect, array $options = array())
    {
    }

    public function transfer(array $data)
    {
        return $data;
    }

    public function blockTransfer(array $data, $colDelay = 1, $disregard = false)
    {
        if ($disregard) {
            return count($data);
        }
        return $data;
    }
}
