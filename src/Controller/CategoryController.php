<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categories', name: 'categories_')]
class CategoryController extends AbstractController
{
    #[Route('/{slug}', name: 'list')]
    public function list(Category $category): Response
    {
        //On va chercher la liste des produits de la catégorie
        $products = $category->getProducts();

        return $this->render('category/list.html.twig', compact('category', 'products'));
    }

    /* Syntaxe alternative
    return $this->render('categories/list.html.twig', [
        'category' => $category,
        'products' => $products
     ]);*/
}
