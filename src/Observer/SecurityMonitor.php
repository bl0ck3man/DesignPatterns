<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 20/08/2017
 * Time: 00:34
 */

namespace Observer;

require_once 'src/Observer/Observer.php';

class SecurityMonitor extends Observer
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status == Login::LOGIN_WRONG_PASS) {
            // send mail to sysadmin
            print __CLASS__ . ":    sending mail to sysadmin\n";
        }
    }
}