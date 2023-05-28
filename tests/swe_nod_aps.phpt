--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php

include 'utility/Format.php';

swe_set_ephe_path('./sweph/ephe');

$out = function (array $nod): array {
    $out = [];

    foreach ($nod as $key => $values) {
        $out[$key] = $values;

        if (is_array($values)) {
            $out[$key] = Format::round($values);
        }
    }

    return $out;
};

var_dump($out(swe_nod_aps(2452275.5, 2, SEFLG_SWIEPH|SEFLG_SPEED, SE_NODBIT_MEAN)));
var_dump($out(swe_nod_aps(2452275.499256, 2, SEFLG_SWIEPH|SEFLG_SPEED, SE_NODBIT_MEAN)));

?>
--EXPECT--
array(5) {
  ["retflag"]=>
  int(0)
  ["xnasc"]=>
  array(6) {
    [0]=>
    float(297.797963)
    [1]=>
    float(0.000176)
    [2]=>
    float(0.827924)
    [3]=>
    float(1.154826)
    [4]=>
    float(2.4E-5)
    [5]=>
    float(0.005224)
  }
  ["xndsc"]=>
  array(6) {
    [0]=>
    float(264.609052)
    [1]=>
    float(0.000111)
    [2]=>
    float(1.310631)
    [3]=>
    float(0.735528)
    [4]=>
    float(9.0E-6)
    [5]=>
    float(-0.00476)
  }
  ["xnperi"]=>
  array(6) {
    [0]=>
    float(290.12756)
    [1]=>
    float(1.470745)
    [2]=>
    float(0.711423)
    [3]=>
    float(1.341121)
    [4]=>
    float(1.460216)
    [5]=>
    float(0.004328)
  }
  ["xnaphe"]=>
  array(6) {
    [0]=>
    float(273.009983)
    [1]=>
    float(-1.114926)
    [2]=>
    float(1.423897)
    [3]=>
    float(0.715837)
    [4]=>
    float(-1.116434)
    [5]=>
    float(-0.003296)
  }
}
array(5) {
  ["retflag"]=>
  int(0)
  ["xnasc"]=>
  array(6) {
    [0]=>
    float(297.797104)
    [1]=>
    float(0.000176)
    [2]=>
    float(0.82792)
    [3]=>
    float(1.154832)
    [4]=>
    float(2.4E-5)
    [5]=>
    float(0.005224)
  }
  ["xndsc"]=>
  array(6) {
    [0]=>
    float(264.608504)
    [1]=>
    float(0.000111)
    [2]=>
    float(1.310635)
    [3]=>
    float(0.735527)
    [4]=>
    float(9.0E-6)
    [5]=>
    float(-0.00476)
  }
  ["xnperi"]=>
  array(6) {
    [0]=>
    float(290.126527)
    [1]=>
    float(1.470749)
    [2]=>
    float(0.711421)
    [3]=>
    float(1.341128)
    [4]=>
    float(1.46022)
    [5]=>
    float(0.004328)
  }
  ["xnaphe"]=>
  array(6) {
    [0]=>
    float(273.009464)
    [1]=>
    float(-1.114925)
    [2]=>
    float(1.423899)
    [3]=>
    float(0.715836)
    [4]=>
    float(-1.116433)
    [5]=>
    float(-0.003296)
  }
}
