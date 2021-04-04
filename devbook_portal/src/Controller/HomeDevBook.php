<?php
namespace App\Controller;

use App\Service\CommonSettings;
use App\Entity\Curriculum;

//use Doctrine\DBAL\Driver\Connection;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

class HomeDevBook extends AbstractController
{
    /**
     *@Route("/")
     */
     public function home(CommonSettings $commonSettings, EntityManagerInterface $entityMAnager)
     {
         $currentAuthor = $commonSettings->GetAuthorFirstName() . ' ' . $commonSettings->GetAuthorLastName();
         $currentYear   = $commonSettings->GetCurrentYear();
         $appTitle      = $commonSettings->GetAppName();

        $timelines = $entityMAnager->getRepository(Curriculum::class)->findAll();

        return $this->render('index.html.twig', ["app_title" => $appTitle,"copyright" => $currentAuthor, "year" => $currentYear, "timelines" => $timelines ]);
     }
}
?>