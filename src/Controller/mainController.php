<?php
/**
 * Created by PhpStorm.
 * User: denische
 * Date: 14.10.18
 * Time: 8:56
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;


class mainController extends AbstractController
{
    /**
     * @Route("/main/index", name="main_page")
     */
    public function index()
    {
        $time = date('d-m-Y');

        return $this->render('main/index.html.twig', ['time' => $time]);
    }
}