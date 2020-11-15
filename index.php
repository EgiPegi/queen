<?php
$angka = [1,2,3,4,5,6,7,8];

for($i = 0; $i < 8; $i++) {
    for($j = 0; $j < 8; $j++){
            $pair = $angka[$i].','.$angka[$j]; 
            $queen[$pair] = 0; 
    }
}

// shuffle($queen);
$rand = array_rand($queen,8);
// for($i = 0; $i < 8; $i++) {
//     for($j = $i; $j < 8; $j++){
//             $pair = $angka[$i].','.$angka[$j]; 
//             $queen[$pair] = 1; 
//     }
// }
echo "<pre>";
// print_r($angka);
// print_r($a);
print_r($rand);

echo "</pre>";
?>