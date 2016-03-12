<?php
function getfiles($dir,&$arr){
		if($files=scandir($dir)) {
			foreach($files as $file){
				if($file!='.'&&$file!='..'){
					$dir_child=$dir.DIRECTORY_SEPARATOR.$file;
					getfiles($dir_child,$arr);		
				}
			}
		}else{
			array_push($arr, $dir);
		};
}

$myfiles=array();
@getfiles('E:\www\lixu\variety',$myfiles);
print_r($myfiles);


function filter

?>