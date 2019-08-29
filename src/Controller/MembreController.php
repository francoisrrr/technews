<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Form\MembreFormType;
use App\Form\ConnexionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class MembreController extends AbstractController
{
    /**
     * @Route("/inscription.html",name="membre_inscription")
     */
    public function inscription(Request $request,
                                UserPasswordEncoderInterface $encoder)
    {
        //  -- Création d'un membre
        $membre = new Membre();
        $membre->setRoles(['ROLE_MEMBRE']);

            // Récupération des auteurs de la BDD
            $membres = $this->getDoctrine()
                ->getRepository(Membre::class)
                ->findAll();

        //  -- Création du formulaire "MembreFormType"
        $form = $this->createForm(MembreFormType::class,$membre);

        //  -- Vérification de la soumission du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //  -- Encodage du mot de passe
            $membre->setPassword(
                $encoder->encodePassword($membre, $membre->getPassword())
            );

            //  -- Sauvegarde en BDD
            $em=$this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();

            //  -- Notifications
            $this->addFlash('notice',
                'Félicitations vous pouvez vous connecter!');

            //  -- Redirection
            return $this->redirectToRoute('membre_connexion');
        }

        // Affichage du formulaire dans la vue
        return $this->render("membre/inscription.html.twig",[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/connexion.html",name="membre_connexion")
     */
    public function connexion(AuthenticationUtils $authenticationUtils)
    {
        // Récupération du Formulaire de Connexion
        $form = $this->createForm(ConnexionFormType::class, [
            'email' => $authenticationUtils->getLastUsername()
            ]
        );

        // Affichage du formulaire dans la Vue
        return $this->render('membre/connexion.html.twig',[
            'form' => $form->createView(),
            'error'=> $authenticationUtils->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/deconnexion.html", name="membre_deconnexion")
     */
    public function deconnexion()
    {

    }
}