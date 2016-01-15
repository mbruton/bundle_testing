<?php

/*
 * Prevent direct access
 */
defined('ADAPT_STARTED') or die;

$form = new model_form();
$form->bundle_name = 'bundle_testings';
$form->submission_url = '/';
$form->actions = 'testing';
$form->method = 'post';
$form->name = 'bundle_text_form';
$form->title = 'Bundle test form';
$form->description = 'This form is for testing the form library';
$form->show_steps = 'No';
$form->show_processing_page = 'Yes';
$form->save();

$page = new model_form_page();
$page->form_id = $form->form_id;
$page->bundle_name = 'bundle_testing';
$page->priority = 1;
$page->title = 'Page 1';
$page->save();

$section_layout = new model_form_page_section_layout('standard');

$section = new model_section();
$section->form_page_id = $page->form_page_id;
$section->form_page_section_layout_id = $section_layout->form_page_section_layout_id;
$section->bundle_name = 'bundle_testing';
$section->priority = 1;
$section->repeatable = 'No';
$section->title = 'First section';
$section->save();

$group_layout = new model_form_page_section_group_layout('simple');

$group = new model_form_page_section_group();
$group->form_page_section_id = $section->form_page_section_id;
$group->form_page_section_group_layout_id = $group_layout->form_page_section_group_layout_id;
$group->bundle_name = 'bundle_testing';
$group->priority = 1;
$group->save();

$text_field = new model_form_field_type('Text');

$field = new model_form_page_section_group_field();
$field->form_page_section_group_id = $group->form_page_section_group_id;
$field->bundle_name = 'bundle_testing';
$field->priority = 1;
$field->form_field_type_id = $text_field->form_field_type_id;
$field->name = 'forenames';
$field->

?>