<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /*
     * Page d'acceuil
     * http://localhost:8000
     */
    public function index()
    {
        $repository = $this->getDoctrine()
            ->getRepository(Article::class);

        // Récupération de tous les articles de la base
        $articles = $repository->findAll();
        $spotlights = $repository->findBySpotlight();

        // Transmission à la Vue pour affichage
        return $this->render("default/index.html.twig", [
            'articles' => $articles,
            'spotlights' => $spotlights
        ]);   // La fonction render() est héritée de la class AbstractController

//       return new Response(
//           "<html><body><h1>Page d'acceuil</h1></body></html>"
//       );
    }

    // La route est définie dans le fichier routes.yaml
    public function contact()
    {
       return new Response(
           "<html><body><h1>Page Contact</h1></body></html>"
       );
    }

    /**
     * Page permettant d'afficher les articles d'une catégorie
     * @Route("/categorie/{slug<[a-zA-Z0-9\-_\/]+>}",
     *     defaults={"slug"="all"},
     *     methods={"GET","POST"},
     *     name="default_categorie")
     */
    public function categorie($slug)
    {
        /*
         * Récupération de la catégorie correspondant au $slug
         * passé en paramètre de la route.
         * */

        $categorie = $this->getDoctrine()
            ->getRepository(Categorie::class)   // On cible la classe "Categorie"
            ->findOneBy(['slug'=>$slug]);

        /*
         * Grâce à la relation OneToMany en tre Catégorie et Article
         * je suis en mesure de récupérer les articles d'une catégorie.
         */
        $articles = $categorie->getArticles();

        dump($categorie);
        dump(Categorie::class);

        /*
         * Envoie à la vue des données à afficher.
         */
        return $this->render("default/categorie.html.twig", [
            'articles'=>$articles,
            'categorie'=>$categorie
        ]);
//        return new Response(
//            "<html><body><h1>Page Catégorie : $slug</h1></body></html>"
//        );
    }

    /**
     * Page permettant d'afficher un article
     * @Route("/{categorie}/{slug}_{id<\d+>}.html",
     *     name="default_article")
     */
    public function article($id)
    {
        /*
         * Récupération de l'article correspondant
         * à l'$id en paramètre de la route
         */

        $article=$this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        return $this->render('default/article.html.twig', [
            'article' => $article
        ]);
    }

    public function sidebar()
    {
        $repository = $this->getDoctrine()
            ->getRepository(Article::class);

        // Récupération des 5 derniers articles
        $articles = $repository->findByLatest();

        // Récupération des articles à la position spécial
        $special = $repository->findBySpecial();

        // Transmission des informations à la Vue
        return $this->render('components/_sidebar.html.twig', [
            'articles' => $articles,
            'special' => $special
        ]);
    }
}