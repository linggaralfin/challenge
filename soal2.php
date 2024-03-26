<?php
// Data Uji Pertama
$beratMark1 = 78; // kg
$tinggiMark1 = 1.69; // m

$beratJohn1 = 92; // kg
$tinggiJohn1 = 1.95; // m

// Hitung BMI
$bmiMark1 = $beratMark1 / ($tinggiMark1 ** 2);
$bmiJohn1 = $beratJohn1 / ($tinggiJohn1 ** 2);

// Bandingkan BMI
$markHigherBMI1 = $bmiMark1 > $bmiJohn1;

// Data Uji Kedua
$beratMark2 = 95; // kg
$tinggiMark2 = 1.88; // m

$beratJohn2 = 85; // kg
$tinggiJohn2 = 1.76; // m

// Hitung BMI
$bmiMark2 = $beratMark2 / ($tinggiMark2 ** 2);
$bmiJohn2 = $beratJohn2 / ($tinggiJohn2 ** 2);

// Bandingkan BMI
$markHigherBMI2 = $bmiMark2 > $bmiJohn2;

// Tampilkan Hasil
echo "Data Uji 1:\n";
echo "BMI Mark: " . $bmiMark1 . "\n";
echo "BMI John: " . $bmiJohn1 . "\n";
echo "Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI1 ? "true" : "false") . "\n";

echo "\nData Uji 2:\n";
echo "BMI Mark: " . $bmiMark2 . "\n";
echo "BMI John: " . $bmiJohn2 . "\n";
echo "Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI2 ? "true" : "false") . "\n";
?>
