<?php

namespace IdnoPlugins\Postgres {
    
    class Main extends \Idno\Common\Plugin
    {

        function registerPages()
        {
	    
        }

        function registerTranslations()
        {

            \Idno\Core\Idno::site()->language()->register(
                new \Idno\Core\GetTextTranslation(
                    'postgres', dirname(__FILE__) . '/languages/'
                )
            );
        }
	
	function registerEventHooks() {
	    

	}

    }

}
