<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;


class CreateBookController extends AbstractController
{

    /**
     * @Route("/createBook", name="createBook")
     */
    public function index(Request $request)
    {
        $book = new Book();
       
        $form = $this->createForm(BookType::class, $book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $file=$book->getImage();
            $file = $form->get('image')->getData();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            
            try {
                $file->move('public/uploads', $fileName);
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
    
            // Save
            $em = $this->getDoctrine()->getManager();
            $book->setImage($fileName);
            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('books');
        }

        return $this->render('createBook/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}