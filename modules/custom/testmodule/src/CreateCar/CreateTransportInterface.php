<?php
namespace \Drupal\testmodule\MyClass;

interface CreateTransportInterface {
    public function setType(string $type) : void;
    public function setEngine ($engine): void;
    public function setWeels ($weels): void;

    public function setTransmission ($transmission): void;

    public funtion setCarBody ($car_body): void;

    public function setColor ($color) : void;



}
