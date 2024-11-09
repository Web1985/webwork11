<?php
namespace \Drupal\testmodule\MyClass;

interface TransportInterface {
    public function rideMe() : string;
    public function setOverrideMe(string $overrideMe) : void;
    public function getOverrideMe() : string;

}
