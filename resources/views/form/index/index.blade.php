@section('content-text')

<div class="ancla-link" id="noticias"></div>

<div class="content bg-content">

	<div class="cardview-effect-white">

		<div class="header-topic-dm-2 label-start">
			<h2>
				Novedades Nuevas
			</h2>
		</div>
		
	</div>

	<div class="content-grid grid-2">
		@for($i = 1 ; $i<=3; $i++)
			<div class="cardview-effect-white cardview-dm-1 cardview-margin-all-1 cardview-border-top-right-radius-3 
					cardview-border-top-left-radius-3 
					cardview-border-bottom-right-radius-3 
					cardview-border-bottom-left-radius-3">
				<div class="cardview-header cardview-header-dm-3 cardview-header-margin-auto cardview-border-top-right-radius-3 
					cardview-border-top-left-radius-3">
					<h3 >Titulo de la noticia</h3>
				</div>		
				<div class="cardview-article">
					<center>
						<img src="{{asset('img/img'.$i.'.jpg')}}" border=0 class="img-xl-dm-2 cardview-img-dm-generity">			
					</center>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>

				</div>				
				<div class="cardview-footer cardview-footer-dm-2 cardview-footer-margin-auto">
					<button class="button-s-f button-dm-2 button-radius-circle button-margin-left" onclick="f_social_face()"></button>
					<button class="button-s-t button-dm-2 button-radius-circle button-margin-left" onclick="f_social_twt()"></button>
					<button class="button-s-i button-dm-2 button-radius-circle button-margin-left" onclick="f_social_inst()"></button>
				</div>		
			</div>
		@endfor	
		@for($i = 1 ; $i<=3; $i++)
			<div class="cardview-effect-white cardview-dm-1 cardview-margin-all-1
			cardview-border-top-right-radius-3 
					cardview-border-top-left-radius-3 
					cardview-border-bottom-right-radius-3 
					cardview-border-bottom-left-radius-3">
				<div class="cardview-header cardview-header-dm-3 cardview-header-margin-auto
				cardview-border-top-right-radius-3 
					cardview-border-top-left-radius-3">
					<h3>Titulo de la noticia</h3>
				</div>		
				<div class="cardview-article">
					<center>
						<img src="{{asset('img/img'.$i.'.jpg')}}" border=0 class="img-xl-dm-2 cardview-img-dm-generity">			
					</center>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>

				</div>				
				<div class="cardview-footer cardview-footer-dm-2 cardview-footer-margin-auto">
					<button class="button-s-f button-dm-2 button-radius-circle button-margin-left" onclick="f_social_face()"></button>
					<button class="button-s-t button-dm-2 button-radius-circle button-margin-left" onclick="f_social_twt()"></button>
					<button class="button-s-i button-dm-2 button-radius-circle button-margin-left" onclick="f_social_inst()"></button>
				</div>		
			</div>
		@endfor
		
	</div>

</div>
@endsection



