<?php
error_reporting(0);
?>
<form method="post">
<p>Masukan bidak 1 (x,y) :</p>
<input type="text" name="rand[0]" /><br />
<p>Masukan bidak 2 (x,y) :</p>
<input type="text" name="rand[1]" /><br />
<p>Masukan bidak 3 (x,y) :</p>
<input type="text" name="rand[2]" /><br />
<p>Masukan bidak 4 (x,y) :</p>
<input type="text" name="rand[3]" /><br />
<p>Masukan bidak 5 (x,y) :</p>
<input type="text" name="rand[4]" /><br />
<p>Masukan bidak 6 (x,y) :</p>
<input type="text" name="rand[5]" /><br />
<p>Masukan bidak 7 (x,y) :</p>
<input type="text" name="rand[6]" /><br />
<p>Masukan bidak 8 (x,y) :</p>
<input type="text" name="rand[7]" /><br />
<input type="submit">
</form>


<?php
$rand = $_POST['rand'];

//membuat class queen

class queen{

    public $angka;
    public $rand;
//============ menentukan gerakan ===============//

//lurus ke atas
function atas($a, $b, $rn)
{
	while ($b > 1) {
        $b--;
        $ats = $a.','.$b;
        foreach ($rn as $key => $koor) {
            if($ats == $koor) {
                $pats = '('.$ats.')';
        
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
                $pbwh = '('.$bwh.')';
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
                $pknn = '('.$knn.')';
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
                $pkri = '('.$kri.')';
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
                $patskn = '('.$atskn.')';
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
                $patskr = '('.$atskr.')';
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
                $pbwhkn = '('.$bwhkn.')';
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
                $pbwhkr = '('.$bwhkr.')';
            }
        }
    }
    return $pbwhkr;
}
}

//================================================================//

echo "<pre>";
echo "Posisi bidak ratu (x,y) <br>";
print_r($rand);
echo "</pre>";
//================//

foreach ($rand as $key => $titik) {
    // Start dari 0 ambil 9 karakter (perempuan)
    $a = substr($titik, 0, 1);
    // Start dari 9 ambil 2 karakter (10)
    $b = substr($titik, 2, 1);
    $queen = new queen();
    $atas[] = $queen -> atas($a, $b, $rand);
    $bawah[] = $queen -> bawah($a, $b, $rand);
    $kanan[] = $queen -> kanan($a, $b, $rand);
    $kiri[] = $queen -> kiri($a, $b, $rand);
    $atasknn[] = $queen -> atasknn($a, $b, $rand);
    $ataskri[] = $queen -> ataskri($a, $b, $rand);
    $bawahknn[] = $queen -> bawahknn($a, $b, $rand);
    $bawahkri[] = $queen -> bawahkri($a, $b, $rand);
}
    if (empty($atas)&&empty($bawah)&&empty($kanan)&&empty($kiri)&&empty($atasknn)&&empty($ataskri)&&empty($bawahknn)&&empty($bawahkri)) {
        echo "Tidak Ditemukan";
    } else {
    // echo "<pre>";
    foreach ($atas as $key => $value) {
        echo $value;
    }
    foreach ($bawah as $key => $value) {
        echo $value;
    }
    foreach ($kanan as $key => $value) {
        echo $value;
    }
    foreach ($kiri as $key => $value) {
        echo $value;
    }
    foreach ($atasknn as $key => $value) {
        echo $value;
    }
    foreach ($ataskri as $key => $value) {
        echo $value;
    }
    foreach ($bawahknn as $key => $value) {
        echo $value;
    }
    foreach ($bawahkri as $key => $value) {
        echo $value;
    }
    // echo "</pre>";
    }
?>
