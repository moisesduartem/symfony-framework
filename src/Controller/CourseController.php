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
     * @Route("/", name="index")
     */
    public function index()
    {
        $courses = $this->getDoctrine()->getRepository(Course::class);

        return $this->json([
            'data' => $courses
        ]);
    }
}
