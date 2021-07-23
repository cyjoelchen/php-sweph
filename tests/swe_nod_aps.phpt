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
    float(297.797964)
    [1]=>
    float(0.000177)
    [2]=>
    float(0.827925)
    [3]=>
    float(1.154826)
    [4]=>
    float(2.4E-5)
    [5]=>
    float(0.005225)
  }
  ["xndsc"]=>
  array(6) {
    [0]=>
    float(264.609052)
    [1]=>
    float(0.000112)
    [2]=>
    float(1.310632)
    [3]=>
    float(0.735529)
    [4]=>
    float(9.0E-6)
    [5]=>
    float(-0.004761)
  }
  ["xnperi"]=>
  array(6) {
    [0]=>
    float(290.127561)
    [1]=>
    float(1.470745)
    [2]=>
    float(0.711424)
    [3]=>
    float(1.341122)
    [4]=>
    float(1.460216)
    [5]=>
    float(0.004329)
  }
  ["xnaphe"]=>
  array(6) {
    [0]=>
    float(273.009984)
    [1]=>
    float(-1.114927)
    [2]=>
    float(1.423898)
    [3]=>
    float(0.715837)
    [4]=>
    float(-1.116435)
    [5]=>
    float(-0.003297)
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
    float(0.000177)
    [2]=>
    float(0.827921)
    [3]=>
    float(1.154833)
    [4]=>
    float(2.4E-5)
    [5]=>
    float(0.005224)
  }
  ["xndsc"]=>
  array(6) {
    [0]=>
    float(264.608505)
    [1]=>
    float(0.000112)
    [2]=>
    float(1.310635)
    [3]=>
    float(0.735527)
    [4]=>
    float(9.0E-6)
    [5]=>
    float(-0.004761)
  }
  ["xnperi"]=>
  array(6) {
    [0]=>
    float(290.126528)
    [1]=>
    float(1.47075)
    [2]=>
    float(0.711421)
    [3]=>
    float(1.341128)
    [4]=>
    float(1.460221)
    [5]=>
    float(0.004329)
  }
  ["xnaphe"]=>
  array(6) {
    [0]=>
    float(273.009464)
    [1]=>
    float(-1.114926)
    [2]=>
    float(1.423899)
    [3]=>
    float(0.715836)
    [4]=>
    float(-1.116433)
    [5]=>
    float(-0.003297)
  }
}
