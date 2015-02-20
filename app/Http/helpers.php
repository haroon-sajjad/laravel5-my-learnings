<<?php 

function delete_form($params, $label) 
{
	$form = Form::open(['method' => 'DELETE', 'route' => $params])
		. Form::submit($label, ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Are you sure you want to delete this song?\')'])
		. Form::close();

	return $form;
}