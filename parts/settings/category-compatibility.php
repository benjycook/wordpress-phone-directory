<?php
/*
Title: Category Pages
Setting: simple_directory_settings
Tab: Layout
Sub Tab: Category Pages
Order: 2
Flow: SDIR Workflow
*/

piklist('field',array(
  'type'=>'select'
  ,'field'=>'sdir_archive_list_title_size'
  ,'label'=>__('Listing Title Font Size')
  ,'choices'=>array(
    '1.0'=>'1.0 rem'
    ,'1.25'=>'1.25 rem'
    ,'1.5'=>'1.5 rem'
    ,'1.75'=>'1.75 rem'
    ,'2.0'=>'2.0 rem'
    ,'2.25'=>'2.25 rem'
    ,'2.5'=> '2.5 rem'
  )
  ,'value'=>'1.75'
));


piklist ('field', array(
 'type' => 'select'
 ,'field'=>'archive_listing_show_sidebar'
 ,'label'=>__('Show Theme Sidebar on Listing Archive?','phone-dir')
 ,'attributes' => array(
   'class' => 'text'
   )
 ,'choices' =>array(
   'yes' => 'Yes'
   ,'no' => 'No'
   )
   ));

piklist('field',array(
  'type'=>'text'
  ,'field'=>'archive_listing_width'
  ,'label'=>__('Set Content Width','phone-dir')
  ,'description'=>__('Set the desired with of the content in px, percent or em.','phone-dir')
  ,'help'=>__('If the content on your single listings and category pages doesn\'t look right, or your sidebar isn\'t displaying properly, setting a value here can help.','phone-dir')
));


piklist('field',array(
  'type'=>'text'
  ,'field' => 'archive_content_padding'
  ,'label'=> __('Set Content Padding','phone-dir')
  ,'help' =>__('Improve the appearance of the listings on your site by setting the padding around the content.','phone-dir')
  ,'description'=>__('Enter a number in px. Do not include\'px\'','phone-dir')
  ,'attributes' =>array(
    'class'=>'text'
  )
));


piklist('field',array(
  'type'=>'text'
  ,'field'=>'archive_parent_id'
  ,'label'=>__('Custom DIV id','phone-dir')
  ,'description' =>__('Set the ID of the top-level &lt;div&gt; on the single listing and category pages.','phone-dir')
  ,'help' =>__('This may help if your content is not displaying as expected under the header.','phone-dir')
  ,'value'=>'primary'
));

piklist('field',array(
  'type' =>'text'
  ,'field'=>'archive_parent_class'
  ,'label' =>__('Single Listing DIV class','phone-dir')
  ,'description' =>__('Add a class to the top-level &lt;div&gt; on the category pages.','phone-dir')
  ,'help' =>__('This is not always necessary, but it can help with appearance and customization.','phone-dir'  )
));
