<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        $page = "home";
        $data['title'] = ucfirst($page); // Capitalize the first letter
   
        // echo view('templates/header', $data);
        echo view('pages/home');
        // echo view('templates/footer', $data);
    }

    public function view($page ='home')
    {
        // default page controller handles view in /view/pages/
        // stucture having /templates in header and footer files

         if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    // echo view('templates/header', $data);
    echo view('pages/' . $page, $data);
    // echo view('templates/footer', $data);

    }
}
