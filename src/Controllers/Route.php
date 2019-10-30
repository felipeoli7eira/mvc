<?php

    namespace Src\Controllers ;

    use Src\Controllers\View ;

    class Route
    {
        public static function listener ()
        {
            if ( isset ( $_GET [ 'uri' ] ) )

            self::defineViewName ( $_GET [ 'uri' ] ) ;

            else

            self::defineViewName ( 'home' ) ;
        }

        private static function defineViewName ($_vName)
        {
            if ( file_exists ( __DIR__ . "/../../views/{$_vName}.html" ) )

            self::setView ($_vName);

            else

            self::setView ( 'notFound' );
        }

        private static function setView ( $_vName )
        {
            new View ($_vName, [ 'message' => 'hello twig' ]);
        }
    }

    //
