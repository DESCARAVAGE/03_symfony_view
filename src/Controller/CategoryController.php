<?php
// src/Controller/CategoryController.php
namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request, CategoryRepository $categoryRepository): Response
    {
        $category = new Category();
        $formCategory = $this->createForm(CategoryType::class, $category);
        $formCategory->handleRequest($request);
        if ($formCategory->isSubmitted() && $formCategory->isValid()) {
            $categoryRepository->add($category, true);  
            // Deal with the submitted data
            // For example : persiste & flush the entity
            // And redirect to a route that display the result
            return $this->redirectToRoute('category_index');
        }

        
        return $this->renderForm('category/new.html.twig', [
            'formCategory' => $formCategory,
        ]);

        // Alternative
        // return $this->render('category/new.html.twig', [
        //   'form' => $form->createView(),
        // ]);
    }

    #[Route('/{categoryName}', methods: ['GET'], name: 'show')]
    public function show(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository): Response
    {
        $category = $categoryRepository->findOneByName(['categoryName' => $categoryName]);
        if (!$category) {
            throw $this->createNotFoundException(
                'No categoryName with name : ' . $categoryName . ' found in categoryName\'s table.'
            );
        } else {
            $programs = $programRepository->findBy(['category' => $category]);
            return $this->render('category/show.html.twig', [
                'category' => $category,
                'programs' => $programs,
            ]);
        }
    }
}
