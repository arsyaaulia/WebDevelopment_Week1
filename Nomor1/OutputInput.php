<?php
    echo "<h2> Output & Input in PHP<br> </h2>";

    //Definisikan Variable
    $names = ["Elsa","Anna","Olaf"];
    $products = [
        ["name" => "product 1", "price" => 10000],
        ["name" => "product 2", "price" => 20000],
    ];
        
    // Debug output
    echo "<b>Tanpa Implode <br></b>";
    var_dump($names);
    echo "<br><br>";
    print_r($products);
    echo "<br><br>";

    echo "<b>Dengan Implode <br></b>";
    echo "[" .implode($names) . "]<br>";
    // Jangan gunakan implode untuk array asosiatif/multidimensi
    // echo "[" .implode($products) . "]<br>"; //akan menghasilkan error
    echo "<br>";
    echo "<b>Dengan Implode (produk):</b><br>";
    $produk_list = [];
    foreach ($products as $p) {
        $produk_list[] = $p['name'] . " (Rp " . $p['price'] . ")";
    }
    echo "[" . implode(", ", $produk_list) . "]<br>";

    // Input from console, readline hanya bisa diakses di CLI (Command Line Interface) atau terminal saja
    // $name = readline('What is your name : '); //jika dijalankan di browser akan error
?>