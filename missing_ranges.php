<?php

function numRange(&$s, $lower, $upper){
  if (empty($s)){
      return 0;
    }
  $output = [];
  for ($i=0; $i<count($s); $i++){
      if (($s[$i] <= $lower) || ($s[$i]-1 == $s[$i-1])){
              continue;
            }
      if (($s[$i]-1) == ($s[$i-1]+1)){
              $output[] = $s[$i]-1;
            }
      if (($s[$i]-1) != ($s[$i-1]+1)){
              $min = ($s[$i-1]+1);
              $max = ($s[$i]-1);
              $output[] = $min."->".$max;
            }
      if (!isset($s[$i+1])){
              $min = ($s[$i]+1);
              $max = ($upper-1);
              $output[] = $min."->".$max;
            }
    }
  return $output;
}

$s = [0,1,3,50,75];
$min = 0;
$max = 99;

$range = numRange($s, $min, $max);
print_r($range);
