<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;

class BookListController extends AbstractController
{
  



    /**
     * @Route("/books", name="books")
     */
    public function index(): Response
    {
        $Books = [
            'Apple' => '$1.16 trillion USD',
            'Samsung' => '$298.68 billion USD',
            'Microsoft' => '$1.10 trillion USD',
            'Alphabet' => '$878.48 billion USD',
            'Intel Corporation' => '$245.82 billion USD',
            'IBM' => '$120.03 billion USD',
            'Facebook' => '$552.39 billion USD',
            'Hon Hai Precision' => '$38.72 billion USD',
            'Tencent' => '$3.02 trillion USD',
            'Oracle' => '$180.54 billion USD',
        ];
        $books = $this->getDoctrine()->getRepository(Book::class)->findAll();

        
            
        

        return $this->render('books/index.html.twig', [
            'books' => $books,
        ]);
    }


    
    /**
     * @Route("/favoris", name="app_favoris")
     */
    public function favoris(Request $request) 
    {
        $user = new User();

        $id = $this->getRequest()->get('id');
        $em = $this->getDoctrine()->getManager();
            $user->add($id);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('books');
           
            return $this->render('books/index.html.twig', [
                'books' => $books,
            ]);
    }


}
