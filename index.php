<?php
    require_once('product.php');
    require_once('cdmusic.php');
    require_once('cdrack.php');

    echo "<h1>List Product</h1>";
    echo "========================";

    //cdmusic
    echo "<h2>CD Music</h2>";
    $cdm1 = new Product("Blank Space", 100000, 0.15);
    $cdm2 = new Product("How Deep is Your Love", 39000, 0.15);
    $cdm3 = new Product("Yesterday", 39000, 0.10);

    echo "Name : " . $cdm1->getName() . "<br>";
    echo "Price : " . $cdm1->getPrice() . "<br>";
    echo "Discount : " . $cdm1->getDiscount() . " (15 %) <br><br>";

    echo "Name : " . $cdm2->getName() . "<br>";
    echo "Price : " . $cdm2->getPrice() . "<br>";
    echo "Discount : " . $cdm2->getDiscount() . " (15 %) <br><br>";

    echo "Name : " . $cdm3->getName() . "<br>";
    echo "Price : " . $cdm3->getPrice() . "<br>";
    echo "Discount : " . $cdm3->getDiscount() . " (10 %) <br><br>";
  
    //cdrack
    echo "========================";
    echo "<h2>CD Rack</h2>";
    $cdr1 = new Product("Pelangi", 39000, 0.5);
    $cdr2 = new Product("Reflection", 50000, 0.15);
    $cdr3 = new Product("Hijrah ke London", 40000, 0.10);

    echo "Name : " . $cdr1->getName() . "<br>";
    echo "Price : " . $cdr1->getPrice() . "<br>";
    echo "Discount : " . $cdr1->getDiscount() . " (5 %) <br><br>";

    echo "Name : " . $cdr2->getName() . "<br>";
    echo "Price : " . $cdr2->getPrice() . "<br>";
    echo "Discount : " . $cdr2->getDiscount() . " (15 %) <br><br>";

    echo "Name : " . $cdr3->getName() . "<br>";
    echo "Price : " . $cdr3->getPrice() . "<br>";
    echo "Discount : " . $cdr3->getDiscount() . " (10 %) <br><br>";    

    echo "-------------------------------------------------------";

    echo "<h1>CD Music Product</h1>";

    $lcdm1 = new CDMusic($cdm1->getName(), $cdm1->getPrice(), $cdm1->getDiscount(), "Taylor Swift", "Pop" );
    $lcdm2 = new CDMusic($cdm2->getName(), $cdm2->getPrice(), $cdm2->getDiscount(), "BeeGees", "Soft Rock" );
    $lcdm3 = new CDMusic($cdm3->getName(), $cdm3->getPrice(), $cdm3->getDiscount(), "The Beatles", "Pop" );

    echo "Nama : " . $lcdm1->getName() . "<br>";
    echo "Artis : " . $lcdm1->getArtist() . "<br>";
    echo "Genre : " . $lcdm1->getGenre() . "<br>";
    echo "Harga : " . $lcdm1->getPrice() . "<br>";
    echo "Harga Diskon : " . $lcdm1->Total() . "<br> <br>";

    echo "Nama : " . $lcdm2->getName() . "<br>";
    echo "Artis : " . $lcdm2->getArtist() . "<br>";
    echo "Genre : " . $lcdm2->getGenre() . "<br>";
    echo "Harga : " . $lcdm2->getPrice() . "<br>";
    echo "Harga Diskon : " . $lcdm2->Total() . "<br> <br>";

    echo "Nama : " . $lcdm3->getName() . "<br>";
    echo "Artis : " . $lcdm3->getArtist() . "<br>";
    echo "Genre : " . $lcdm3->getGenre() . "<br>";
    echo "Harga : " . $lcdm3->getPrice() . "<br>";
    echo "Harga Diskon : " . $lcdm3->Total() . "<br> <br>";

    echo "-------------------------------------------------------";
    echo "<h1>CD Rack Product</h1>";

    $lcdr1 = new CDMusic($cdr1->getName(), $cdr1->getPrice(), $cdr1->getDiscount(), "Pelangi", "Pop" );
    $lcdr2 = new CDMusic($cdr2->getName(), $cdr2->getPrice(), $cdr2->getDiscount(), "Reflection", "R&B" );
    $lcdr3 = new CDMusic($cdr3->getName(), $cdr3->getPrice(), $cdr3->getDiscount(), "Hijrah Ke London", "Rock" );

    echo "Nama : " . $lcdr1->getName() . "<br>";
    echo "Artis : " . $lcdr1->getArtist() . "<br>";
    echo "Genre : " . $lcdr1->getGenre() . "<br>";
    echo "Harga : " . $lcdr1->getPrice() . "<br>";
    echo "Harga Diskon : " . $lcdr1->Total() . "<br> <br>";

    echo "Nama : " . $lcdr2->getName() . "<br>";
    echo "Artis : " . $lcdr2->getArtist() . "<br>";
    echo "Genre : " . $lcdr2->getGenre() . "<br>";
    echo "Harga : " . $lcdr2->getPrice() . "<br>";
    echo "Harga Diskon : " . $lcdr2->Total() . "<br> <br>";

    echo "Nama : " . $lcdr3->getName() . "<br>";
    echo "Artis : " . $lcdr3->getArtist() . "<br>";
    echo "Genre : " . $lcdr3->getGenre() . "<br>";
    echo "Harga : " . $lcdr3->getPrice() . "<br>";
    echo "Harga Diskon : " . $lcdr3->Total() . "<br> <br>";
?>