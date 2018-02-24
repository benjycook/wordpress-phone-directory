// This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {       
        locality_work: 'long_name',
        country_work: 'long_name',
        zip_code: 'short_name',
      };

    function initAutocomplete() {       
        // Create the autocomplete object, restricting the search to geographical
        // location types. 
        autocomplete_work = new google.maps.places.Autocomplete(document.getElementById('_post_meta_listing_street_address_0'), { types: [ 'geocode' ] });
        google.maps.event.addListener(autocomplete_work, 'place_changed', function() {
            fillInAddress_work();
        });
        
        autocomplete_home = new google.maps.places.Autocomplete(document.getElementById('_post_meta_listing_home_address_0'), { types: [ 'geocode' ] });
        google.maps.event.addListener(autocomplete_home, 'place_changed', function() {
            fillInAddress_home();
        });
        
        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        
       // autocomplete.addListener('place_changed', fillInAddress);
    }
    
    
    function fillInAddress_home() {     
        // Get the place details from the autocomplete object.
        var place = autocomplete_home.getPlace();

        for (var component in componentForm) {
            jQuery('.'+component).val('');
            jQuery('.'+component).prop( "disabled", false );
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if(addressType=='locality'){
            var val = place.address_components[i]['long_name'];
            jQuery('.locality_home').val(val);
          }
          if(addressType=='country'){
            var val = place.address_components[i]['long_name'];
            jQuery('.country_home').val(val);
          }   
          if(addressType=='postal_code'){
            var val = place.address_components[i]['short_name'];
            jQuery('.zipcode_home').val(val);
          } 
        }
    }

    function fillInAddress_work() {
       // console.log(jQuery(this).parent().attr('id'));
        console.log('heloo');
        // Get the place details from the autocomplete object.
        var place = autocomplete_work.getPlace();

        for (var component in componentForm) {
            jQuery('.'+component).val('');
            jQuery('.'+component).prop( "disabled", false );
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if(addressType=='locality'){
            var val = place.address_components[i]['long_name'];
            jQuery('.locality_work').val(val);
          }
          if(addressType=='country'){
            var val = place.address_components[i]['long_name'];
            jQuery('.country_work').val(val);
          }   
          if(addressType=='postal_code'){
            var val = place.address_components[i]['short_name'];
            jQuery('.work_zipcode').val(val); 
          } 
        }
    }

    function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
    }

jQuery( document ).ready(function(){
    var family = jQuery('.post-type-pending_listing #_post_meta_listing_firstname_0').val();
    var old_family = jQuery('.post-type-pending_listing #_post_meta_old_listing_firstname_0').val();
    
    if(family!=old_family){
        jQuery('.post-type-pending_listing #_post_meta_listing_firstname_0').css('border-color','red');
    }
    
    var husb_name = jQuery('.post-type-pending_listing #_post_meta_listing_husband_name_0').val();
    var old_husb_name = jQuery('.post-type-pending_listing #_post_meta_old_listing_husband_name_0').val();
    
    if(husb_name!=old_husb_name){
        jQuery('.post-type-pending_listing #_post_meta_listing_husband_name_0').css('border-color','red');
    }    
    
    var wife_name = jQuery('.post-type-pending_listing #_post_meta_listing_wife_name_0').val();
    var old_wife_name = jQuery('.post-type-pending_listing #_post_meta_old_listing_wife_name_0').val();
    
    if(wife_name!=old_wife_name){
        jQuery('.post-type-pending_listing #_post_meta_listing_wife_name_0').css('border-color','red');
    }  
    
    var phone = jQuery('.post-type-pending_listing #_post_meta_listing_phone_1_0').val();
    var old_phone = jQuery('.post-type-pending_listing #_post_meta_old_listing_phone_1_0').val();
    
    if(phone!=old_phone){
        jQuery('.post-type-pending_listing #_post_meta_listing_phone_1_0').css('border-color','red');
    } 
    
    var husb_phone = jQuery('.post-type-pending_listing #_post_meta_listing_husband_phone_0').val();
    var old_husb_phone = jQuery('.post-type-pending_listing #_post_meta_old_listing_husband_phone_0').val();
    
    if(husb_phone!=old_husb_phone){
        jQuery('.post-type-pending_listing #_post_meta_listing_husband_phone_0').css('border-color','red');
    } 
    
    var wife_phone = jQuery('.post-type-pending_listing #_post_meta_listing_wife_phone_0').val();
    var old_wife_phone = jQuery('.post-type-pending_listing #_post_meta_old_listing_wife_phone_0').val();
    
    if(wife_phone!=old_wife_phone){
        jQuery('.post-type-pending_listing #_post_meta_listing_wife_phone_0').css('border-color','red');
    } 
    
    var other_phone = jQuery('.post-type-pending_listing #_post_meta_listing_other_phone_0').val();
    var old_other_phone = jQuery('.post-type-pending_listing #_post_meta_old_listing_other_phone_0').val();
    
    if(other_phone!=old_other_phone){
        jQuery('.post-type-pending_listing #_post_meta_listing_other_phone_0').css('border-color','red');
    } 
    
    var email = jQuery('.post-type-pending_listing #_post_meta_listing_email_0').val();
    var old_emial = jQuery('.post-type-pending_listing #_post_meta_old_listing_email_0').val();
    
    if(email!=old_emial){
        jQuery('.post-type-pending_listing #_post_meta_listing_email_0').css('border-color','red');
    } 
    
    var other_email = jQuery('.post-type-pending_listing #_post_meta_listing_other_email_0').val();
    var old_other_email = jQuery('.post-type-pending_listing #_post_meta_old_listing_other_email_0').val();
    
    if(other_email!=old_other_email){
        jQuery('.post-type-pending_listing #_post_meta_listing_other_email_0').css('border-color','red');
    }
        
    var home_add = jQuery('.post-type-pending_listing #_post_meta_listing_home_address_0').val();
    var old_home_add = jQuery('.post-type-pending_listing #_post_meta_old_listing_home_address_0').val();
    
    if(home_add!=old_home_add){
        jQuery('.post-type-pending_listing #_post_meta_listing_home_address_0').css('border-color','red');
    } 
    
    var home_country = jQuery('.post-type-pending_listing #_post_meta_listing_home_country_0').val();
    var old_home_country = jQuery('.post-type-pending_listing #_post_meta_old_listing_home_country_0').val();
    
    if(home_country!=old_home_country){
        jQuery('.post-type-pending_listing #_post_meta_listing_home_country_0').css('border-color','red');
    } 
    
    var home_city = jQuery('.post-type-pending_listing #_post_meta_listing_home_city_0').val();
    var old_home_city = jQuery('.post-type-pending_listing #_post_meta_old_listing_home_city_0').val();
    
    if(home_city!=old_home_city){
        jQuery('.post-type-pending_listing #_post_meta_listing_home_country_0').css('border-color','red');
    } 
    
    var home_zipcode = jQuery('.post-type-pending_listing #_post_meta_listing_home_zipcode_0').val();
    var old_home_zipcode = jQuery('.post-type-pending_listing #_post_meta_old_listing_home_zipcode_0').val();
    
    if(home_zipcode!=old_home_zipcode){
        jQuery('.post-type-pending_listing #_post_meta_listing_home_zipcode_0').css('border-color','red');
    }
    
    var street_add = jQuery('.post-type-pending_listing #_post_meta_listing_street_address_0').val();
    var old_street_add = jQuery('.post-type-pending_listing #_post_meta_old_listing_street_address_0').val();
    
    if(street_add!=old_street_add){
        jQuery('.post-type-pending_listing #_post_meta_listing_street_address_0').css('border-color','red');
    }
    
    var street_country = jQuery('.post-type-pending_listing #_post_meta_listing_street_country_0').val();
    var old_street_country = jQuery('.post-type-pending_listing #_post_meta_old_listing_street_country_0').val();
    
    if(street_country!=old_street_country){
        jQuery('.post-type-pending_listing #_post_meta_listing_street_country_0').css('border-color','red');
    }
    
    var street_city = jQuery('.post-type-pending_listing #_post_meta_listing_street_city_0').val();
    var old_street_city = jQuery('.post-type-pending_listing #_post_meta_old_listing_street_city_0').val();
    
    if(street_city!=old_street_city){
        jQuery('.post-type-pending_listing #_post_meta_listing_street_city_0').css('border-color','red');
    }
    
    var street_zip = jQuery('.post-type-pending_listing #_post_meta_listing_street_zipcode_0').val();
    var old_street_zip = jQuery('.post-type-pending_listing #_post_meta_old_listing_street_zipcode_0').val();
    
    if(street_zip!=old_street_zip){
        jQuery('.post-type-pending_listing #_post_meta_listing_street_zipcode_0').css('border-color','red');
    }
    
    var website = jQuery('.post-type-pending_listing #_post_meta_listing_website_url_0').val();
    var old_website = jQuery('.post-type-pending_listing #_post_meta_old_listing_website_url_0').val();
    
    if(website!=old_website){
        jQuery('.post-type-pending_listing #_post_meta_listing_website_url_0').css('border-color','red');
    }
    
    var skype = jQuery('.post-type-pending_listing #_post_meta_listing_skype_id_0').val();
    var old_skype = jQuery('.post-type-pending_listing #_post_meta_old_listing_skype_id_0').val();
    
    if(skype!=old_skype){
        jQuery('.post-type-pending_listing #_post_meta_listing_skype_id_0').css('border-color','red');
    }
    
    var other_id = jQuery('.post-type-pending_listing #_post_meta_listing_other_id_0').val();
    var old_other_id = jQuery('.post-type-pending_listing #_post_meta_old_listing_other_id_0').val();
    
    if(other_id!=old_other_id){
        jQuery('.post-type-pending_listing #_post_meta_listing_other_id_0').css('border-color','red');
    }
    
    var facebook = jQuery('.post-type-pending_listing #_post_meta_listing_facebook_0').val();
    var old_facebook = jQuery('.post-type-pending_listing #_post_meta_old_listing_facebook_0').val();
    
    if(facebook!=old_facebook){
        jQuery('.post-type-pending_listing #_post_meta_listing_facebook_0').css('border-color','red');
    }
    
    var twitter = jQuery('.post-type-pending_listing #_post_meta_listing_twitter_0').val();
    var old_twitter = jQuery('.post-type-pending_listing #_post_meta_old_listing_twitter_0').val();
    
    if(twitter!=old_twitter){
        jQuery('.post-type-pending_listing #_post_meta_listing_twitter_0').css('border-color','red');
    }
    
    var husb_bdy = jQuery('.post-type-pending_listing #_post_meta_listing_husb_bdy_0').val();
    var old_husb_bdy = jQuery('.post-type-pending_listing #_post_meta_old_listing_husb_bdy_0').val();
    
    if(husb_bdy!=old_husb_bdy){
        jQuery('.post-type-pending_listing #_post_meta_listing_husb_bdy_0').css('border-color','red');
    }
    
    var wife_bdy = jQuery('.post-type-pending_listing #_post_meta_listing_wife_bdy_0').val();
    var old_wife_bdy = jQuery('.post-type-pending_listing #_post_meta_old_listing_wife_bdy_0').val();
    
    if(wife_bdy!=old_wife_bdy){
        jQuery('.post-type-pending_listing #_post_meta_listing_wife_bdy_0').css('border-color','red');
    }
    
    var bio = jQuery('.post-type-pending_listing #_post_meta_listing_bio_0').val();
    var old_bio = jQuery('.post-type-pending_listing #_post_meta_old_listing_bio_0').val();
    
    if(bio!=old_bio){
        jQuery('.post-type-pending_listing #_post_meta_listing_bio_0').css('border-color','red');
    }
});