<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller from codefii
 *
 * PHP version 7.1
 */
class Home extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('LandingPage/index.php');
    }
    public function homeAction()
    {
        View::render('Home/index.php');
    }
}
