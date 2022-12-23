<?php
declare(strict_types=1);


class TagController
{
    private Tag $TagModel;

    public function __construct()
    {
        $this->TagModel = new Tag();
    }

    public function tagwhere(): void
    {
        $tags = $this->TagModel->displayTag();

        include 'views/index.view.php';
        
    }

    public function showTag(string $codeTag): void
    {
        if (empty($codeTag)) {
            throw new Exception("Tag code was not provided.");
        }

        $tag = $this->TagModel->findTag($codeTag);

        include 'views/tag.view.php';
      
    }

    public function showAllTag(string $codeTag2): void
    {
        if (empty($codeTag2)) {
            throw new Exception("Tag code was not provided.");
        }

        $tag2 = $this->TagModel->displayOneTag($codeTag2);
        

        include 'views/tag.view.php';
    
    }
}