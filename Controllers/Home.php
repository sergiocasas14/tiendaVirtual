<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $this->views->getView('home', "index", $data);
    }

    // Vista about
    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "about", $data);
    }
        // Vista about
     public function shop()
    {
         $data['title'] = 'Nuestros Productos';
        $this->views->getView('principal', "shop", $data);
    }
        // Vista detail
     public function detail($id_producto)
     {
         $data['title'] = '--------------------';
         $this->views->getView('principal', "detail", $data);
     }
}