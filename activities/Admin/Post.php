<?php 
namespace Admin;

use database\Database;

class Post extends Admin{
    
    public function index()
    {
        $db = new Database();
        $posts = $db->select('SELECT posts.*, categories.name as category_name, users.username as user_name FROM posts  JOIN categories on posts.category_id=categories.id  JOIN users on posts.user_id = users.id ORDER BY id')->fetchAll();
        require_once(BASE_PATH.'/template/admin/posts/index.php');
    }
    public function create()
    {   
        $db = new Database();
        $categories = $db->select("SELECT * FROM categories")->fetchAll();
        
        require_once BASE_PATH . '/template/admin/posts/create.php';
    }
    public function store($request)
    {
        $realTime = substr($request['published_at'],0, 10);
        $request['published_at']=date('Y-m-d H:i:s',(int)$realTime);
        $db = new Database();
        if($request['category_id'] != null)
        {
            $request['image'] = $this->storeImage($request['image'], 'posts');
            if($request['image']){
                $request= array_merge($request, ['user_id' => 1]);
                $db->insert('posts',array_keys($request), $request);
                $this->redirect('admin/posts');
            }else{
                $this->redirect('admin/posts');
            }

        }else{
            $this->redirect('admin/posts');
        }
    }
    public function edit($id)
    {
        $db = new Database();
        $post= $db->select('SELECT * FROM posts WHERE id=?;',[$id])->fetch();
        $categories = $db->select("SELECT * FROM categories")->fetchAll();
        require_once('template/admin/posts/edit.php');
    }
    public function update($request, $id)
    {
        date_default_timezone_set('Iran');
        $realTime = substr($request['published_at'],0, 10);
        $request['published_at']=date('Y-m-d H:i:s',(int)$realTime);
        $db = new Database();
        if($request['category_id'] != null)
        {
            if($request['image']['tmp_name'] != null){
                $post= $db->select('SELECT * FROM posts WHERE id=?;',[$id])->fetch();
                $this->removeImage($post['image']);
                $request['image'] = $this->storeImage($request['image'], 'posts');
            }else{
                unset($request['image']);
            }
            $data['user_id']=1;
            if(!array_key_exists('selected', $request)){
                $data['selected'] = 2;
            }
            if(!array_key_exists('breaking_news', $request)){
                $data['breaking_news'] = 2;
            }
            // dd($data);
            $request= array_merge($request, $data);
            $db->update('posts', $id, array_keys($request), $request);
            $this->redirect('admin/posts');
        }else{
            $this->redirect('admin/posts');
        }
    }
    public function delete($id)
    {
        $db = new Database();
        $post = $db->select('SELECT * FROM posts WHERE id=?;', [$id])->fetch();
       $this->removeImage($post['image']);
        $db->delete('posts', $id);
        $this->redirectBack();
    }

    public function selected($id)
    {
        $db = new Database();
        $post = $db->select('SELECT * FROM posts WHERE id=?;', [$id])->fetch();
        if(!empty($post)){
            if($post['selected']== 1){
                $db->update('posts', $id, ['selected'], [2]);
            }else{
                $db->update('posts', $id, ['selected'], [1]);
            }
        }
        
        $this->redirectBack();

    }
     public function breakingNews($id){
        $db = new Database();
        $post = $db->select('SELECT * FROM posts WHERE id=?;', [$id])->fetch();
        if(!empty($post)){
            if($post['breaking_news']== 1){
                $db->update('posts', $id, ['breaking_news'], [2]);
            }else{
                $db->update('posts', $id, ['breaking_news'], [1]);
            }
        }
        
        $this->redirectBack();
     }
}