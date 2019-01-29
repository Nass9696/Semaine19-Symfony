<?php
namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController{

    /**
     * @Route("/index", name="index_accueil")
     */
  public function accueil() {

    echo "hello";

    return new Response();
  }

    /**
     * @Route("/single/{id<\d+>}", name = "article")
     */
  public function single($id) {

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
          $articles = $repository->findAll();

          return $this->render('article/index.html.twig', [
              'articles' => $articles
          ]);
    }
}
 ?>
