<?php
namespace EasyUIkit;

use EasyUIkit\Helpers\ScriptStyles;
use EasyUIkit\Helpers\GithubUpdater;

class Init {

    public function __construct() {
        new ScriptStyles();

        $updater = new GithubUpdater( EASYUIKIT_FILE );
        $updater->set_username( 'badabingbreda' );
        $updater->set_repository( 'easy-uikit' );
        $updater->set_settings( array(
                    'requires'			=> '5.1',
                    'tested'			=> '6.1.1',
                    'rating'			=> '100.0',
                    'num_ratings'		=> '10',
                    'downloaded'		=> '10',
                    'added'				=> '2019-04-06',
                ) );
        $updater->initialize();
       
    }
}