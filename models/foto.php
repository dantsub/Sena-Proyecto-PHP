<?php 

class Foto
{
	public function uploadPhoto($dir, $nom_file)
	{
		// print_r($_FILES);
		$tmp_name = $nom_file['tmp_name'];
		if (is_dir($dir) && is_uploaded_file($tmp_name)) {

			$name_img = $nom_file['name'];
			$type = $nom_file['type'];
			$size = $nom_file['size'];
			$kb = 3072 * 1024;
			$path = "$dir/$name_img";

			if ( $type == 'image/jpeg' && $size <= $kb) {
				$s = move_uploaded_file($tmp_name,"$dir/$name_img");
				return $path;

			}else{
				echo 'El formato y/o el tamaño es mayor a 3MB';
			}
		}else{
			echo "hola";
		}
		
	}

}