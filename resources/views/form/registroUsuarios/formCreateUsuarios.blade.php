@section('content-createuser')

	<div class="content bg-content content-padding">
			
			<div class="ancla-link">
				
			</div>

			<div class="form-content form-content-dm form-bg-content-1 form-border-square-4">
				{!! Form::open(); !!}
				
				<div class="form-header form-bc-1 form-header-dm-2 form-header-padding-auto ">	
						
						@foreach ($data['dll']['text'] as $rows)

							@if (($rows->gtxt_paramt_wordkey == 'wordkey_resguser') && ($rows->gtxt_id_gtype == 13))

								<h1>{{ $rows->gtxt_text }}</h1>

							@endif
											
						@endforeach

				</div>

				<div class="form-article">	
					
						<div class="form-rows-group">

							<div class="form-rows">								

								<div class="form-cell form-cell-dm-w-1">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_type_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">
										
										{!! Form::select('v_frmCrtUs_typeusers',$data['dll']['comboTypeUsers'],null,['class' => 'selectStyle input-dm-2','id' => 'v_frmCrtUs_typeusers']); !!}

									</div>

								</div>

							</div>

							<div class="form-rows">
								
								<div class="form-cell form-cell-dm-w-1">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_document') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">

										{!! Form::hidden('v_frmCrtUs_roll',3,null); !!}

										{!! Form::hidden('v_frmCrtUs_status_user',1,null); !!}
										
										{!! Form::text('v_frmCrtUs_doc',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>

								</div>

								<div class="form-cell form-cell-dm-w-1">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_type_document') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">
										
										{!! Form::select('v_frmCrtUs_document',$data['dll']['comboTypeDocument'],null,['class' => 'selectStyle input-dm-2']); !!}

									</div>

								</div>

							</div>
							
							<div class="form-rows">
								
								<div class="form-cell form-cell-dm-w-1 form-col">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_name_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">
										
										{!! Form::text('v_frmCrtUs_name',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>

								</div>

								<div class="form-cell form-cell-dm-w-1 form-col">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_lastname_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">
										
										{!! Form::text('v_frmCrtUs_lastname',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>

								</div>

							</div>							
						
						</div>						

				</div>

				<div class="form-article">

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
										
									{!! Form::text('v_frmCrtUs_address_user',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="form-article">
					
					<div class="form-rows-group">
						
						<div class="form-rows">
							
							<div class="form-cell form-cell-dm-w-1">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_gender_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">
										
										{!! Form::select('v_frmCrtUs_gender',$data['dll']['comboGender'],null,['class' => 'selectStyle input-dm-2']); !!}

									</div>

								</div>						
					
							<div class="form-cell form-cell-dm-w-1 form-col">
									
								<div class="form-rows">
											
									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_Birthdate_user') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
												
									@endforeach									

								</div>

								<div class="form-rows">
											
									{!! Form::date('v_frmCrtUs_dateBirthdate', \Carbon\Carbon::now(),['class' => 'form-control input-dm-1 input-border-color-1 input-radius-square-2']); !!}

								</div>

							</div>

						</div>

						<div class="form-rows">

								<div class="form-cell">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_phone_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach	

									</div>

									<div class="form-rows">
										
										{!! Form::text('v_frmCrtUs_phone_user',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>

								</div>

								<div class="form-cell">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_cellphone_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text.' (optional)',['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach	

									</div>

									<div class="form-rows">
										
										{!! Form::text('v_frmCrtUs_cellphone_user',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>

								</div>

						</div>	

						<div class="form-rows">
							
							<div class="form-cell">
									
								<div class="form-rows">
										
									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_age_user') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
										
									{!! Form::text('v_frmCrtUs_age_user',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-6']); !!}

								</div>

							</div>

						</div>

					</div> 

				</div>
<!---- 

		form cuando se selecciona el tipo "usuario del sistema"

---->

				<div class="form-article" id="form-user-sistem">
					
					<div class="form-rows">
							
							<div class="form-cell form-cell-dm-w-1">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_password_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">
										
										{!! Form::text('v_frmCrtUs_password',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

									</div>

							</div>						
					
							<div class="form-cell form-cell-dm-w-1 form-col">
									
								<div class="form-rows">
											
									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_email_user') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
												
									@endforeach									

								</div>

								<div class="form-rows">
											
									{!! Form::text('v_frmCrtUs_email',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-2']); !!}

								</div>

							</div>

					</div>

					<div class="form-rows">
						
						<div class="form-cell form-cell-dm-w-1">
									
									<div class="form-rows">
										
										@foreach ($data['dll']['text'] as $rows)

											@if (($rows->gtxt_paramt_wordkey == 'wordkey_roll_user') && ($rows->gtxt_id_gtype == 1))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

											@endif
											
										@endforeach									

									</div>

									<div class="form-rows">
										
										{!! Form::select('v_frmCrtUs_roll',$data['dll']['comboRoll'],null,['class' => 'selectStyle input-dm-2']); !!}

									</div>

							</div>	

					</div>

				</div>
				
<!---- 

		form cuando se selecciona el tipo "beneficiario"

---->
				<div class="form-article" id="form-user-beneficier">
					
					<div class="form-rows-group">

						<div class="form-rows">
							
							<div class="form-cell">
								
								<div class="form-rows">

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_id_institute') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
									
									{!! Form::text('v_frmCrtUs_id_institute',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}

								</div>

							</div>

							<div class="form-cell">
								
								<div class="form-rows">	

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_study_grade') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
									
									{!! Form::text('v_frmCrtUs_study_grade',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-6']); !!}
									
								</div>

							</div>

						</div>

						
						<div class="form-rows">
							
							<div class="form-cell">
								
								<div class="form-rows">

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_name_institute') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
									
									{!! Form::text('v_frmCrtUs_name_institute',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}

								</div>

							</div>

							<div class="form-cell">
								
								<div class="form-rows">

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_acudiente') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
									
									{!! Form::text('v_frmCrtUs_acudiente',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}

								</div>

							</div>

							<div class="form-cell">
								
								<div class="form-rows">

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_address_institute') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
									
									{!! Form::text('v_frmCrtUs_address_institute',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}
									
								</div>

							</div>

						</div>

						<div class="form-rows">
							
							<div class="form-cell">
								
								<div class="form-rows">

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_phone_institute') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
									
									{!! Form::text('v_frmCrtUs_phone_institute',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}

								</div>

							</div>

							<div class="form-cell">
								
								<div class="form-rows">

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_email_institute') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
									
									{!! Form::text('v_frmCrtUs_email_institute',null,['class' => 'form-control input-border-color-1 input-radius-square-2 input-dm-1']); !!}
									
								</div>

							</div>							

						</div>

						<div class="form-rows">
							
							<div class="form-cell">

								<div class="form-rows">
									
									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_less_job') && ($rows->gtxt_id_gtype == 1))

										{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach	

								</div>

								<div class="form-rows">
								
									{!! Form::radio('v_frmCrtUs_checklessjob',1,true,['id' => 'v_frmCrtUs_checklessjob_yea']); !!}

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_yea_check') && ($rows->gtxt_id_gtype == 8))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach		
								</div>

								<div class="form-rows">

									{!! Form::radio('v_frmCrtUs_checklessjob',0,false,['id' => 'v_frmCrtUs_checklessjob_not']); !!}

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_not_check') && ($rows->gtxt_id_gtype == 8))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

										@endif
											
									@endforeach		
								</div>

							</div>

						</div>

					</div>

				</div>

<!---- 

		form cuando se selecciona el tipo "Profesor"

---->				

				<div class="form-article" id="form-user-profesor">
					<div class="form-rows-group">
						<div class="form-cell form-cell-dm-w-1">
									
							<div class="form-rows">
										
								@foreach ($data['dll']['text'] as $rows)

									@if (($rows->gtxt_paramt_wordkey == 'wordkey_categoria_programs') && ($rows->gtxt_id_gtype == 1))

									{!! Form::label(null,$rows->gtxt_text,['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

									@endif
											
								@endforeach									

							</div>

							<div class="form-rows">
										
								{!! Form::select('v_frmCrtUs_categoriaPrograms',$data['dll']['comboCategoPrograms'],null,['class' => 'selectStyle input-dm-2']); !!}

							</div>

						</div>	
					</div>	
	
				</div>

				<div class="form-footer form-footer-dm-3 form-bc-1 ">					
				
					<div class="form-rows-group">						

						<div class="form-cell form-cell-dm-w-1 form-col">
						
							{!! Form::button('Registrar Usuario',['type' =>'submit','class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-1']); !!}

						</div>

						<div class="form-cell form-cell-dm-w-1 form-col">
						
							{!! Form::button('Limpiar campos',['type' =>'reset', 'class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-1']); !!}

						</div>

					</div>

				</div>

				{!! Form::close(); !!}

			</div>
				

	</div>


@endsection