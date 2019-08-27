<?php
    //More Specificly We are implementing C++ std::map<string, vector<string> > here.
    //Sub categories
    //Must Visit This Link : https://stackoverflow.com/questions/16469947/how-to-check-if-an-associative-array-has-an-empty-or-null-value
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
    $categories[$brf] = NULL; //Insert NULL value.

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
        // echo is_null($categories[$key]);  
        if(is_null($categories[$key])){
            //If this category don't have any subcategory then we don't nedd to do anything.
            echo "Category ". $key . " has no subcategory";
        }

        //If Category has subcategory then do
        else {
            $len = count($categories[$key]);
            echo "Category ". $key ." has ". $len . " subcategories";
            echo "<br>";
        }
    }
?>
