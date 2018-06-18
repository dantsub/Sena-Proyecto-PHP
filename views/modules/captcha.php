<?php 
class Captcha{
	
	public function createCharacters()
	{
		$captcha = "";
		$chars = "ABCDEFGHIJKLMNOPQRSTVWXYZabcdefghijklmnopqrstvwxyz0123456789";
		$length = 6;

		for ($i=0; $i < $length ; $i++) { 
			$rand = rand(0, strlen($chars)-1);
			$captcha.= $chars[$rand];
		}

		$height = 68;
		$width = 322;
		$font = $_SERVER["DOCUMENT_ROOT"] . 'SENA/PHP1/Proyecto/views/fonts/FjallaOne-Regular.ttf';
		$font_size = 25;

		$img = imagecreatetruecolor($width, $height);
		$bg_color = imageColorAllocate($img, 92, 92, 95);
		$text_color = imageColorAllocate($img, 255, 255, 255);

		setcookie('captcha', sha1($captcha), time()+ 60 * 3);
		imagettftext($img, $font_size, 0, 80, 45, $text_color, $font, $captcha);


		header("Content-Type: image/png");
		imagePng($img);
		imageDestroy($img);
		

	}

}
// objeto captcha
$a = new Captcha();
$a->createCharacters();