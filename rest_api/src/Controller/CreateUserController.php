<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CreateUserController extends AbstractController
{
    /**
     * @Route("/users", name="app_create_user", methods={"POST"})
     */
    public function index(Request $request, UserRepository $userRepository): JsonResponse
    {
        $reqBody = $request->getContent();
        $reqBody = json_decode($reqBody, true);

        $user = new User();
        $user->setFirstName($reqBody['first_name'])
             ->setLastName($reqBody['last_name'])
             ->setEmail($reqBody['email'])
             ->setBirthDate((new \DateTime())->setTimestamp($reqBody['birth_date']))
             ->setModified(new \DateTime())
             ->setCreated(new \DateTime());

        $userRepository->add($user, true);

        return $this->json([
            'id' => $user->getId(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'email' => $user->getEmail(),
            'birth_date' => $user->getBirthDate()->getTimestamp(),
            'created' => $user->getCreated()->getTimestamp(),
            'modified' => $user->getModified()->getTimestamp(),
        ]);
    }
}
