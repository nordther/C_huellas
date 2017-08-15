@section('content-perfil-form')

<div class="content">
	<div class="ancla-link"></div>

		<div class="form-content form-content-dm form-border-square-1">
			{!! Form::open(['url' => '/Admin/cambioPerfil/','method' => 'POST']); !!}
			<div class="form-header form-header-dm-1 form-bg-content-1 form-border-radius-top-left form-border-radius-top-right label-start form-bc-1 ">
				
				@foreach ($data['dll']['text'] as $rows)

					@if (($rows->gtxt_paramt_wordkey == 'wordkey_perfilshow') && ($rows->gtxt_id_gtype == 14))

						<h2>{{ $rows->gtxt_text }}</h2>

					@endif
											
				@endforeach

			</div>
			
			<div class="form-article form-bg-content-1 form-bc-1">

				<div class="form-rows-group">
				
					<div class="form-rows">
						
						<div class="form-cell">

							<div class="form-rows">
								{!! Form::text('v_idUserForm',$data['id'],['style' => 'display:none;']); !!}
								{!! Form::text('v_rollUserForm',$data['roll'],['style' => 'display:none;']); !!}
							
							@foreach ($data['dll']['text'] as $rows)

								@if (($rows->gtxt_paramt_wordkey == 'wordkey_name_user') && ($rows->gtxt_id_gtype == 1))

								{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}	

								@endif
												
							@endforeach


							</div>	

							<div class="form-rows">
								
								{!! Form::text('v_nameUserForm',$data['nombre'],['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}	

							</div>

						</div>

						<div class="form-cell">

								<div class="form-rows">

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_lastname_user') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}	

										@endif
														
									@endforeach

								</div>	

								<div class="form-rows">
										
									{!! Form::text('v_lastnameUserForm',$data['apellido'],['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}	

								</div>

						</div>									

					</div>

				</div>	

			</div>

			<div class="form-article form-bg-content-1">

				<div class="form-rows-group">

					<div class="form-rows">
						
						<div class="form-cell">

							<div class="form-rows">

								@foreach ($data['dll']['text'] as $rows)

									@if (($rows->gtxt_paramt_wordkey == 'wordkey_address_user') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}	

									@endif
												
								@endforeach

							</div>	

							<div class="form-rows">
								
								{!! Form::text('v_addressUserForm',$data['address'],['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}	

							</div>

						</div>											

					</div>

				</div>	

			</div>	

			<div class="form-article form-bg-content-1">

				<div class="form-rows-group">

					<div class="form-rows">
						
						<div class="form-cell">

							<div class="form-rows">

								@foreach ($data['dll']['text'] as $rows)

									@if (($rows->gtxt_paramt_wordkey == 'wordkey_gender_user') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}	

									@endif
												
								@endforeach

							</div>	

							<div class="form-rows">
								
								
								@foreach ($data['dll']['text'] as $rows)

									@if (($rows->gtxt_paramt_wordkey == $data['genero']) && ($rows->gtxt_id_gtype == 2))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

									@endif
												
								@endforeach

									

							</div>

						</div>											

					</div>

				</div>	

			</div>		
			
			<div class="form-footer form-bc-1 form-footer-dm-1 form-bg-content-1 form-border-radius-bottom-left form-border-radius-bottom-right">
				
				<div class="form-article form-bg-content-1">			

					<div class="form-rows">
					
						<div class="form-cell">							
								
							{!! Form::button('Guardar',['class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-4','type' => 'submit']); !!}							

						</div>

						<div class="form-cell">							

							{!! Form::button('Ver hoja de vida',['class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-4','type' => 'button']); !!}

						</div>	

						<div class="form-cell">							

							{!! Form::button('Cancelar',['class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-4','type' => 'button','onclick'=>'location.href="/"']); !!}

						</div>									

					</div>

				</div>

			</div>
			{!! Form::close(); !!}
		</div>

</div>

@endsection
