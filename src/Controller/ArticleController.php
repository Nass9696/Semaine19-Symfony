<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Appp\Repository\ArticleRepository;

class ArticleController extends AbstractController{

    /**
     * @Route("/index", name="index_accueil")
     */
  public function accueil() {

    echo "hello";

    return new Response();
  }

    /**
     * @Route("/single/{id<\d+>}", name = "single")
     */
  public function single($id) {

    $repository = $this->getDoctrine()->getRepository(Article::class);
    $article = $repository->find($id);

    return $this->render('article/single.html.twig', ["article" => $article]);
    return new Response();
  }

  /**
   * @Route("/admin/article/add", name="add")
   */
  public function add() {

    echo "Admin";

    return new Response();
  }

  /**
 * @Route("/article", name="article")
 */
  public function show()
  {
    $repository = $this->getDoctrine()->getRepository(Article::class);
    $contenu = $repository->getContenu();

    var_dump($contenu);

    return new Response();
      // $repository = $this->getDoctrine()->getRepository(Article::class);
      //     $articles = $repository->findBy(
      //       array(),
      //       array('id' => 'ASC'),
      //       3,
      //       0
      //     );
      //
      //     var_dump($articles);
      //     return $this->render('article/index.html.twig', [
      //         'articles' => $articles
      //     ]);
    }
}

?>
