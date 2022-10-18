<?php

namespace App\Controller;

use App\Entity\MicroPost;
use App\Repository\MicroPostRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicroPostController extends AbstractController
{
    #[Route('/micro-post', name: 'app_micro_post')]
    public function index(MicroPostRepository $posts): Response
    {


        return $this->render('micro_post/index.html.twig', [
            'posts' => $posts->findAll(),
        ]);


        // how to set data in the database
        // $microPost = new MicroPost();
        // $microPost->setTitle('this is the title');
        // $microPost->setTekst('this is the tekst for this micropost');
        // $microPost->setCreated(new DateTime());
        // $posts->save($microPost, true);

        

        // how to update data in the data base
        // $microPost = $posts->find(7);
        // $microPost->setTitle('hello planet');
        // $posts->save($microPost, true);


        // $posts->remove($microPost, true);
        // dd($posts->findAll());

    }

    #[Route('/micro-post/{post}', name: 'app_micro_post_showOne')]
    public function showOne(MicroPost $post): Response
    {
       return $this->render('micro_post/show.html.twig', [
        'post' => $post,
       ]);

    }
}
