<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Villano;
use AppBundle\Form\VillanoType;

use AppBundle\Entity\Justicia;
use AppBundle\Form\JusticiaType;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Batman controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller
{

                /**
                * @Route("/registroVillano", name="registroVillano")
                */
                public function registroVillanoAction(Request $request)
                {
                  // 1) build the form
                  $user = new Villano();
                  $form = $this->createForm(VillanoType::class, $user);
                  // 2) handle the submit (will only happen on POST)
                  $form->handleRequest($request);
                  if ($form->isSubmitted() && $form->isValid()) {
                      // 4) save the User!
                      $entityManager = $this->getDoctrine()->getManager();
                      $entityManager->persist($user);
                      $entityManager->flush();
                      // ... do any other work - like sending them an email, etc
                      // maybe set a "flash" success message for the user
                      return $this->redirectToRoute('villanos');
                  }
                  return $this->render(
                      'Villanos/register.html.twig',
                      array('form' => $form->createView())
                  );
                }




               /**
               * @Route("/login", name="login")
               */
              public function loginAction(AuthenticationUtils $authenticationUtils)
              {
                  // get the login error if there is one
                  $error = $authenticationUtils->getLastAuthenticationError();

                  // last username entered by the user
                  $lastUsername = $authenticationUtils->getLastUsername();

                  return $this->render('Seguridad/login.html.twig', array(
                      'last_username' => $lastUsername,
                      'error'         => $error,
                  ));
              }

                 /**
                * @Route("/registroSuperheroe", name="registroSuperheroe")
                */
                public function registroSuperheroeAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
                {
                    // 1) build the form
                    $user = new Justicia();
                    $form = $this->createForm(JusticiaType::class, $user);
                    // 2) handle the submit (will only happen on POST)
                    $form->handleRequest($request);
                    if ($form->isSubmitted() && $form->isValid()) {
                        // 3) Encode the password (you could also do this via Doctrine listener)
                        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                        $user->setPassword($password);
                        // 4) save the User!
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($user);
                        $entityManager->flush();
                        // ... do any other work - like sending them an email, etc
                        // maybe set a "flash" success message for the user
                        return $this->redirectToRoute('villanos');
                    }
                    return $this->render(
                        'Justicia/register.html.twig',
                        array('form' => $form->createView())
                    );
                }
}
