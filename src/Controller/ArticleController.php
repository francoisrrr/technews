<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Membre;


use App\Form\ArticleFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    use HelperTrait;

    /**
     * Démonstration de l'ajout d'un Article avec Doctrine
     * @Route("/demo/article", name="article_demo")
     */
    public function demo()
    {
        // Création d'une catégorie
        $categorie = new Categorie();
        $categorie->setNom("Divertissement");
        $categorie->setSlug("divertissement");

        // Création d'un Auteur (<=>Membre)
        $membre = new Membre();
        $membre->setPrenom("Francois");
        $membre->setNom("Ramet");
        $membre->setEmail("toto@email.com");
        $membre->setPassword("test");
        $membre->setRoles(['ROLE_AUTEUR']);
        $membre->setDateInscription(new \DateTime());

        // Création de l'article
        $article = new Article();
        $article->setTitre("Netflix will start testing a top 10 list of its most popular content");
        $article->setSlug("netflix-top-10-list-most-popular-coming-soon-test");
        $article->setContenu("<p>Netflix plans to begin testing a top 10 list for streaming customers in the UK. It will allow them to see which shows and movies are currently the most popular across the service. The top 10 will be updated weekly, and each genre / category will get its own list.

“For those who want to watch what others are watching, this may make choosing titles even easier,” CEO Reed Hastings wrote in this quarter’s letter to investors. “After a few months we’ll decide whether to end or expand the test.” The test will begin later this quarter.

The move is a small but notable step for Netflix, which has always been cagey about viewership data and reluctant to share solid streaming metrics. That’s still true: you won’t be able to see how many people have watched a specific item recently, but a top 10 is still more than we’ve had to go on before in gauging what’s trending on the service.

Word of mouth is plenty effective at pointing you toward the biggest thing that’s new on Netflix, but it’ll be fascinating to see what fills out the list and the balance between licensed content and Netflix Originals.</p>");
        $article->setFeaturedImage("netflix-stock-1110.0.0.jpg")
                ->setSpotlight(1)
                ->setSpecial(1);
        $article->setMembre($membre);
        $article->setCategorie($categorie);
        $article->setDateCreation(new \DateTime());

        /* Récupération du manager de Doctrine
         * -----------------------------------
         * Le EntityManager est une classe qui
         * permet d'effectuer des opérations CRUD
         * sur les autres classes.
         * */

        $em = $this->getDoctrine()->getManager();   // Permet de récupérer le EntityManager de Doctrine
        $em->persist($categorie);
        $em->persist($membre);
        $em->persist($article);
        $em->flush();

        // Retourner une réponse à la Vue
        return new Response('Nouvel Article ajouté avec ID : '
        .$article->getId()
        .' et la nouvelle catégorie '
        .$categorie->getNom()
        .'de Auteur : '
        .$membre->getPrenom()
        );
    }

    /**
     * Formulaire pour créer un article
     * @Route("/creer-un-article", name="article_add")
     */
    public function addArticle(Request $request)
    {
        // Création d'un nouvel article
        $article = new Article();

        // Récupération des catégories
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        // Récupération d'un auteur
        $membre = $this->getDoctrine()
            ->getRepository(Membre::class)
            ->find(1);

        // Affecter un auteur à l'article
        $article->setMembre($membre);

        // Création d'un formulaire permettant d'ajouter un article
        $form = $this->createForm(ArticleFormType::class,$article);

        // Traitement des données POST
        $form->handleRequest($request);
        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            //1. Traitement de l'upload de l'image
                // $file stores the uploaded PDF file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $form['featuredImage']->getData();

                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

                // Move the file to the directory where featuredImage are stored
                try {
                    $file->move(
                        $this->getParameter('featuredImage_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'article' property to store the PDF file name
                // instead of its contents
                $article->setFeaturedImage($fileName);

            //2. Génération du Slug
            $article->setSlug($this->slugify($article->getTitre()));

            //3. Sauvegarde en BDD
            $em=$this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            //4. Notification
            $this->addFlash('notice',
                'Félicitations votre article est en ligne !');

            //5. Redirection
            return $this->redirectToRoute('default_article',[
                'categorie' => $article->getCategorie()->getSlug(),
                'slug' => $article->getSlug(),
                'id' => $article->getId()]);
        }

        // Affichage du formulaire dans la vue
        return $this->render("article/addform.html.twig", [
            'form' => $form->createView()
        ]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

}
