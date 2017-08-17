@section('content-searchuser')
	
	<div class="content bg-content">

		<div class="form-content-search" id="form-content-search-user">
		
			<div class="form-header-search form-search-col-dm-h-2">

				<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-2 ">

					{!! Form::label(null, 'Foto' ); !!}

				</div>

				<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-2 form-search-col-border">

					{!! Form::label(null, 'Nombres' ); !!}

				</div>


				<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-2 form-search-col-border">

					{!! Form::label(null, 'Telefono' ); !!}

				</div>				

				<div class="form-search-col form-search-col-dm-w-3 form-search-col-dm-h-2 form-search-col-border">

					{!! Form::label(null, 'Correo Electronico' ); !!}

				</div>

				<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-2 ">
					

				</div>

			</div>	

			<div class="form-article-search scroll">

				@foreach($data['dll']['usersSearch'] as $rows)				
				
				<div class="form-search-row-effect-cardview form-search-col-dm-h-3" id="targetItem{{$i}}" >				
					
					
						<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-3">
							@if($data['dataForm']['iconUserSearch'] == null)

								@foreach($data['dll']['icon'] as $icon)

									@if($icon->srcapp_filename == 'userDefault.png')

										<img src="{{asset($icon->srcapp_dir.$icon->srcapp_filename)}}" class="img-dm-8 cicle-bisel-1" style="margin-top:5px;">

									@endif

								@endforeach
								
							@elseif($data['dataForm']['iconUserSearch'] != null)

								<img src="{{asset('img/icon/userDefault.png')}}" class="img-dm-7 cicle-bisel-1" style="margin-top:5px;">

							@endif
						</div>

						<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3">

							{!! Form::label(null, $rows->dp_nombre ); !!}

						</div>

						<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3">

							{!! Form::label(null, $rows->dp_telefono ); !!}

						</div>

						<div class="form-search-col form-search-col-dm-w-3 form-search-col-dm-h-3">

							{!! Form::label(null, $rows->us_email ); !!}							

						</div>	

						<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">
							
							{!! Form::button(null,['class' => 'button-form-tool-edit button-dm-2 cicle-bisel-1','id' => 'btnEdit','title' => 'Editar Usuario']); !!}
							
						</div>

						<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">
							
							{!! Form::button(null,['class' => 'button-form-tool-more button-dm-2 cicle-bisel-2','id' => 'btnMore','title' => 'Ver Información del Usuario']); !!}
							
						</div>
						
						<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">
							
							{!! Form::button(null,['class' => 'button-form-tool-disabled button-dm-2 cicle-bisel-1','id' => 'btnDisable','title' => 'Dishabilitar Usuario']); !!}
							
						</div>

				</div>				

				@endforeach

			</div>

			<div class="form-footer-search">				

			</div>			
		
		</div>

		@yield('content-tools-search')
	
	</div>


@endsection