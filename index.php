<?php
error_reporting(0);
$angka = [1,2,3,4,5,6,7,8];

//mendapatkan pasangan angka(koordinat bidak ratu)
for($i = 0; $i < 8; $i++) {
    for($j = 0; $j < 8; $j++){
            $pair = $angka[$i].','.$angka[$j]; 
            $queen[$pair] = 0; 
    }
}

// mengacak koordinat bidak ratu
$rand = array_rand($queen,8);

//============ menentukan gerakan ===============//

//lurus ke atas
function atas($a, $b, $rn)
{
	while ($b > 1) {
        $b--;
        $ats = $a.','.$b;
        foreach ($rn as $key => $koor) {
            if($ats == $koor) {
                $pats = $ats;
        
            }
        }
    }
    return $pats;
}

//lurus ke bawah
function bawah($a, $b)
{
	while ($b < 8) {
        $b++;
        $bwh = $a.','.$b;
    }
    return $bwh;
}

//lurus ke kanan
function kanan($a, $b)
{
	while ($a < 8) {
        $a++;
        $knn = $a.','.$b;
    }
    return $knn;
}
//lurus ke kiri
function kiri($a, $b)
{
	while ($a > 1) {
        $a--;
        $kri = $a.','.$b;
    }
    return $kri;
}

//diagonal ke atas kanan
function atasknn($a, $b)
{
	while ($b < 8 && $a < 8) {
        $a++;
        $b++;
        $atskn = $a.','.$b;
    }
    return $atskn;
}

//diagonal ke atas kiri
function ataskri($a, $b)
{
	while ($b < 8 && $a < 1) {
        $a--;
        $b++;
        $atskr = $a.','.$b;
    }
    return $atskr;
}

//diagonal ke bawah kanan
function bawahknn($a, $b)
{
	while ($a < 8 && $b > 1) {
        $a++;
        $b--;
        $bwhkn = $a.','.$b;
    }
    return $bwhkn;
}

//diagonal ke bawah kiri
function bawahkri($a, $b)
{
	while ($a > 1 && $b > 1) {
        $a--;
        $b--;
        $bwhkr = $a.','.$b;
    }
    return $bwhkr;
}

//================================================================//

foreach ($rand as $key => $titik) {
    // Start dari 0 ambil 9 karakter (perempuan)
    $a = substr($titik, 0, 1);
    // Start dari 9 ambil 2 karakter (10)
    $b = substr($titik, 2, 1);
    $atas = atas($a, $b, $rand);
    echo "<pre>";
    print_r($atas);
    echo "</pre>";
    // foreach($atas as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }
    //     $bawah = bawah($a, $b);
    // foreach($bawah as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }
    //     $kanan = kanan($a, $b);
    // foreach($kanan as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }
    //     $kiri = kiri($a, $b);
    // foreach($kiri as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }
    //     $atasknn = atasknn($a, $b);
    // foreach($atasknn as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }
    //     $ataskri = ataskri($a, $b);
    // foreach($ataskri as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }
    //     $bawahknn = bawahknn($a, $b);
    // foreach($bawahknn as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }
    //     $bawahkri = bawahkri($a, $b);
    // foreach($bawahkri as $koordinat) { 
    //     foreach ($rand as $key => $koor) {
    //         if($koordinat == $koor) {
    //             echo "<pre>";
    //             print_r($titik);
    //             echo "</pre>";

    //         }
    //     } 
    //     }

}

echo "<pre>";
// print_r($angka);
// print_r($a);
echo "Posisi bidak ratu (x,y) <br>";
print_r($rand);
// print_r($a);
echo "</pre>";
?>