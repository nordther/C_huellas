<?php 
namespace DejandoHuella\ClassCunstom;

class classEncriptationApp {
	public static function encoData($data){
	 	return 
	 	base64_encode(
	 		base64_encode(
	 			base64_encode(
	 				base64_encode(
	 					base64_encode(
	 						base64_encode(
	 							base64_encode(
	 								base64_encode($data))))))));
	}

	public static function decoData($data){
	 	return 
	 	base64_decode(
	 		base64_decode(
	 			base64_decode(
	 				base64_decode(
	 					base64_decode(
	 						base64_decode(
	 							base64_decode(
	 								base64_decode($data))))))));

	}

	
}
