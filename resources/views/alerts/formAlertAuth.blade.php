@if(Session::has('authmenssage'))
	<div class="form-alert form-alert-color-danger form-alert-square-radius form-alert-cardview" id="formAlertAuth">		
		{!! Form::label(null,Session::get('authmenssage'),['class' => 'label-font-size-8 label-font-family-neutro label-alert-color label-margin-left-2 label-margin-bottom-1']); !!}	
		{!! Form::button(null,['id' => 'formButtonClosesAlert','class' => 'button-toolt-close button-dm-1 cicle-bisel-1 button-top-right-position-absolute']); !!}	
	</div>	
@endif
@if(Session::has('validate-succesfull'))
	<div class="form-alert form-alert-color-succes form-alert-square-radius form-alert-cardview" id="formAlertAuth">		
		{!! Form::label(null,Session::get('validate-succesfull'),['class' => 'label-font-size-8 label-font-family-neutro label-alert-color label-margin-left-2 label-margin-bottom-1']); !!}	
		{!! Form::button(null,['id' => 'formButtonClosesAlert','class' => 'button-toolt-close button-dm-1 cicle-bisel-1 button-top-right-position-absolute']); !!}	
	</div>
@endif