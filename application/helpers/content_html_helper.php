<?php

/*
|------------------------------------------------------------
| content helper
|------------------------------------------------------------
|
| content ini diperuntukan untuk membantu membentuk html yang
| digunakan disistem, antaralain pembentukan <div>, <button>
| sedangkan sisanya menggunakan form helper bawaan codeigniter
|
*/

function print_button($href, $type = 'info')
{
	$link    = base_url().'report/'.$href;
	$content = open_div(array('class'=>'print_panel'));
	$content .= "<a class='btn btn-$type' target='blank' href='$link'>";
	$content .= open_span('',array('class'=>'glyphicon glyphicon-print'));
	$content .= " Cetak</a>";
	$content .= close_div();

	return $content;
}

function main_button($label = '', $id = '', $classes = '', $is_modal = 0, $type = '')
{
	$modal = ($is_modal == 0) ? '' : "button-modal";
	$icon = array(
		'add'    => 'plus',
		'edit'   => 'pencil',
		'delete' => 'trash',
		'save'   => 'floppy-saved'
		);
	$class = array(
		'add'  => 'primary', 
		'edit' => 'warning'
		);

	$content = '<div class="btn-group">';
	$content .= '<button class="btn btn-'.$class[$type].' '.$modal.' '.$classes.'" type="button" id="'.$id.'">';
	$content .= '<span class="glyphicon glyphicon-'.$icon[$type].'"></span> ';
	$content .= '<strong>'.preset_message($label).'</strong>';
	$content .= '</button>';
	$content .= '</div>';

	return $content;
}

function edit_button_link($link = '', $id = '')
{
	$button = "<a href='".$link."' class='btn btn-warning btn-xs button-modal' id='".$id."'>";
	$button .= "<span class='glyphicon glyphicon-pencil'></span></a>";
	return $button;
}

function delete_button_link($link = '', $id = '')
{
	$button = "<a href='".$link."' class='btn btn-danger btn-xs button-delete' id='".$id."'>";
	$button .= "<span class='glyphicon glyphicon-remove'></span></a>";
	return $button;
}

function open_div($attribut = array())
{
	if(is_array($attribut)){
		$class = (isset($attribut['class'])) ? 'class ="'.$attribut['class'].'"' : '';
		$id = (isset($attribut['id'])) ? 'id ="'.$attribut['id'].'"' : '';
	}
	return '<div '.$id.' '.$class.'>';
}

function open_span($content = '', $attribut = array())
{
	if(is_array($attribut)){
		$class = (isset($attribut['class'])) ? 'class ="'.$attribut['class'].'"' : '';
		$id = (isset($attribut['id'])) ? 'id ="'.$attribut['id'].'"' : '';
	}
	return '<span '.$class.' '.$id.'>'.$content.'</span>';
}

function close_div($count = '')
{
	$div = '</div>';

	if($count !== ''){
		for($i = 1; $i <= $count; $i++){
			$div .= $div;
		}
	}
	return $div;
}

function hr($class = '')
{
	$class = ($class !== '') ? 'class="'.$class.'"' : '';
	return '<hr '.$class.'>';
}