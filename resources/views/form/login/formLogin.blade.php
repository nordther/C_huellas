@section('content-login')
<div class="content" id="content-login-user">

	<div class="form-content form-content-dm-login form-box-shadow">
		
		{!! Form::open(['route' => 'login.store', 'method' => 'POST','id' => 'formLogin']); !!}

		<div class="form-header form-header-dm-1 form-bg-content-5 form-border-radius-top-left form-border-radius-top-right ">
			
			@foreach($data['dll']['icon'] as $dll)
	
				@if ($dll->srcapp_filename == 'openid-logo.png')

					<img src="{{asset($dll->srcapp_dir.$dll->srcapp_filename)}}" alt="Ingreso al sistema" class="img-dm-6 img-margin-top-4 img-rotate-90deg">

				@endif
	
			@endforeach	

		</div>

		<div class="form-article form-bg-content-1 form-bc-1 " >
			
			<div class="form-rows">
					
				<div class="form-cell">					
					
					<div class="input-group">					
						
						<img src="{{ asset('img/icon/form/user-male-black-shape (1).png') }}" class="input-box-icon">		

						{!! Form::text('v_formUserNickEmail',null,['placeholder' => 'Nick o correo','style' =>'border:1px solid #A3A3A3; float:left; width:80%; height:30px; border-radius: 0px 4px 4px 0px;']); !!}	

					</div>

				</div>

			</div>

			<div class="form-rows">
					
				<div class="form-cell">

					<div class="input-group">											
							
						<img src="{{ asset('img/icon/form/unlocked (1).png') }}" class="input-box-icon">
							
						{!! Form::password('v_formUserPass',['placeholder' => 'Contraseña','style' =>'border:1px solid #A3A3A3; float:left; width:80%; height:30px; border-radius: 0px 4px 4px 0px;']); !!}							
						
					</div>					

				</div>

			</div>

		</div>

		<div class="form-footer form-footer-dm-1 form-bg-content-1 form-bc-1 form-border-radius-bottom-left form-border-radius-bottom-right">
			
			<div class="form-rows form-rows-aling-center">				
					
				<div class="form-cell">	

					{!! Form::button('Ingresar',['class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-5','type' => 'submit']); !!}
								
				</div>

			</div>

		</div>
		
		{!! Form::close(); !!}
	</div>
	
</div>

@endsection

