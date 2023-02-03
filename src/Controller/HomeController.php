<?php
declare(strict_types=1);

namespace App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        $galleries = $this->loadModel('Gallery')
                              ->find('all')
                              ->contain('Image');

        $this->set(compact('galleries'));
    }
}