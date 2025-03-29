<?php 
require_once __DIR__ . '../../models/NoticiasModel.php';

class NoticiaController{
    private $noticiaModel;
    public function __construct(){
        $this->noticiaModel = new NoticiaModel();
    }

    public function index(){
        $noticiaModel = new NoticiaModel();
        $noticias = $noticiaModel->getUltimasNoticias(5);
        require_once '../app/views/noticias/index.php';
    }

    public function show($id){
        $noticiaModel = new NoticiaModel();
        $noticia = $noticiaModel->getNoticiaById($id);
        require_once '../app/views/noticias/show.php';
    }

    public function latest() {

    }
}