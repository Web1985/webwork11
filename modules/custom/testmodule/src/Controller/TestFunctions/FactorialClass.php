<?php

namespace Drupal\testmodule\Controller\TestFunctions;

use Drupal\Core\Controller\ControllerBase;


class FactorialClass extends ControllerBase{
    public $num = 1;

    public static function getFactoriale(int $num) : int {
        $final = $num;
        if ($num === 0) {
            return 1;
        }
        for ($i = 1; $i < $final; $i++) {
           $num *= $i;
        }
        return  $num;
    }

    public function content() : array {
      return [
        '#type' => 'markup',
        '#markup' => t('<h2>Factorial: @factorial</h2>',
        ['@factorial' => self::getFactoriale(20)]),
        '#cache' => ['max-age' => 0],
      ];
    }
}