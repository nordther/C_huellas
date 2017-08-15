@section('content-searchagenda')

<div class="content bg-content">
	
	<div class="form-content-search" >
		
		<div class="form-search-agenda scroll">
			
			@for($i = 0; $i < 200; $i++)
			<div class="form-agenda-content form-border-radius-top-left form-border-radius-top-right form-border-radius-bottom-left form-border-radius-bottom-right">
				
				<div class="form-agenda-header">
					
					<div class="form-agenda-rows">
						
						<div class="form-agenda-cell">
							
							<h5>
						
								titulo del evento {{$i}}	
	
							</h5>

						</div>

					</div>

				</div>

				<div class="form-agenda-article">
					
					<div class="form-agenda-rows">

						<div class="form-agenda-cell">

							<p>

								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, quasi, itaque nulla nobis exercitationem nihil earum. 

							</p>

						</div>	

					</div>					

				</div>

				<div class="form-agenda-footer">
					
					<div class="form-agenda-rows">

						<div class="form-agenda-cell">
							
							<p>
								
								Fecha: {{ date('j'.'-'.'m'.'-'.'o')}}

							</p>

						</div>

					</div>	

					<div class="form-agenda-rows">	
							
						<div class="form-agenda-cell">			

							<p>
								
								Hora: 10:00 AM - 02:35 PM

							</p>

						</div>					

						<div class="form-agenda-cell">
							
							{!! Form::button(null,['class' => 'button-header-perfil button-dm-1  button-margin-left-2 button-margin-bottom-2 button-top-right-position-absolute','type' => 'button']) !!}

						</div>
						

					</div>

				</div>

			</div>
			@endfor
		</div>

	</div>


	@yield('content-tools-search')

</div>	


@endsection