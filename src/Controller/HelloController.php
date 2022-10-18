<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

private array $messages = [
    ['message' => 'hello', 'created' => '2022/08/12'],
    ['message' => 'hi', 'created' => '2022/07/12'],
    ['message' => 'bye!', 'created' => '2021/05/12']
];

    #[Route('/', name: 'app_index')]
    public function index() : Response
    {
        // return new Response(implode(',', $this->messages));
        return $this->render('hello/index.html.twig',
        ['messages' => $this->messages]);
    }

    #[Route('/messages/{id<\d+>}', name: 'app_showOne')]
    public function showOne($id): Response
{
    return $this->render(
        'hello/showOne.html.twig',
    [
        'message' => $this->messages[$id]
    ]       
    );
    // return new Response($this->messages[$id]);
}
}