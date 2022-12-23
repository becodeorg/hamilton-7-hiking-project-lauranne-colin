<?php
declare(strict_types=1);


class AddhikeControllers{

    private Add $addModel;

    public function __construct()
    {
        $this->addModel = new Add;
    }

    public function addhikes(array $input): void
    {
        
        if (empty($input['hikeName']) ||empty($input['distance']) || empty($input['elevation']) || empty($input['hikeDescription'])|| empty($input['duration'])|| empty($input['update'])) {
            throw new Exception('Form data not validated.');
        }

        $hikeName= htmlspecialchars($input['hikeName'],);
        $hikeDate= date('Y-M-D');
        $duration=htmlspecialchars($input['duration']);
        $distance= htmlspecialchars($input['distance']);
        $elevation = htmlspecialchars($input['elevation']);
        $hikeDescription = htmlspecialchars($input['hikeDescription']);
        $update = htmlspecialchars($input['update']);

        $this->addModel->addHike( $hikeName,$hikeDate,$duration,$distance,$elevation,$hikeDescription,$update);

        http_response_code(302);
        header('location: /');
    }
    public function showAddHikes(): void
    {
        include 'views/addHikes.view.php';
       
    }}