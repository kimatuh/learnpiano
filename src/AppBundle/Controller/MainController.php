<?php
/**
 * Created by PhpStorm.
 * User: Yohana
 * Date: 5/9/2017
 * Time: 9:51 AM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('/main/home.html.twig');
    }
}