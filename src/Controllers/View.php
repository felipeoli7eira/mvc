<?php

    namespace Src\Controllers ;

    class View
    {
        private $viewName;
        private $data;

        private $viewsFolder;
        private $twig;

        public function __construct ($viewName, $data)
        {
            $this ->viewName = $viewName . '.html' ;
            $this ->data = $data ;

            $this ->viewsFolder = __DIR__ . "/../../views" ;

            $this ->twig = new \Twig_Environment (new \Twig_Loader_Filesystem ( $this ->viewsFolder ));

            $this ->show () ;
        }

        private function show ()
        {
            echo $this->twig->render ( $this->viewName, $this ->data ) ;
        }
    }