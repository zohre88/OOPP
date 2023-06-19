<?php
namespace Admin;

class Admin
{
    private $currentDomain,$basePath;

    function __construct()
    {
        $this->currentDomain = CURRENT_DOMAIN;
        $this->basePath = BASE_PATH;
    }

    protected function redirect($url)
    {
        header("Location: ". trim($this->currentDomain, '/ ').'/'. trim($url,'/ '));
        exit;
    }

    protected function redirectBack()
    {
        header("Location: ". $_SERVER['HTTP_REFERER']);
        exit;
    }
    protected function storeImage($image, $imagePath, $imageName = null)
    {
        if($imageName)
        {
            $extension = explode('/',$image['type'])[1];
            $imageName = $imageName .'.'. $extension;
        }else{
            $extension = explode('/',$image['type'])[1];
            $imageName = date('Y-m-d-H-i-s').'.'.$extension;
        }

        $imageTemp = $image['tmp_name'];
        $imagePath = 'public/uploads/'.$imagePath.'/';
        if(is_uploaded_file($imageTemp)){
            if(move_uploaded_file($imageTemp, $imagePath . $imageName)){
                    return $imagePath.$imageName;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    protected function removeImage($path)
    {
        // $path = trim($this->currentDomain, '/ ').'/'.$path;
        // $path = trim($this->currentDomain, '/ ').'/'./$path;
        // dd(file_exists($path));
        if(file_exists($path))
        {
            unlink($path);
        }else{
            return false;
        }
    }
}