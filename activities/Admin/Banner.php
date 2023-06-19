<?php 

namespace Admin;

use database\Database;

class Banner extends Admin{

    public function index(){
        $db = new Database();
        $banners = $db->select('SELECT * FROM banners ORDER BY id'); 
       require_once 'template/admin/banners/index.php';
    }
    public function create(){
        require_once 'template/admin/banners/create.php';
    }

    public function store($request){
       $db = new Database();
       $request['image'] = $this->storeImage($request['image'],'banners');
       if( $request['image']){
            $db->insert('banners',array_keys($request), $request);
            $this->redirect('admin/banners');
       }else{
        $this->redirect('admin/banners');
       }
       
    }

    public function edit($id){
        $db = new Database();
        $banner = $db->select('SELECT * FROM banners WHERE id = ?;',[$id])->fetch();
        require_once 'template/admin/banners/edit.php';
    }

    public function update($request, $id){
       $db = new Database();
        if($request['image']['tmp_name'] != null){
            $banner = $db->select('SELECT * FROM banners WHERE id = ?;',[$id])->fetch();
            $this->removeImage($banner['image']);
            $request['image'] = $this->storeImage($request['image'],'banners');
       }else{
            unset($request['image']);
       } 
       $db->update('banners', $id, array_keys($request), $request);
       $this->redirect('admin/banners');
    }

    public function delete($id){
        $db = new Database();
        $banner= $db->select('SELECT * FROM banners WHERE id = ?;',[$id])->fetch();
        $this->removeImage($banner['image']);
        $db->delete('banners', $id);
        $this->redirect('admin/banners');
       
    }





}