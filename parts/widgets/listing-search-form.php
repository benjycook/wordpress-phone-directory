<?php

piklist('field', array(
	'type' =>'text',
	'field' =>'search_widget_title',
	'label' =>__('Widget Title','phone-dir'),
	'attributes' =>array(
		'class'=>'text'
		)
		));

piklist('field',array(
	'type' =>'text',
	'field' => 'search_widget_text',
	'label' => __('Default Search Text','phone-dir'),
	'help' => __('Set the default text that appears in the search box.','phone-dir'),
	'value' => __('What are you looking for?','phone-dir'),
	'attributes' => array(
		'class' => 'text'
		)
		));
