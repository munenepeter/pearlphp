<?php

$pearls = array_unique(explode(",",file_get_contents('pearls.txt')));

$pearls = array_map(function ($pearl){
  return trim($pearl);
}, $pearls);

echo "<pre>";
var_dump($pearls);

