@section('content-img-slider')	
			
		<div class="content-slider">
			
			<div id="element_slider_1" class="element_slider element_slider_show">						
					
					<div class="
					content-topic  
					content-topic-dm-1 
					content-bg-topic-1">	

					<div class="					
					header-topic 
					header-topic-dm-3
					br-radius-top-left-st-1
					br-radius-bottom-left-st-4
					br-radius-top-right-st-4
					br-radius-bottom-right-st-1">	
						
						<h1 class="label-dm">Titulo del tema 1</h1>

					</div>	

					<div class="
					content-text-topic
					br-radius-top-left-st-4
					br-radius-bottom-left-st-4
					br-radius-top-right-st-4
					br-radius-bottom-right-st-4">	
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel odio eaque exercitationem, facere, impedit rerum sequi earum, omnis aut neque vitae voluptate eligendi in dolorum quidem. Cum doloremque repellat inventore.
						Vero obcaecati aliquid rerum dolorem numquam illo earum, repellat sint similique quaerat minus accusantium quae consequatur vitae, enim ipsum, sequi amet sunt voluptatum. Quos error assumenda, quidem! Veritatis, at, sapiente!
						Eius inventore, hic, eveniet enim.</p>

					</div>

					</div>

					<img src="{{asset('img/slider/img-slider-1.jpg')}}" class="img-xl-dm-1" >

			</div>
			
			@for($i = 1; $i <= 6; $i++)
			
			<div id="element_slider_{{($i+1)}}" class="element_slider">				
					
					<div class="
						content-topic  
						content-topic-dm-1 
						content-bg-topic-1">	
			
						<div class="											
							header-topic 
							header-topic-dm-3
							br-radius-top-left-st-1
							br-radius-bottom-left-st-4
							br-radius-top-right-st-4
							br-radius-bottom-right-st-1">	
							
							<h1 class="label-dm">Titulo del tema {{$i+1}}</h1>
			
						</div>	
			
						<div class="
							content-text-topic
							br-radius-top-left-st-4
							br-radius-bottom-left-st-4
							br-radius-top-right-st-4
							br-radius-bottom-right-st-4">
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel odio eaque exercitationem, facere, impedit rerum sequi earum, omnis aut neque vitae voluptate eligendi in dolorum quidem. Cum doloremque repellat inventore.
						Vero obcaecati aliquid rerum dolorem numquam illo earum, repellat sint similique quaerat minus accusantium quae consequatur vitae, enim ipsum, sequi amet sunt voluptatum. Quos error assumenda, quidem! Veritatis, at, sapiente!
						Eius inventore, hic, eveniet enim consequatur autem dolorum odio amet eum tempore excepturi cupiditate neque similique! Quidem ducimus id nesciunt iusto voluptate veritatis praesentium perferendis, repudiandae harum hic, ea assumenda!
						Sit porro minima rerum assumenda reprehenderit perferendis culpa totam pariatur expedita aspernatur, unde commodi delectus, odio provident reiciendis voluptatem quos numquam at tempore. Consectetur nesciunt veritatis doloremque, id enim?.</p>
			
						</div>
			
					</div>
			
					<img src="{{asset('img/slider/img-slider-'.($i+1).'.jpg')}}" class="img-xl-dm-1" >
			
			</div>
			
			@endfor

		</div>	

@endsection