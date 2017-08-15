@section('content-perfil')
	
<div class="content bg-content">

	<div class="form-content form-content-dm-perfil form-bg-content-4 form-border-square-3 form-position-fixed form-z-index-static form-content-perfil-position" id="menuPerfil">
		
		
		<div class="form-header form-bc-1 form-triagle-1 form-border-radius-top-left form-border-radius-top-right" style="height: 10px;">

						
				
		</div>

		<div class="form-tooltip form-arrow-right-tooltip form-tooltip-position-perfil-1" id="form-tooltip-information-user">
						
			{!! Form::label(null,'Perfil del Usuario',['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}
						
		</div>

		<div class="form-tooltip form-arrow-right-tooltip form-tooltip-position-perfil-2" id="form-tooltip-close-session">
						
			{!! Form::label(null,'Cerrar Sesión',['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}
						
		</div>

		<div class="form-article form-article-dm-1 scroll form-bc-1 form-bg-content-1">	

				
					
			
				<div class="form-rows" style="height: 40px; width: 40px;">


					{!! Form::hidden('v_frmPerf_url_information','/'.$data['roll'].'/perfil/'.$data['id'],["id" => 'v_frmPerf_url_information']); !!}					

					<div class="form-cell form-profile-nav-menu label-font-family-neutro" id="form-click-profile-me">					
						@if($data['genero'] == "wordkey_fm")

							<img src="{{ asset('img/icon/form/userFemale.png')}}" class="img-dm-8 img-margin-top-4 img-margin-left-4">

						@elseif($data['genero'] == "wordkey_mc")
								
							<img src="{{ asset('img/icon/form/userMale.png')}}" class="img-dm-8 img-margin-top-4 img-margin-left-4">
								
						@endif							
													

					</div>

				</div>

				

				<div class="form-rows" style="height: 40px; width: 40px;">							
					
					{!! Form::hidden('v_frmPerf_url_logout','/logout',["id" => 'v_frmPerf_url_logout']); !!}		

					<div class="form-cell form-profile-nav-menu label-font-family-neutro" id="form-click-profile-out">						
						
						<img src="{{ asset('img/icon/form/logout.png')}}" class="img-dm-8 img-margin-top-4 img-margin-left-4" style="transform:rotate(90deg);">	

					</div>					
					
				</div>		

				

			
				
				
		</div>

		<div class="form-footer form-bc-1 form-border-radius-bottom-left form-border-radius-bottom-right form-bg-content-1" style="height: 15px;">
			
		</div>

	</div>

</div>

@endsection