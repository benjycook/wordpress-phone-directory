<?php
/*
Title: Listing Status
Post Type: listing
Context: side
Priority: high

*/

piklist('field', array(
	'type'=>'select',
	'field' =>'listing_status',
	'label' =>__('Listing Level','phone-dir'),
	'attributes'=>array(
		'class'=>'text'
		),
	'value' => 'basic',
	'choices' =>array(
		'basic' =>__('Basic','phone-dir')
		,'premium' => __('Premium','phone-dir')
		)
		));
