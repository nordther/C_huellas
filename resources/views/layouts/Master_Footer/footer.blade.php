@section('footer')
	@parent
			
			<div class="footer footer-relative footer-color-text bg-content-neutro-opacity ">			

				<div class="label-footer">

					@foreach($data['dll']['icon'] as $dll)
	
						@if ($dll->srcapp_filename == 'about.png')
							<img src="{{asset($dll->srcapp_dir.$dll->srcapp_filename)}}" alt="" class="img-dm-mini">
						@endif
	
					@endforeach	
					
					

					<SMALL class=""> © Todo los derechos reservados a; Dejando Huella Kid's</SMALL>	

				</div>
				
			</div>	  

@endsection