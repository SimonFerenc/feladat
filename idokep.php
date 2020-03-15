<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$ingas = array (9-1, 12-5, 13-4, 14-4, 11-3, 11-4, 12-4); 

foreach($ingas as $loopdata){
echo "A napi hőingás: " .$loopdata. " °C <br>";
}
echo "A napi legnagyobb hőingás: " .(max($ingas)). " °C <br>";
echo "A napi legkisebb hőingás: " .(min($ingas)). " °C <br>";

$average = array_sum($ingas) / count($ingas);
 

echo "A heti átlag hőingás: " .$average. "°C <br>";

//Szórás


function Stand_Deviation($ingas) 
    { 
        $num_of_elements = count($ingas); 
          
        $variance = 0.0; 
          
                // calculating mean using array_sum() method 
        $average = array_sum($ingas)/$num_of_elements; 
          
        foreach($ingas as $i) 
        { 
            // sum of squares of differences between  
                        // all numbers and means. 
            $variance += pow(($i - $average), 2); 
        } 
          
        return (float)sqrt($variance/$num_of_elements); 
    } 
      
    // Input array 
    $ingas = array(8, 7, 9, 10, 8, 7, 8); 
    echo "A szórás értéke: ";  
    print_r(Stand_Deviation($ingas)); 
    echo "<br>";

 // ez a medián lesz, ez még nem jó, mert nekem kellet kézileg beállítani növekvő sorba az array elemeit

 function calculate_median($ingas) {
    $count = count($ingas); //total numbers in array
    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
    if($count % 2) { // odd number, middle is the median
        $median = $ingas[$middleval];
    } else { // even number, calculate avg of 2 medians
        $low = $ingas[$middleval];
        $high = $ingas[$middleval+1];
        $median = (($low+$high)/2);
    }
    return $median;
}
$ingas = array(7, 7, 8, 8, 8, 9, 10); 
    echo "A medián értéke: ";  
    print_r(calculate_median($ingas));
    echo "<br>";

    
// a következő az lesz, h classban objektumonként jelenítse meg az adatokat
// majd úgy csinálni, h legyen public meg privát meg a kisfaszom a classon belül, és lehet, h kéne getter meg setter is 
    
 




 

    ?>

    
</body>
</html>

<!-- előszőr a napi hőingadozások (a legalacsonyabb és a legnagyobb hőmérséklet különbsége, de ez nem elég, hanem kell a legalacsonyabb és legnagyobb hőingás is),
- utána a medián, átlag és szórás számítás
