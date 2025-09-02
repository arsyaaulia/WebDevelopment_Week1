<?php
    function merge(&$nums1, $m, &$nums2, $n) {
        //Pointer ke akhir array nums1
        $i = $m - 1;
        //Pointer ke akhir array nums2
        $j = $n - 1;
        $k = $m + $n - 1;
        while($i >= 0 && $j >= 0) {
            if($nums1[$i] > $nums2[$j]) {
                $nums1[$k] = $nums1[$i];
                $i--;
            } else {
                $nums1[$k] = $nums2[$j];
                $j--;
            }
            $k--;
        }
        while($j >= 0) {
            $nums1[$k] = $nums2[$j];
            $j--;
            $k--;
        }
    }

    echo "<h2>Merge Sorted Array</h2>";
    
    //Contoh 1
    echo "<b>Example 1 </b><br>";
    $nums1 = [1,2,3,0,0,0];
    $m = 3;
    $nums2 = [2,5,6];
    $n = 3;

    echo "<b>Input:</b> nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3 <br>";
    merge($nums1, $m, $nums2, $n);

    // print_r($nums1); //tidak seperti yang diharapkan, fungsi ini untuk 'print readeable' untuk debug/lihat isi array

    echo "<b>Output:</b> [" .implode(",",$nums1) . "]<br>"; //implode untuk menggabungkan array menjadi string
    echo"<br>";


    //Contoh 2
    echo "<b>Example 2 </b><br>";
    $nums1 = [1];
    $m = 1;
    $nums2 = [];
    $n = 0;

    echo "<b>Input:</b> nums1 = [1], m = 1, nums2 = [], n = 0 <br>";
    merge($nums1, $m, $nums2, $n);

    echo "<b>Output:</b> [" .implode(",",$nums1) . "]<br>"; //implode untuk menggabungkan array menjadi string
    echo"<br>";

    //Contoh 3
    echo "<b>Example 3 </b><br>";
    $nums1 = [0];
    $m = 0;
    $nums2 = [1];
    $n = 1;

    echo "<b>Input:</b> nums1 = [0], m = 0, nums2 = [1], n = 1 <br>";
    merge($nums1, $m, $nums2, $n);

    echo "<b>Output:</b> [" .implode(",",$nums1) . "]<br>"; //implode untuk menggabungkan array menjadi string
?>