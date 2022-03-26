<?php namespace App\Controller;

use CodeIgniter\Controller;

class Articulo extends Controllers
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view ($page = 'home')
    {
        if (! is_file (APPPATH.'/Views/articulo/'.$page.'.php')) 
        {
            throw new \Codeception\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst ($page);

        echo view('templates/header', $data);
        echo view('articulo/'.page, $data);
        echo view('templates/footer', $data);
    }
}