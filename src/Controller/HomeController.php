<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index( EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder)
    {
        //update password
        $plainPassword = "admin123";
        $user = $entityManager->getRepository(User::class)->findOneBy(['username' => 'admin']);
        $encoded = $encoder->encodePassword($user, $plainPassword);
        $user->setPassword($encoded);
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
