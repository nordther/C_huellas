@section('content-contactenos')

<div class="ancla-link" id="contactenos"></div>

	<div class="content bg-content">	

		<div class="form-content form-content-dm form-bg-content-1 form-border-square-4">
			{!! Form::open(['url' => '..' , 'method' => 'post']); !!}

				<div class="form-header form-bc-1 form-header-dm-2 form-header-padding-auto ">	
						
						<h1>Contactenos</h1>

				</div>

				<div class="form-article">	
						
						<div class="form-rows">	
								
								<div class="form-cell">	
										
									<div class="form-rows">	

										{!! Form::text('v_nombre','',['placeholder' => 'Ingrese su nombre.' , 'class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>										
									
								</div>								


								<div class="form-cell">	
										
									<div class="form-rows">	

										{!! Form::email('v_email','',['placeholder' => 'Ingrese su correo.' , 'class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>

								</div>						

						</div>

				</div>
				
				<div class="form-article">					
			
					<div class="form-rows">
							
						<div class="form-cell">							
						
							<div class="form-rows">	

							{!! Form::textarea('v_description','',['class' => 'form-control 
								input-dm-1 
								input-radius-square-2 input-border-color-1' , 'placeholder' => 'Describa su consulta.']); !!}
								
							</div> 

						</div>

					</div>					
					 
				</div>

				<div class="form-footer form-footer-dm-1 form-bc-1">	
					
					<div class="form-rows">	

						<div class="form-cell">	
										
							{!! Form::button('Enviar datos',['class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-1','type' => 'submit']); !!}
						</div>							

					</div>

				</div>

				{!! Form::close(); !!}

		</div>
	
	</div>
		
@endsection
