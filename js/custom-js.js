jQuery(document).ready(function() {

	/*jquery for display contact over section*/

 
   jQuery('.downarrw').on( "click", function(e) { 
   	 e.preventDefault();
        jQuery('.over_section_form_edit').hide();
        jQuery('.oversection').hide();  
        jQuery('.dir-box').show();

        jQuery(this).parents('.dir-box').hide();
        
        var id = jQuery(this).attr('data-id'); 
        jQuery("div").each(function(){
            var id1 = jQuery(this).attr('data-id');
            if(jQuery(this).attr('data-id') == id) {
                jQuery('#oversection-'+id1).slideDown();
        }
    });
   });


jQuery('.uparrw').on( "click", function(e) { 
    e.preventDefault();
    var sectionid = jQuery(this).attr('data-back-id'); 
 
     jQuery( ".oversection" ).prev().show();
    
     jQuery("div").each(function(){   
        if(jQuery(this).attr('data-id') == sectionid) {
            jQuery(this).slideUp();
        }
    });
   });


jQuery('.upd-edit').on('click','.editarrw', function(e) { 
       
    e.preventDefault(); 
    var sectionid = jQuery(this).attr('data-back-id');    
    jQuery("div").each(function(){
        
        if(jQuery(this).attr('id') == sectionid) {
            if(!confirm("לא שמרת את העדכון. האם אתה רוצה לחזור ולשמור את השינויים?")){
                jQuery(this).hide();
                jQuery('.dir-box').slideDown();
            }
        }
    });
   });


/*jquery For the Google Map*/

 var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();

    var mapOptions = {
      zoom: 12, //Change the Zoom level to suit your needs
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: true,
    }
    //map_canvas is just a <div> on the page with the id="map_canvas"
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

    //Your Variable Containing The Address
    var address = "<?php echo $AddressVariable; ?>"; 
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        //places a marker on every location
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });

  } 

  jQuery(document).on('keyup','.dir-husband-name',function(){
      var name = jQuery(this).val();
      jQuery('.hus_name').text(name+' טלפון בבית');
      jQuery('.hus_bday').text(name+' יום הולדת');
  });
  
  jQuery(document).on('keyup','.dir-wife-name',function(){
      var name1 = jQuery(this).val();
      jQuery('.hus_wife_name').text(name1+' טלפון בבית');
      jQuery('.wife_bday').text(name1+' יום הולדת');
  }); 
   
})
    
      