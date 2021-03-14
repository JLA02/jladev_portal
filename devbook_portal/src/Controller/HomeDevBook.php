<?php
namespace App\Controller;

use App\Service\CommonSettings;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeDevBook extends AbstractController
{
    /**
     *@Route("/")
     */
     public function home(CommonSettings $commonSettings)
     {
         $currentAuthor = $commonSettings->GetAuthorFirstName() . ' ' . $commonSettings->GetAuthorLastName();
         $currentYear   = $commonSettings->GetCurrentYear();
         $appTitle      = $commonSettings->GetAppName();

         return $this->render('index.html.twig', ["app_title" => $appTitle,"copyright" => $currentAuthor, "year" => $currentYear ]);
     }
}
?>