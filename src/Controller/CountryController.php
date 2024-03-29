<?php

namespace App\Controller;

use App\Entity\Country;
use App\Entity\State;
use App\Form\CountryType;
use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/country")
 */
class CountryController extends AbstractController
{
    /**
     * @Route("/", name="country_index", methods={"GET"})
     */
    public function index(CountryRepository $countryRepository):  Response
    {
        // return $this->render('country/index.html.twig', [
        //     'countries' => $countryRepository->findAll(),
        // ]);

        $countrys = $countryRepository->findAll(); 
        $data = [];
 
        foreach ($countrys as $country) {
             $data[] = [
                 'id'      => $country->getId(),
                 'country' => $country->getCountry(),
                 'state'   => $country->getState()->getState(),
                 
             ];
        }
         // return new response('test');
         return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/new", name="country_new", methods={"GET","POST"})
     */
    public function new(Request $request): JsonResponse
    {
        // $country = new Country();
        // $form = $this->createForm(CountryType::class, $country);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $entityManager = $this->getDoctrine()->getManager();
        //     $entityManager->persist($country);
        //     $entityManager->flush();

        //     return $this->redirectToRoute('country_index');
        // }

        // return $this->render('country/new.html.twig', [
        //     'country' => $country,
        //     'form' => $form->createView(),
        // ]);

        $country = new Country();
        $countryName = $request->get('country');
        $country->setCountry($countryName);
        

        $state = new State();
        $stateName = $request->get('state');
        $state->setState($stateName);

        $country->setState($state);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($country);
        $entityManager->persist($state);
        $entityManager->flush();

        // return new JsonResponse($request->get('first_name'), Response::HTTP_CREATED);
        return new JsonResponse('Recurso creado correctamente', Response::HTTP_CREATED); 
    }

    /**
     * @Route("/{id}", name="country_show", methods={"GET"})
     */
    public function show(Country $country): Response
    {
        return $this->render('country/show.html.twig', [
            'country' => $country,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="country_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Country $country): Response
    {
        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('country_index');
        }

        return $this->render('country/edit.html.twig', [
            'country' => $country,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="country_delete", methods={"POST"})
     */
    public function delete(Request $request, Country $country): Response
    {
        if ($this->isCsrfTokenValid('delete'.$country->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($country);
            $entityManager->flush();
        }

        return $this->redirectToRoute('country_index');
    }
}
