<?php
include 'db.php';

if (isset($_POST['delete_category'])){
    $id = $_POST['idcategory'];
    $conn->query("Delete from item_category where id_category='$id'");

    if ($conn==TRUE){
        header("refresh:0; url=category_add.php");
    }else{
        header("refresh:0; url=category_add.php");
    }
}

if (isset($_POST['delete_equ'])){
    $id = $_POST['equId'];
    $conn->query("Delete from equipmentstable where equipmentID='$id'");

    if ($conn==TRUE){
        header("refresh:0; url=equipment_add.php");
    }else{
        header("refresh:0; url=equipment_add.php");
    }
}

if (isset($_POST['delete_subcategory'])){
    $id = $_POST['idsubcategory'];
    $conn->query("Delete from item_subcat where idSubCat='$id'");

    if ($conn==TRUE){
        header("refresh:0; url=sub_cate_add.php");
    }else{
        header("refresh:0; url=sub_cate_add.php");
    }
}

if (isset($_POST['delete_wearcategory'])){
    $id = $_POST['idwearcat'];
    $conn->query("Delete from wear_category where id_wearcat='$id'");

    if ($conn==TRUE){
        header("refresh:0; url=wears_cat_add.php");
    }else{
        header("refresh:0; url=wears_cat_add.php");
    }
}

if (isset($_POST['delete_wearssubcategory'])){
    $id = $_POST['idwearsubcategory'];
    $conn->query("Delete from wear_sub_cat where id_wearsubcat='$id'");

    if ($conn==TRUE){
        header("refresh:0; url=wears_sub_cat_add.php");
    }else{
        header("refresh:0; url=wears_sub_cat_add.php");
    }
}
if (isset($_POST['delete_wears'])){
    $id = $_POST['wearsId'];
    $conn->query("Delete from wearstable where wearID='$id'");

    if ($conn==TRUE){
        header("refresh:0; url=wears_add.php");
    }else{
        header("refresh:0; url=wears_add.php");
    }
}
