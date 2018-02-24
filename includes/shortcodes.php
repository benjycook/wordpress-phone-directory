<?php

//Search Box Shortcode
function simple_dir_search_shortcode( $form ) {

	$sort_by = array(
		'0' => 'מיין לפי',
		'best_top' => 'רלוונטיות',
		'alphabetical' => 'א-ב',		
		'country' => 'לפי מדינות',
		'city' => 'לפי ערים',
	);
     $form = '<div class="row phone-directory_search search-form">
    <form role="search" method="get" id="searchform" action="' . home_url( '/phone-directory/' ) . '" >
    <div class="search-ipt-ara">
        <input type="search" placeholder="'.__("חפש שם משפחה ו/או שם פרטי").'" value="' . $_GET['search'] . '" name="search" id="s" class="search search-bx phone-search" />
        <input type="hidden" value="listings" name="post_type">
        <div class="button-bg">
            <input type="submit" class="search-btn" value="" id="searchsubmit">
        </div>
    </div>
    <div class="search-by"> 
    	<select class="form-control" name="scc" value="'.$_GET['scc'].'">';

    		if($_GET['scc'] == ''){
                    $form .= '<option value="" selected=selected>חפש לפי שם</option>';
    		}else{
                    $form .= '<option value="">חפש לפי שם</option>';
    		}
    		if($_GET['scc'] == 'phone'){
                    $form .= '<option value="phone" selected=selected>חפש לפי טלפון</option>';
    		}else{
                    $form .= '<option value="phone" disabled="disabled">חפש לפי טלפון</option>';
    		}
    		if($_GET['scc'] == 'listing_email'){
                    $form .= '<option value="listing_email" selected=selected> חפש לפי אימייל</option>';
    		}else{
                    $form .= '<option value="listing_email" disabled="disabled"> חפש לפי אימייל</option>';
    		}
            
        	
    	$form .='</select>
    </div>
    <div class="sort-by">
    	<select class="form-control" name="sort_by" value="'.$_GET['sort_by'].'">';
    		foreach($sort_by as $key=>$sort){
    			if($_GET['sort_by'] == $key){
    				$selected = 'selected="selected"';
    			}else{
    				$selected  = '';
    			}
    			$form .= '<option value="'.$key.'" '.$selected.'>'.$sort.'</option>';
    		}
    	$form .= '</select>
    </div>
    
    
    </form></div>';

    return $form;
}

add_shortcode('listing_search', 'simple_dir_search_shortcode');