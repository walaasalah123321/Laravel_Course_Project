<?php 
namespace App\Http\Traits;
trait ImagesTraite{

    private function uploadImage($file,$fileName,$path,$oldFile=null){

        $file->move(public_path("admin/images/".$path),$fileName);
        if(!is_null($oldFile)){
            unlink(public_path($oldFile));
        }

    }
}

?>