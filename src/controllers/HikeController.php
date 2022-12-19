<?php
declare(strict_types=1);


class HikeController
{
    private Hike $productModel;

    public function __construct()
    {
        $this->productModel = new Hike();
    }

    public function index(): void
    {
        $hikes = $this->productModel->findAll();

        // include 'views/includes/header.view.php';
        include 'views/index.view.php';
        // include 'views/includes/footer.view.php';
    }

    public function show(string $codeTwo): void
    {
        if (empty($codeTwo)) {
            throw new Exception("Product code was not provided.");
        }

        $hike = $this->productModel->find($codeTwo);

        // include 'views/includes/header.view.php';
        include 'views/hike.view.php';
        // include 'views/product.view.php';
        // include 'views/includes/footer.view.php';
    }
}