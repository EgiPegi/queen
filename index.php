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
function bawah($a, $b, $rn)
{
	while ($b < 8) {
        $b++;
        $bwh = $a.','.$b;
        foreach ($rn as $key => $koor){
            if ($bwh == $koor) {
                $pbwh = $bwh;
            }
        }
    }
    return $pbwh;
}

//lurus ke kanan
function kanan($a, $b, $rn)
{
	while ($a < 8) {
        $a++;
        $knn = $a.','.$b;
        foreach ($rn as $key => $koor){
            if ($knn == $koor) {
                $pknn = $knn;
            }
        }
    }
    return $pknn;
}
//lurus ke kiri
function kiri($a, $b, $rn)
{
	while ($a > 1) {
        $a--;
        $kri = $a.','.$b;
        foreach ($rn as $key => $koor){
            if ($kri == $koor) {
                $pkri = $kri;
            }
        }
    }
    return $pkri;
}

//diagonal ke atas kanan
function atasknn($a, $b, $rn)
{
	while ($b < 8 && $a < 8) {
        $a++;
        $b++;
        $atskn = $a.','.$b;
        foreach ($rn as $key => $koor){
            if ($atskn == $koor) {
                $patskn = $atskn;
            }
        }
    }
    return $patskn;
}

//diagonal ke atas kiri
function ataskri($a, $b, $rn)
{
	while ($b < 8 && $a < 1) {
        $a--;
        $b++;
        $atskr = $a.','.$b;
        foreach ($rn as $key => $koor){
            if ($atskr == $koor) {
                $patskr = $atskr;
            }
        }
    }
    return $patskr;
}

//diagonal ke bawah kanan
function bawahknn($a, $b, $rn)
{
	while ($a < 8 && $b > 1) {
        $a++;
        $b--;
        $bwhkn = $a.','.$b;
        foreach ($rn as $key => $koor){
            if ($bwhkn == $koor) {
                $pbwhkn = $bwhkn;
            }
        }
    }
    return $pbwhkn;
}

//diagonal ke bawah kiri
function bawahkri($a, $b, $rn)
{
	while ($a > 1 && $b > 1) {
        $a--;
        $b--;
        $bwhkr = $a.','.$b;
        foreach ($rn as $key => $koor){
            if ($bwhkr == $koor) {
                $pbwhkr = $bwhkr;
            }
        }
    }
    return $pbwhkr;
}

//================================================================//

foreach ($rand as $key => $titik) {
    // Start dari 0 ambil 9 karakter (perempuan)
    $a = substr($titik, 0, 1);
    // Start dari 9 ambil 2 karakter (10)
    $b = substr($titik, 2, 1);
    $atas = atas($a, $b, $rand);
    $bawah = bawah($a, $b, $rand);
    $kanan = kanan($a, $b, $rand);
    $kiri = kiri($a, $b, $rand);
    $atasknn = atasknn($a, $b, $rand);
    $ataskri = ataskri($a, $b, $rand);
    $bawahknn = bawahknn($a, $b, $rand);
    $bawahkri = bawahkri($a, $b, $rand);


    echo "<pre>";
    print_r($atas);
    print_r($bawah);
    print_r($kanan); 
    print_r($kiri); 
    print_r($atasknn);
    print_r($ataskri);
    print_r($bawahknn);
    print_r($bawahkri);

    echo "</pre>";

}

echo "<pre>";
// print_r($angka);
// print_r($a);
echo "Posisi bidak ratu (x,y) <br>";
print_r($rand);
// print_r($a);
echo "</pre>";
?>