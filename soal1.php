<?php

// Data Uji Pertama
$lumba_lumba_1 = [96, 108, 89];
$koala_1 = [88, 91, 110];

// Data Bonus 1
$lumba_lumba_2 = [97, 112, 101];
$koala_2 = [109, 95, 123];

// Data Bonus 2
$lumba_lumba_3 = [97, 112, 101];
$koala_3 = [109, 95, 106];

// Fungsi untuk menghitung skor rata-rata
function average_score($scores) {
    return array_sum($scores) / count($scores);
}

// Fungsi untuk menentukan pemenang
function determine_winner($lumba_lumba_scores, $koala_scores, $min_score) {
    $lumba_lumba_avg = average_score($lumba_lumba_scores);
    $koala_avg = average_score($koala_scores);

    if ($lumba_lumba_avg >= $min_score && $koala_avg >= $min_score) {
        if ($lumba_lumba_avg > $koala_avg) {
            echo "Tim Lumba-lumba memenangkan kompetisi!\n";
        } elseif ($lumba_lumba_avg < $koala_avg) {
            echo "Tim Koala memenangkan kompetisi!\n";
        } else {
            echo "Kompetisi berakhir seri!\n";
        }
    } else {
        echo "Tidak ada pemenang karena salah satu atau kedua tim tidak mencapai skor minimum.\n";
    }
}

// Test dengan data uji pertama
echo "Data Uji Pertama:\n";
determine_winner($lumba_lumba_1, $koala_1, 100);

// Test dengan data bonus 1
echo "\nData Bonus 1:\n";
determine_winner($lumba_lumba_2, $koala_2, 100);

// Test dengan data bonus 2
echo "\nData Bonus 2:\n";
determine_winner($lumba_lumba_3, $koala_3, 100);

?>
