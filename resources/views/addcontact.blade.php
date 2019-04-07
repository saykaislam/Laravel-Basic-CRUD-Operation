@extends('layout')
@section('content')

<div class="box-content">
	<p  class="alert-success" style="front-size:28px; color: white; background: #149278;">
		<?php
		 $message=Session::get('message');
		 if($message)
		 {
		 	echo $message;
		 	Session::put('message',null);
		 }
		?>
	</p>
						<form class="form-horizontal" method="post" action="{{ url('/save_contact')}}">
							{{csrf_field()}}
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_name" required="" >
								</div>
							</div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact Number</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_number" required="" >
								</div>
							</div>
							 
							    <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add Contact</button>
								<button class="btn">Cancel</button>
							  </div>


@endsection