<?php

namespace App\Controller;

use DateTime;
use App\Entity\MicroPost;
use App\Repository\MicroPostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class MicroPostController extends AbstractController
{
    #[Route('/micro-post', name: 'app_micro_post')]
    public function index(MicroPostRepository $posts): Response
    {





        // how to set data in the database
        // $microPost = new MicroPost();
        // $microPost->setTitle('this is the title');
        // $microPost->setTekst('this is the tekst for this micropost');
        // $microPost->setCreated(new DateTime());
        // $posts->save($microPost, true);

        

        // how to update data in the data base
        $microPost = $posts->find(6);
        $microPost->setTitle('hello world');
        $posts->save($microPost, true);


        // $posts->remove($microPost, true);
        // dd($posts->findAll());

        return $this->render('micro_post/index.html.twig', [
            'posts' => $posts->findAll(),
        ]);

    }

    #[Route('/micro-post/{post}', name: 'app_micro_post_showOne')]
    public function showOne(MicroPost $post): Response
    {
       return $this->render('micro_post/show.html.twig', [
        'post' => $post,
       ]);

    }

    #[Route('/micro-post/add', name: 'app_micropost_add', priority:2)]
    public function add(Request $request, MicroPostRepository $posts): Response
    {
        $microPost = new MicroPost();

        $form = $this->createFormBuilder($microPost)
            ->add('title')
            ->add('tekst')
            ->add('submit', SubmitType::class, ['label' => 'save'])
            ->getForm();

            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) { 
                $post = $form->getData();
                $post->setCreated(new dateTime());
                $posts->save($post, true);

                // add flash
                $this->addFlash('success', 'your post has been added');
                // redirect
                return $this->redirectToRoute('app_micro_post');
            }

            return $this->renderForm('micro_post/add.html.twig',
            [
                'form' => $form
            ]);


    }
}
