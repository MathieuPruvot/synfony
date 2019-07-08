<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class LuckyController extends AbstractController
{
    /**
     *
     * @Route("/lucky/number", name="lucky_number")
     */
    public function number()
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number_max")
     */
    public function max($max)
    {
        $number = random_int(0, $max);
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

}