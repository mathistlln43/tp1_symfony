<?php

    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HelloController extends AbstractController
    {
        #[Route('/hello', name: 'app_hello')]
        public function sayHello() : Response
        {
            return $this->render('hello/bonjour.html.twig');
        }
    
        #[Route('/bonjour/{nom}',name: 'app_bonjour')]
        public function bonjour($nom)
        {
            //return new Response("Bonjour $nom !");
            return $this->render('hello/bonjour_avec_param.html.twig', [
            'nom' => $nom,
            ]);
        }
    }
    


?>