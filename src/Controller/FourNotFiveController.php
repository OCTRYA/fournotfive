<?php
// src/Controller/fourNotFiveController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FourNotFiveController extends AbstractController
{

    public function main()
    {
        $number = random_int(0, 100);

        return $this->render('main.html.twig');
    }

    public function selfMonitoring()
    {
        return $this->render('selfMonitoring/selfMonitoring.html.twig');
    }

    public function phonemes()
    {
        return $this->render('phonemes/phonemes.html.twig');
    }

    public function ilt()
    {
        return $this->render('ilt/ilt.html.twig');
    }
}
