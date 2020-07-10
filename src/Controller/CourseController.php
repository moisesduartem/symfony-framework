<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Course;

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
        $courses = $this->getDoctrine()->getRepository(Course::class);

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
    public function create()
    {

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
