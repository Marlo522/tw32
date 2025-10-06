<?php
namespace App\Controllers;

class Products extends BaseController {
    public function index() {
        $productmodel = model('Products_models');
        $data = array(
            'title' => 'Products',
            'products' => $productmodel->findAll()
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('products_view', $data)
            .view('include\foot_view');
    }
    public function add() {
        $data = array(
            'title' => 'Add Product',
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('addproducts_view')
            .view('include\foot_view');
    }

    public function insert(){
        $productmodel = model('Products_models');
        
        // Handle file upload
        $imageName = '';
        $file = $this->request->getFile('productimage');
        
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        
        $data = array(
            'productimage' => $imageName,
            'productname' => $this->request->getPost('productname'),
            'productdescription' => $this->request->getPost('productdescription'),
            'price' => $this->request->getPost('price'),
        );

        $productmodel->insert($data);

        return $this->response->redirect(site_url('/products'));
    }

    public function edit() {
        $data = array(
            'title' => 'Edit Product',
        );
        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('editproducts_view')
            .view('include\foot_view');
    }

    public function view($productid) {
        $productmodel = model('Products_models');
        $data = array(
            'title' => 'View Product',
            'product' => $productmodel->find($productid)
        );
        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('viewproducts_view', $data)
            .view('include\foot_view');
    }

    public function delete($productid) {
        $productmodel = model('Products_models');
        $productmodel->delete($productid);
        return $this->response->redirect(base_url('/products'));
    }
}