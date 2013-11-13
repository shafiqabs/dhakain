
<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

/**
 * Spaw Loader
 *
 * Put the 'Spaw' folder (under 'Library')
 * in CI installation's 'application/libraries' folder
 * You can put it elsewhere but remember to alter the script accordingly
 *
 * Usage:
 *   1) $this->load->library('spaw');
 *
 *
 *   2) <? $spaw = new SpawEditor("intro", ''); ?>
 *      <? $spaw->show(); ?>
 *
 */

//require_once('spaw2/spaw.inc.php');
require_once('spaw2/config/config.php');
require_once('spaw2/class/editor.class.php');
class Spaw
{
    /**
     * Constructor
     *
     * @param   string $class class name
     */
    function __construct($class = NULL)
    {
        // include path for Spaw Editor
        // alter it accordingly if you have put the 'Spaw' folder elsewhere
        ini_set('include_path',
            ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'libraries');

        if ($class)
        {
            require_once (string) $class . EXT;
            log_message('debug', "Spaw Class $class Loaded");
        }
        else
        {
            log_message('debug', "Spaw Class Initialized");
        }
    }

    /**
     * Spaw Class Loader
     *
     * @param   string $class class name
     */
    function load($class)
    {
        require_once (string) $class . EXT;
        log_message('debug', "Spaw Class $class Loaded");
    }
}

?>
