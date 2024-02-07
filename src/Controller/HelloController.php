<?php

    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HelloController extends AbstractController
    {

        public function sayHello(): Response
        {
            return new Response("Hello");
        }
    }


?>