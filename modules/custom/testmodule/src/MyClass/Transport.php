<?php
namespace \Drupal\testmodule\MyClass

abstract class Transport {

    public $type;
    public $size;

    public function __construct ($type, $size) {

    }

    public abstract function canIDrive ($type) : bool;

}
