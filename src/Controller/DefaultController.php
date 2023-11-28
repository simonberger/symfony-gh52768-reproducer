<?php

namespace App\Controller;

use App\Service\ExampleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function __construct(private readonly ExampleService $exampleService)
    {}
}