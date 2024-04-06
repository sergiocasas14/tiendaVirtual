<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        
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

    // Vista detail
    public function contactos()
    {
        $data['title'] = 'Contactos';
        $this->views->getView('principal', "contact", $data);
    }
     
}