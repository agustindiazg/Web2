<?php

include_once 'views/IndexView.php';
include_once 'controllers/AdminController.php';
include_once 'controllers/AerolineaController.php';
include_once 'controllers/CiudadController.php';
include_once 'controllers/NavController.php';
include_once 'controllers/VueloController.php';

class IndexController
{
  private $view;
  private $home;
  private $vuelo;
  private $admin;
  private $controllerAdmin;
  private $controllerAerolinea;
  private $controllerCiudad;
  private $controllerNav;
  private $controllerVuelo;

  function __construct()
  {
    $this->view =  new IndexView();
    $this->home = new  HomeView();
    $this->vuelos = new VueloView();
    $this->admin = new AdminView();

    $this->controllerAdmin = new AdminController();
    $this->controllerAerolinea = new AerolineaController();
    $this->controllerCiudad = new CiudadController();
    $this->controllerNav = new NavController();
    $this->controllerVuelo = new VueloController();
  }

  function home()
  {
    $this->view->mostrarHome();
  }


  function mostrarHome(){
   $this->home->mostrarHome();
  }

  function mostrarVuelos(){
    $this->vuelos->mostrarVuelos();
  }

  function adminABM(){
    $this->admin->mostrarAdmin();
  }


}


 ?>