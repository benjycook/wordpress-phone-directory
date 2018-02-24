<?php
$inputFilePointer = fopen('demo.csv', "r");
$rowCount = 0;
while (($rowData = fgetcsv($inputFilePointer, 0, ",")) !== FALSE){
    echo "<pre>";
    print_r($rowData);
//   
//    echo $post->ID;
//    add_post_meta($post_id, $meta_key, $meta_value, $unique);
    echo "</pre>";
}