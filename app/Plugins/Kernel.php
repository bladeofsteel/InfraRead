<?php
namespace App\Plugins;
/**
 *  Plugins are classes that Modify Post objects depending on Source
 */

class Kernel
{

    public function get()
    {
        // Remember, the order of the plugins matters. Start from left to right.
        return 
        [
            'httpsslashdotorg'  =>  ['MakeTextLegible','ReplaceArticleLink'],
        ];
    }    

}
