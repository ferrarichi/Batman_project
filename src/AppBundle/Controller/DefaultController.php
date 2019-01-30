<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use AppBundle\Entity\Justicia;
use AppBundle\Form\JusticiaType;

use AppBundle\Entity\Villano;
use AppBundle\Form\VillanoType;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

            /**
             * @Route("/villanos", name="villanos")
             */
            public function indiceAction_villanos()
            {
                $repository = $this->getDoctrine()->getRepository('AppBundle:Villano');
                $values = $repository->findAll();
                return $this->render('Villanos/villanos.html.twig', array("villanos"=>$values));
            }



}
