<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/7/16
 * Time: 10:58 PM
 */
class Utilities
{
    public function loadPropertiesFiles()
    {
        if (isset($_SESSION["activeLanguage"])) {
            if (strcasecmp($_SESSION["activeLanguage"], "vi") == 0) {
                $this->lang->load('message', 'vietnamese');
            } else {
                $this->lang->load('message', 'english');
            }
        }
    }
}
