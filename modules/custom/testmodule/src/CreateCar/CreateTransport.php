<?php
namespace \Drupal\testmodule\MyClass

abstract class CreateTransport {

    public $type;
    public $size;

    public function __construct ($type, $size) {

    }

    public abstract function setType (string $type) : string;
    public abstract function setSize (string $size) : string;


}
