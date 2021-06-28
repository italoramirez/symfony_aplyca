<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/index", name="user_index", methods={"GET"})
     */
    // public function index(UserRepository $userRepository): Response
    public function index(UserRepository $userRepository): Response
    {
        // $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    //    $users = $userRepository->findAll(); 
    //    $data = [];

    //    foreach ($users as $user) {
    //         $data[] = [
    //             'id'         => $user->getId(),
    //             'first_name' => $user->getFirstName(),
    //             'last_name'  => $user->getLastName(),
    //             'email'      => $user->getEmail(),
                
    //         ];
    //    }
        // return new response('test');
        // return new JsonResponse($data, Response::HTTP_OK);
        // $response = new JsonResponse($data, Response::HTTP_OK);
        // return new JsonResponse($data, Response::HTTP_OK)
        //             ->headers->set('Content-Type', 'application/json')
        //             ->set('Access-Control-Allow-Origin', '*');

        // return new JsonResponse($data, Response::HTTP_OK, [
        //     'Access-Control-Allow_Origin' => '*'
        // ]);

        //$response->headers->set('Content-Type', 'application/json');

        // $response->headers->set('Access-control-Allow-Origin', '*');
        // $response->headers->set('Access-control-Allow-Origin', 'http://localhost:8080');

        // return $response;
    }

    /**
     * @Route("/new", name="user_new", methods={"GET", "POST"})
     */
    // public function new(Request $request): Response
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('role_admin');
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('post_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
        // $user = new User();

        // $first_name = $request->get('first_name');
        // $last_name  = $request->get('last_name');
        // $email      = $request->get('email');
        // $password   = $request->get('password');

        // $hash = password_hash($password, PASSWORD_BCRYPT);

        // $user->setFirstName($first_name); 
        // $user->setLastName($last_name);
        // $user->setEmail($email);
        // $user->setPassword($hash);

        // $entityManager = $this->getDoctrine()->getManager();
        // $entityManager->persist($user);
        // $entityManager->flush();

        // // return new JsonResponse($request->get('first_name'), Response::HTTP_CREATED);
        // return new JsonResponse('Usuario creado correctamente', Response::HTTP_CREATED); 
        // $response = new JsonResponse('Usuario creado correctamente', Response::HTTP_CREATED); 
        // // return new response('test');
        // // return new JsonResponse($data, Response::HTTP_OK);
        // // $response = new JsonResponse($data, Response::HTTP_OK);
        // // return new JsonResponse($data, Response::HTTP_OK)
        // //             ->headers->set('Content-Type', 'application/json')
        // //             ->set('Access-Control-Allow-Origin', '*');

        // // return new JsonResponse('Usuario ok', Response::HTTP_OK, [
        // //     'Access-Control-Allow_Origin' => '*'
        // // ]);

        // //$response->headers->set('Content-Type', 'application/json');

        // // $response->headers->set('Access-control-Allow-Origin', '*');
        // $response->headers->set('Access-control-Allow-Origin', 'http://localhost:8080');

        // return $response;
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(int $id): Response
    {
        // return $this->render('user/show.html.twig', [
        //     'user' => $user,
        // ]);
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);


            // $data  = [
            //     'id'         => $user->getId(),
            //     'first_name' => $user->getFirstName(),
            //     'last_name'  => $user->getLastName(),
            //     'email'      => $user->getEmail(),
                
            // ];
            
            if (!$user) {
                throw $this->createNotFoundException(
                    'No user found for id '.$id
                );
            }
            $data  = [
                'id'         => $user->getId(),
                'first_name' => $user->getFirstName(),
                'last_name'  => $user->getLastName(),
                'email'      => $user->getEmail(),
                
            ];

        return new JsonResponse($data, Response::HTTP_OK); 
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    // public function edit(Request $request, User $user): Response
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_update", methods={"PUT"})
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $user = new User();

        $user = $this->getDoctrine()
                    ->getRepository(User::class)
                    ->find($id);

        $first_name = $request->get('first_name');
        $last_name  = $request->get('last_name');
        $email      = $request->get('email');
        $password   = $request->get('password');

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $user->setFirstName($first_name); 
        $user->setLastName($last_name);
        $user->setEmail($email);
        $user->setPassword($hash);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse('Usuario actualizado correctamente', Response::HTTP_OK ); 
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        // if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
        //     $entityManager = $this->getDoctrine()->getManager();
        //     $entityManager->remove($user);
        //     $entityManager->flush();
        // }

        // return $this->redirectToRoute('user_index');

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();

            return new JsonResponse('Usuario eliminado correctamente', Response::HTTP_OK ); 
    }
}
