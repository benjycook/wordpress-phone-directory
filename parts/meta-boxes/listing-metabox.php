<?php
/*
Title:Personal Details
Post Type: listing
Priority: high
*/


piklist ('field' ,array(
		'type' =>'text'
		,'field' =>'listing_ind_title'
		,'label' =>__('Title','phone-dir')
		,'attributes'=>array(
			'class' =>'text'
			)
		,'conditions' => array(
			array(
				'field' => 'listing_type'
				,'value' =>'individual'
				))
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
			));


piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_firstname',
	'label' => __('Family name','phone-dir'),
	'attributes' => array(
            	'class' => 'text',
            )
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text', 
	'field'=> 'listing_husband_name',
	'label'=> __('Husband Name','phone-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_wife_name',
	'label'=> __('wife Name','phone-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));


piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_phone_1',
	'label' => __('Home Phone Number','phone-dir'),
	'attributes' => array(
		'class' =>'text'
	)
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_husband_phone',
	'label' => __('Husband Phone Number','phone-dir'),
	'attributes' => array(
		'class' =>'text'
	)
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_wife_phone',
	'label' => __('Wife Phone Number','phone-dir'),
	'attributes' => array(
		'class' =>'text'
	)
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_other_phone',
	'label' => __('Other Phone Number','phone-dir'),
	'attributes' => array(
		'class' =>'text'
	)
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));


piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_email',
	'label' => __('Email Address','phone-dir'),
	'attributes' => array(
		'class' => 'text')
	,'sanitize' => array(
      array(
        'type' => 'email'
      )
    )
));

piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_other_email',
	'label' => __('other Email Address','phone-dir'),
	'attributes' => array(
		'class' => 'text')
	,'sanitize' => array(
      array(
        'type' => 'email'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_home_address',
	'label'=> __('Home Address','phone-dir'),
	'description' => __('Home Address','phone-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_home_country',
	'label'=> __('Country','phone-dir'),
	'description' => '',	
	'attributes' => array(
		'class' => 'country_home text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_home_city',
	'label'=> __('City','phone-dir'),
	'attributes' => array(
		'class' => 'locality_home text',                
            )
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_home_zipcode',
	'label'=> __('Zip Code','phone-dir'),
	'attributes' => array(
		'class' => 'zipcode_home text',                
            )
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_street_address',
	'label'=> __('Work Address','phone-dir'),
	'description' => __('Work Address','phone-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_street_country',
	'label'=> __('Country','phone-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'country_work text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_street_city',
	'label'=> __('City','phone-dir'),
	'attributes' => array(
		'class' => 'locality_work text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_street_zipcode',
	'label'=> __('Zip Code','phone-dir'),
	'attributes' => array(
		'class' => 'work_zipcode text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

//piklist ('field', array(
//	'type'=> 'text',
//	'field'=> 'listing_street_state',
//	'label'=> __('State/Province','phone-dir'),
//	'attributes' => array(
//		'class' => 'text')
//		,'sanitize' => array(
//      array(
//        'type' => 'text_field'
//      )
//    )
//));


piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_website_url',
	'label' => __('Website URL','phone-dir'),
	'description' =>__('The address of your website, <strong>with the http://</strong>','phone-dir'),
	'attributes' => array(
		'class' =>'text')
));

piklist ('field', array(
	'type'=> 'text',
	'field' => 'listing_skype_id',
	'label' => __('Skype ID','phone-dir')
	,'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )

)); 

piklist ('field', array(
	'type'=> 'text',
	'field' => 'listing_other_id',
	'label' => __('Other ID','phone-dir')
	,'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )

));

piklist ('field', array(
	'type'=> 'text',
	'field' => 'listing_facebook',
	'label' => __('Facebook URL','phone-dir')
	,'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )

));

piklist ('field', array(
	'type'=> 'text',
	'scope' => 'post_meta',
	'field' => 'listing_twitter',
	'label' => __('Twitter Username','phone-dir')
	,'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )

));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_husb_bdy',
	'label'=> __('Husband Birthday','phone-dir'),
	'description' => __('dd/mm/yyyy','phone-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_wife_bdy',
	'label'=> __('Wife Birthday','phone-dir'),
	'description' => __('dd/mm/yyyy','phone-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'textarea',
	'field'=> 'listing_bio',
	'label'=> __('Bio','phone-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'textarea')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));
