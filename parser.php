<?php

require "vendor/autoload.php";
use PHPHtmlParser\Dom;


$dom = new Dom;
$dom->loadFromUrl('https://www.idokep.hu/idojaras/Pecs');


//hétfő 

$a = $dom->find('.max-homerseklet-default')[0];
$a->text;

$b = $dom->find('.min-homerseklet-default')[0];
$b->text;

$h = intval ($a->text) - intval ($b->text);


//kedd

$d = $dom->find('.max-homerseklet-default')[1];
$d->text;

$e = $dom->find('.min-homerseklet-default')[1];
$e->text;

$k = intval ($d->text) - intval ($e->text);


//szerda

$e = $dom->find('.max-homerseklet-default')[2];
$e->text;

$f = $dom->find('.min-homerseklet-default')[2];
$f->text;

$sz = intval ($e->text) - intval ($f->text);


//csütörtök

$g = $dom->find('.max-homerseklet-default')[3];
$g->text;

$i = $dom->find('.min-homerseklet-default')[3];
$i->text;

$cs = intval ($g->text) - intval ($i->text);


//péntek

$j = $dom->find('.max-homerseklet-default')[4];
$j->text;

$l = $dom->find('.min-homerseklet-default')[4];
$l->text;

$p = intval ($j->text) - intval ($l->text);


//szombat

$m = $dom->find('.max-homerseklet-default')[5];
$m->text;

$n = $dom->find('.min-homerseklet-default')[5];
$n->text;

$szo = intval ($m->text) - intval ($n->text);


//vasárnap

$o = $dom->find('.max-homerseklet-default')[6];
$o->text;

$q = $dom->find('.min-homerseklet-default')[6];
$q->text;

$v = intval ($o->text) - intval ($q->text);



//műveletek

//hőingások

$ingas = array ($h, $k, $sz, $cs, $p, $szo, $v); 


foreach($ingas as $loopdata){
  echo "A napi hőingás: " .$loopdata. " °C <br>";
}
  echo "A napi legnagyobb hőingás: " .(max($ingas)). " °C <br>";
  echo "A napi legkisebb hőingás: " .(min($ingas)). " °C <br>";

$average = array_sum($ingas) / count($ingas);
 
  echo "A heti átlag hőingás: " .$average. "°C <br>";



//szórás

function Stand_Deviation($ingas) 
    { 
        $num_of_elements = count($ingas); 
          
        $variance = 0.0; 
          
                 
        $average = array_sum($ingas)/$num_of_elements; 
          
        foreach($ingas as $i) 
        { 
            
            $variance += pow(($i - $average), 2); 
        } 
          
        return (float)sqrt($variance/$num_of_elements); 
    } 
      
     
$ingas = array($h, $k, $sz, $cs, $p, $szo, $v); 
      echo "A szórás értéke: ";  
      print_r(Stand_Deviation($ingas)); 
      echo "<br>";

//medián

function calculate_median($ingas) {
        $count = count($ingas); 
        $middleval = floor(($count-1)/2); 
        if($count % 2) { 
            $median = $ingas[$middleval];
        } else { 
            $low = $ingas[$middleval];
            $high = $ingas[$middleval+1];
            $median = (($low+$high)/2);
        }
        return $median;
    }
$ingas = array($h, $k, $sz, $cs, $p, $szo, $v); 
        echo "A medián értéke: ";  
        print_r(calculate_median($ingas));
        echo "<br>";





?>