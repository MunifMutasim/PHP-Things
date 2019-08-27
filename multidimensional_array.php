<?php
    //Sub categories
    $sub = array("Deshi","Chinese","Italian");
    $sub_din = array("Halka","Vari");
    $sub_desert = array("Liquid","Solid");
    
    //Parent Categories
    $pcat = "Lunch";
    $another = "Dinner";
    $desert = "Desert";
    $brf = "Breakfast";
    
    //Insert data
    $categories[$pcat] = $sub;
    $categories[$another] = $sub_din;
    $categories[$desert] = $sub_desert;
    $categories[$brf] = null;

    //Printing Data
    // echo count($categories['Lunch']);
    // echo "<br>";
    // echo $categories['Lunch'][1];
    // echo "<br>";
    echo "<h1>Categories</h1>";
    foreach($categories as $key => $val){
        echo  $key ;
        echo "<br>";
    }

    echo "<h1>Detailed</h1>";
    foreach($categories as $key => $val){
        $len = count($categories[$key]);
        echo "Category ". $key ." has ". $len . " subcategories";
        echo "<br>";
    }
?>