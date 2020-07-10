<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Course;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/courses", name="course_")
 */

class CourseController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index()
    {
        $courses = $this->getDoctrine()->getRepository(Course::class)->findAll();

        return $this->json([
            'data' => $courses
        ]);
    }

    /**
     * @Route("/{courseId}", name="show", methods={"GET"})
     */
    public function show($courseId)
    {

    }
    /**
     * @Route("/", name="create", methods={"POST"})
     */
    public function create(Request $request)
    {
        $data = $request->request->all();

        $course = new Course();
        $course->setName($data['name']);
        $course->setDescription($data['description']);
        $course->setSlug($data['slug']);
        $course->setCreatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
        $course->setUpdatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));

        $doctrine = $this->getDoctrine()->getManager();

        $doctrine->persist($course);
        $doctrine->flush();

        return $this->json([
            'data' => 'Curso criado com sucesso!'
        ]);
    }
    /**
     * @Route("/{courseId}", name="update", methods={"PUT", "PATCH"})
     */
    public function update($courseId)
    {

    }
    /**
     * @Route("/{courseId}", name="delete", methods={"DELETE"})
     */
    public function delete($courseId)
    {

    }

}
