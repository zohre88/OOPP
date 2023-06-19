<?php 

namespace Admin;

use database\Database;

class Category extends Admin{
    public function index()
    {
        $db = new Database();
        $categories = $db->select('SELECT * FROM categories ORDER BY `id` DESC')->fetchAll();
        // dd($categories);
        require_once(BASE_PATH . '/template/admin/categories/index.php');
    }

    public function create()
    {
       require_once(BASE_PATH . '/template/admin/categories/create.php');
    }

    public function store($request)
    {
       $db = new Database();
        $db->insert('categories',array_keys($request),$request);
        $this->redirect('admin/categories');
    }
    public function edit($id)
    {
       
        $db = new Database();
        $category = $db->select('SELECT * FROM categories WHERE id=?;',[$id])->fetch();
        require_once(BASE_PATH . '/template/admin/categories/edit.php');
        
    }
    public function update($request, $id)
    {
        $db = new Database();
        $db->update('categories', $id, array_keys($request), $request);
        $this->redirect('admin/categories');
    }
    public function delete($id)
    {
       $db = new Database();
       $db->delete('categories',$id);
       $this->redirect('admin/categories');
    }
}