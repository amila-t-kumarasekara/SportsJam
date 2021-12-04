<?php
include 'db.php';


if (isset($_POST['category_add'])) {

    $category_name = $_POST['category'];

    $conn->query("insert into item_category( cat_name ) values ('$category_name')");

    if ($conn==TRUE){
        header("refresh:0; url=category_add.php");
    }else{
        header("refresh:0; url=category_add.php");
    }

} else if (isset($_POST['subcate_Add'])) {

    $subcategory_name = $_POST['subcategory'];

    $conn->query("insert into item_subcat( sub_name ) values ('$subcategory_name')");

    if ($conn==TRUE){
        header("refresh:0; url=sub_cate_add.php");
    }else{
        header("refresh:0; url=sub_cate_add.php");
    }

}else if (isset($_POST['equAdd'])) {

    $category_list = $_POST['category_list'];
    $sub_cat_list = $_POST['sub_cat_list'];
    $equ_name = $_POST['equName'];
    $equ_desc = $_POST['equDesc'];
    $equ_qty = $_POST['equQty'];
    $equ_price = $_POST['equPrice'];

    $filename = $_FILES['uploadImg']['name'];

    // Select file type
    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    // valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

        // Upload files and store in database
        if(move_uploaded_file($_FILES["uploadImg"]["tmp_name"],'EquipmentImg/'.$filename)){

            $conn->query("insert into equipmentstable( equipmentName ,equ_cat ,equ_sub_cat ,equipmentPrice ,equipmentDesc, equipmentImage ,equipmentAvailability ) values ('$equ_name','$category_list' , '$sub_cat_list'
    ,'$equ_price','$equ_desc','$filename','$equ_qty')");

            if ($conn == TRUE) {
                header("refresh:0; url=equipment_add.php");
            } else {
                header("refresh:0; url=equipment_add.php");
            }
        }
    }
} else if (isset($_POST['wears_category_add'])) {

    $category_name = $_POST['category'];

    $conn->query("insert into wear_category( wear_name ) values ('$category_name')");

    if ($conn==TRUE){
        header("refresh:0; url=wears_cat_add.php");
    }else{
        header("refresh:0; url=wears_cat_add.php");
    }

}
else if (isset($_POST['wears_subcate_Add'])) {

    $subcategory_name = $_POST['subcategory'];

    $conn->query("insert into wear_sub_cat( wear_subname ) values ('$subcategory_name')");

    if ($conn==TRUE){
        header("refresh:0; url=wears_sub_cat_add.php");
    }else{
        header("refresh:0; url=wears_sub_cat_add.php");
    }

}else if (isset($_POST['wearsAdd'])) {

    $wears_category_list = $_POST['wears_category_list'];
    $wears_sub_cat_list = $_POST['wears_sub_cat_list'];
    $wears_equ_name = $_POST['wears_equName'];
    $wears_equ_desc = $_POST['wears_equDesc'];
    $wears_equ_qty = $_POST['wears_equQty'];
    $wears_equ_price = $_POST['wears_equPrice'];

    $wears_filename = $_FILES['wears_uploadImg']['name'];

    // Select file type
    $imageFileType = strtolower(pathinfo($wears_filename,PATHINFO_EXTENSION));

    // valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

        // Upload files and store in database
        if(move_uploaded_file($_FILES["wears_uploadImg"]["tmp_name"],'WearsImg/'.$wears_filename)){

            $conn->query("insert into wearstable( id_wearcat,id_wearsubcat,wearName,wearPrice	,wearDesc,wearImage,wearAvailability ) 
            values ('$wears_category_list' , '$wears_sub_cat_list','$wears_equ_name','$wears_equ_price','$wears_equ_desc','$wears_filename','$wears_equ_qty')");

            if ($conn == TRUE) {
                header("refresh:0; url=wears_add.php");
            } else {
                header("refresh:0; url=wears_add.php");
            }
        }
    }
}
