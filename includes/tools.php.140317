<?php 
add_action('admin_menu', 'tools_menu');
function tools_menu() {
    add_submenu_page(
        'edit.php?post_type=listing',
        'Tools',
        'Tools',
        'manage_options',
        'tools',
        'tools_sub_page' );
}
add_action('wp_ajax_send_data', 'send_data1');
add_action('wp_ajax_nopriv_send_data', 'send_data1');
function send_data1(){
$file = $_POST['file'];
    
    $handle = fopen($file, "r");
    $test = file_get_contents($file);
    if ($handle) {
        $counter = 0;
        $arr_row = array();
        while (($line = fgets($handle)) !== false) {
            $expl = explode('::', $line);
            $arr_row[] = $expl;
            $counter++;
        }
   
        foreach($arr_row as $row_data){
            $posttitle = $row_data[0].' '.$row_data[1].' '.$row_data[2];
            $directries_post = array(
                'post_title'    => $posttitle,
                'post_content'  => $posttitle,
                'post_status'   => 'publish',
                'post_type' => 'listing',
                'post_author'   => 1,
            ); 
            
            $args = array(
                'post_status'   => 'publish',
                'post_type' => 'listing',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'listing_firstname',
          		'value' => $row_data[0],
         		'compare' => 'LIKE'
                    ),
                    array(
                        'key' => 'listing_husband_name',
                        'value' => $row_data[1],
                        'compare' => 'LIKE'
                        ),
                    array(
                        'key' => 'listing_wife_name',
                        'value' => $row_data[2],
                        'compare' => 'LIKE'
                        )
                    )
                );
                $check_listing = new WP_Query( $args );
                $posts = $check_listing->posts;
                $dir_id = $posts[0]->ID;
            
         if($dir_id==''){
            $dir_id = wp_insert_post( $directries_post );
            add_post_meta( $dir_id, 'listing_firstname', $row_data[0] , true );  
            add_post_meta( $dir_id, 'listing_husband_name', $row_data[1] , true );  
            add_post_meta( $dir_id, 'listing_wife_name', $row_data[2] , true );  
            add_post_meta( $dir_id, 'listing_phone_1', $row_data[3] , true );  
            add_post_meta( $dir_id, 'listing_husband_phone', $row_data[4] , true );  
            add_post_meta( $dir_id, 'listing_wife_phone', $row_data[5] , true );  
            add_post_meta( $dir_id, 'listing_other_phone', $row_data[6] , true );  
            add_post_meta( $dir_id, 'listing_email', $row_data[7] , true );  
            add_post_meta( $dir_id, 'listing_other_email', $row_data[8] , true );  
            add_post_meta( $dir_id, 'listing_home_address', $row_data[9] , true );  
            add_post_meta( $dir_id, 'listing_home_country', $row_data[10] , true );  
            add_post_meta( $dir_id, 'listing_home_city', $row_data[11] , true );  
            add_post_meta( $dir_id, 'listing_home_zipcode', $row_data[12] , true );  
            add_post_meta( $dir_id, 'listing_street_address', $row_data[13] , true );  
            add_post_meta( $dir_id, 'listing_street_country', $row_data[14] , true );  
            add_post_meta( $dir_id, 'listing_street_city', $row_data[15] , true );  
            add_post_meta( $dir_id, 'listing_street_zipcode', $row_data[16] , true );  
            add_post_meta( $dir_id, 'listing_website_url', $row_data[17] , true );  
            add_post_meta( $dir_id, 'listing_skype_id', $row_data[18] , true );  
            add_post_meta( $dir_id, 'listing_other_id', $row_data[19] , true );  
            add_post_meta( $dir_id, 'listing_facebook', $row_data[20] , true );  
            add_post_meta( $dir_id, 'listing_twitter', $row_data[21] , true );  
            add_post_meta( $dir_id, 'listing_husb_bdy', $row_data[22] , true );  
            add_post_meta( $dir_id, 'listing_wife_bdy', $row_data[23] , true );  
            add_post_meta( $dir_id, 'listing_bio', $row_data[24] , true );
         }else{
            update_post_meta( $dir_id, 'listing_firstname', $row_data[0] );  
            update_post_meta( $dir_id, 'listing_husband_name', $row_data[1] );  
            update_post_meta( $dir_id, 'listing_wife_name', $row_data[2] );  
            update_post_meta( $dir_id, 'listing_phone_1', $row_data[3] );  
            update_post_meta( $dir_id, 'listing_husband_phone', $row_data[4] );  
            update_post_meta( $dir_id, 'listing_wife_phone', $row_data[5] );  
            update_post_meta( $dir_id, 'listing_other_phone', $row_data[6] );  
            update_post_meta( $dir_id, 'listing_email', $row_data[7] );  
            update_post_meta( $dir_id, 'listing_other_email', $row_data[8] );  
            update_post_meta( $dir_id, 'listing_home_address', $row_data[9] );  
            update_post_meta( $dir_id, 'listing_home_country', $row_data[10] );  
            update_post_meta( $dir_id, 'listing_home_city', $row_data[11] );  
            update_post_meta( $dir_id, 'listing_home_zipcode', $row_data[12] );  
            update_post_meta( $dir_id, 'listing_street_address', $row_data[13] );  
            update_post_meta( $dir_id, 'listing_street_country', $row_data[14] );  
            update_post_meta( $dir_id, 'listing_street_city', $row_data[15] );  
            update_post_meta( $dir_id, 'listing_street_zipcode', $csv[$i][16] );  
            update_post_meta( $dir_id, 'listing_website_url', $row_data[17] );  
            update_post_meta( $dir_id, 'listing_skype_id', $row_data[18] );  
            update_post_meta( $dir_id, 'listing_other_id', $row_data[19] );  
            update_post_meta( $dir_id, 'listing_facebook', $row_data[20] );  
            update_post_meta( $dir_id, 'listing_twitter', $row_data[21] );  
            update_post_meta( $dir_id, 'listing_husb_bdy', $row_data[22] );  
            update_post_meta( $dir_id, 'listing_wife_bdy', $row_data[23] );  
            update_post_meta( $dir_id, 'listing_bio', $row_data[24] );  
         }
        }
        fclose($handle);
    }
    //unlink CSV file once already imported to DB to clear directory
    unlink($data);
}

function tools_sub_page() {
    $download_link ='';
    $path = dirname(dirname(__FILE__));
    $uploadpath = $path.'/csv/upload-csv';
    if($_POST['submit-import']){       
        $csv = array();
        $batchsize = 500; 
        
        if($_FILES['import-phone-dir']['error'] == 0){
			echo "<script>
		function senddata(filename,status){
			var ajaxurl = '".admin_url('admin-ajax.php')."';
			var file = filename;
			var status = status;
			jQuery.ajax({
				type: 'POST',
				url: ajaxurl,
				data: {action: 'send_data', file, status},       
				success: function(html){
					jQuery('#result').html(html);
				}
			})
		}
		</script>";
			
            $name = $_FILES['import-phone-dir']['name'];
            $ext = strtolower(end(explode('.', $_FILES['import-phone-dir']['name'])));
            $tmpName = $_FILES['import-phone-dir']['tmp_name'];
            if($ext === 'csv'){ //check if uploaded file is of CSV format
                if(($handle = fopen($tmpName, 'r')) !== FALSE) {
                    set_time_limit(0);
                    $row = 0;
                    while(($data = fgetcsv($handle)) !== FALSE) {
                        $col_count = count($data);
                        //splitting of CSV file :
                        if ($row % $batchsize == 0):
                            $file = fopen("listing$row.csv","w");
                        endif;
                        $csv[$row]['col1'] = $data[0];
                        $csv[$row]['col2'] = $data[1];
                       
                        $family_name = $data[0];
                        $husband_name = $data[1];
                        $wife_name = $data[2];
                        $phone_number = $data[3];
                        $husband_phone = $data[4];
                        $wife_number = $data[5];
                        $other_number = $data[6];
                        $email = $data[7];
                        $other_email = $data[8];
                        $home_address = $data[9];
                        $home_country = $data[10];
                        $home_city = $data[11];
                        $home_zipcode = $data[12];
                        $work_address = $data[13];
                        $work_country = $data[14];
                        $work_city = $data[15];
                        $work_zipcode = $data[16];
                        $website = $data[17];
                        $skype= $data[18];
                        $otherid = $data[19];
                        $facebook = $data[20];
                        $twitter = $data[21];
                        $husband_bday = $data[22];
                        $wife_bday = $data[23];
                        $bio = $data[24];
                       
                        $json = "$family_name::$husband_name::$wife_name::$phone_number::$husband_phone::$wife_number::$other_number::$email::$other_email::$home_address::$home_country::$home_city::$home_zipcode::$work_address::$work_country::$work_city::$work_zipcode::$website::$skype::$otherid::$facebook::$twitter::$husband_bday::$wife_bday::$bio";
                        fwrite($file,$json.PHP_EOL);
                        $status = $_POST["import_action"];
                        //sending the splitted CSV files, batch by batch...
                        if ($row % $batchsize == 0):
                            echo "<script> senddata('listing$row.csv','$status'); </script>";
                        endif;
                        $row++; 
                    }
                    fclose($file);
                    fclose($handle);
					echo "CSV imported.";
                }
            }
            else
            {
                echo "Only CSV files are allowed.";
            }
            
        }
    }

    
    
    if($_POST['submit-export']){   
        $fields_name = array(
            "listing_firstname" => "Family Name",
            "listing_husband_name" => "Husband Name",
            "listing_wife_name" => "Wife Name",
            "listing_phone_1" => "Phone Number",
            "listing_husband_phone" => "Husband Phone Number",
            "listing_wife_phone" => "Wife Phone Number",
            "listing_other_phone" => "Other Phone Number",
            "listing_email" => "Email Address",
            "listing_other_email" => "Other Email",
            "listing_home_address" => "Home address",
            "listing_home_country" => "Home country",
            "listing_home_city" => "Home city",
            "listing_home_zipcode" => "Home zipcode",
            "listing_street_address" => "Work Address",
            "listing_street_country" => "Work Country",
            "listing_street_city" => "Work City",
            "listing_street_zipcode" => "Work Zipcode",
            "listing_website_url" => "Website URL",
            "listing_skype_id" => "Skype",
            "listing_other_id" => "OtherId",
            "listing_facebook" => "Facebook",
            "listing_twitter" => "Twitter",
            "listing_husb_bdy" => "Husband Birthday",
            "listing_wife_bdy" => "Wife Birthday",
            "listing_bio" => "Bio",
            "created_date" => "Created Date",
            "modified_date" => "Modified Date",
        );
      if($_POST['fields']==''){
          echo "Select Fields Which you want.";
      }else  
      {
        $type = 'listing';
        $args=array(
          'post_type' => $type,
          'post_status' => 'publish',
          'posts_per_page' => -1
         );
        $selected_fields = implode(',',$_POST['fields']);
        $cnt_head = 0;
        $head_f = '';
               
        foreach($_POST['fields'] as $head){
            if($cnt_head==0){
               $head_f .= $fields_name[$head];
            }else {
                $head_f .= ','.$fields_name[$head];
            }
            $cnt_head++;
        }
        $heading = array(
                "$head_f"
        );
        $csv_file = $path."/csv/export_listing.csv";
        $file1 = fopen($csv_file,"w");
        
        foreach ($heading as $line)
        {       
           fputcsv($file1,explode(',',$line));
        }
        
        $listing = new WP_Query($args);
        if( $listing->have_posts() ) {
          while ($listing->have_posts()) : $listing->the_post();
              $product_details = '';
              $cnt = 0;
              foreach ($_POST['fields'] as $sel_fields){
                  //echo $sel_fields.'<br/>';
                  if($sel_fields=='created_date'){
                      $cr_date = get_the_date( 'd-m-Y', get_the_ID() );
                      $sel_val = array($cr_date);
                  }else if($sel_fields=='modified_date'){
                      $modified_date = get_the_modified_date('d-m-Y');
                      $sel_val = array($modified_date);
                  }else{
                    $sel_val = get_post_meta( get_the_ID(), $sel_fields);
                  }
                 if($cnt==0){
                     $product_details .= $sel_val[0];
                 }else{ $product_details .= '::'.$sel_val[0];  }
                 $cnt++;
              }
              
              $product_details1 = array("$product_details");
            
                foreach ($product_details1 as $pro_details)
                {
                    fputcsv($file1,explode('::',$pro_details));                       
                }  
                
          endwhile;
        }
        $download_link = plugins_url().'/phone-directory/csv/download.php';
        ?>
        <script>
			jQuery( document ).ready(function() {
				window.open("<?php echo plugins_url();?>/phone-directory/csv/download.php","_newtab");
			});
		</script>
		<?php 
    }
        wp_reset_query();
    }

    ?>
    <h1>Tools (Import / Export)</h1>

    <h2>Import Contacts</h2>
        <form method="post" enctype="multipart/form-data" action="">
            <input type="file" name="import-phone-dir" /> <br />
            <input type="submit" name="submit-import" value="Import Contacts" />
        </form>

    <h2>Export Contacts</h2>
        <form method="post">
            <select name="fields[]" multiple required="required">
        		<option value="listing_firstname">Family Name</option>
        		<option value="listing_husband_name">Husband Name</option>
        		<option value="listing_wife_name">Wife Name</option>
        		<option value="listing_phone_1">Phone Number</option>
        		<option value="listing_husband_phone">Husband Phone Number</option>
        		<option value="listing_wife_phone">Wife Phone Number</option>
        		<option value="listing_other_phone">Other Phone Number</option>
        		<option value="listing_email">Email</option>
        		<option value="listing_other_email">Other Email</option>
        		<option value="listing_home_address">Home address</option>
        		<option value="listing_home_country">Home country</option>
        		<option value="listing_home_city">Home city</option>
                        <option value="listing_home_zipcode">Home zipcode</option>
                        <option value="listing_street_address">Work Address</option>
                        <option value="listing_street_country">Work Country</option>
                        <option value="listing_street_city">Work City</option>
                        <option value="listing_street_zipcode">Work Zipcode</option>
                        <option value="listing_website_url">Website URL</option>
                        <option value="listing_skype_id">Skype</option>
                        <option value="listing_other_id">OtherId</option>
                        <option value="listing_facebook">Facebook</option>
                        <option value="listing_twitter">Twitter</option>
                        <option value="listing_husb_bdy">Husband Birthday</option>
                        <option value="listing_wife_bdy">Wife Birthday</option>
                        <option value="listing_bio">Bio</option>
                        <option value="created_date">Created Date</option>
                        <option value="modified_date">Modified Date</option>
        	</select> <br />
            <input type="submit" name="submit-export" value="Export Contacts" />
        </form>
		
        <?php if($download_link != NULL): ?>
       	 <a href="<?php echo $download_link; ?>">Download Here</a>
        <?php endif; ?>
    <?php } ?>