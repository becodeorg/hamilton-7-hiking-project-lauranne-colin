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

        include 'views/includes/header.view.php';
        include 'views/index.view.php';
        include 'views/includes/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Product code was not provided.");
        }

        $hike = $this->productModel->find($code);

        include 'views/includes/header.view.php';
        include 'views/hike.view.php';
        include 'views/includes/footer.view.php';
    }
}