<?php 

function delete_form($params, $label) 
{
	$form = Form::open(['method' => 'DELETE', 'route' => $params])
		. Form::submit($label, ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Are you sure you want to delete this entry?\')'])
		. Form::close();

	return $form;
}

function action_buttons(&$object, $oName) {
	$form = Form::open(['method' => 'DELETE', 'route' => [$oName.'.destroy', $object->id]])
		. '<div class="btn-group" role="group" aria-label="...">'
		. link_to_route($oName.'.edit', 'Edit', [$object->id], ['class' => 'btn btn-primary btn-xs'])
		. Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Are you sure you want to delete this entry?\')'])
		. '</div>'
		. Form::close();

	 return $form;
}