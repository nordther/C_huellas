@section('content-tools-search')

		@if ($data['type-modul'] == 'buscar-usuario')
			
			<div class="form-content-toolt-search" id="TooltsSearch">
				
				<div class="form-toolt-search-header">
					
					<h3>
						
						Herramientas

					</h3>

				</div>

			</div>

			<div class="form-toolt-hide-show" id="TooltsSearchShowHide">
				
				<div class="form-toolt-action">
					
					{!! Form::Button(null,['class' => 'button-form-tool-arrowShowToolt button-dm-1','id' => 'btnShowToolts', 'title' => 'Herramientas de Filtros']) !!}

				</div>

			</div>
	
		@elseif($data['type-modul'] == 'buscar-agenda')
			
			<div class="form-content-toolt-search" id="TooltsSearch">
				
				<div class="form-toolt-search-header">
					
					<h3>
						
						Herramientas

					</h3>

				</div>

			</div>

			<div class="form-toolt-hide-show" id="TooltsSearchShowHide">
				
				<div class="form-toolt-action">
					
					{!! Form::Button(null,['class' => 'button-form-tool-arrowShowToolt button-dm-1','id' => 'btnShowToolts', 'title' => 'Herramientas de Filtros']) !!}

				</div>

			</div>
	
		@endif

@endsection