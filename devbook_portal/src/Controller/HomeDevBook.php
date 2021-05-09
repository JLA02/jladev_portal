<?php
namespace App\Controller;

use App\Service\CommonSettings;
use App\Entity\Curriculum;
use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class HomeDevBook extends AbstractController
{
    /**
     *@Route("/")
     */
     public function home(CommonSettings $commonSettings, EntityManagerInterface $entityMAnager, Request $request, \Swift_Mailer $mailer)
     {
        $currentAuthor  = $commonSettings->GetAuthorFirstName() . ' ' . $commonSettings->GetAuthorLastName();
        $currentYear    = $commonSettings->GetCurrentYear();
        $appTitle       = $commonSettings->GetAppName();
        $timelines      = $entityMAnager->getRepository(Curriculum::class)->findAll();
        $form = $this->createForm(ContactType::class, null, ['attr'=> ['id'=>'contactForm']]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            //send email
            $contactFormData = $form->getData();

            dump($contactFormData);

            if($contactFormData['check'] == true)
            {
               $subject = 'Email envoyé depuis jla-dev.com par '.$contactFormData['name'].'.';
               $message = (new \Swift_Message($subject))
               ->setFrom($contactFormData['from'])
               ->setTo('contact@jla-dev.com')
               ->setBody($contactFormData['body'], 'text/plain');
               $mailer->send($message);
            }
            //app_homedevbook_home
           return $this->redirectToRoute('app_homedevbook_home');
        }

        return $this->render('index.html.twig', ["app_title" => $appTitle,"copyright" => $currentAuthor, "year" => $currentYear, "timelines" => $timelines, "form" => $form->createView() ]);
     }
}
?>