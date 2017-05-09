<?php
/**
 * Created by PhpStorm.
 * User: Yohana
 * Date: 4/27/2017
 * Time: 10:49 AM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\TeacherProfile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class PianoController extends Controller
{

    /**
     * @Route("/teacher/new")
     */
   public function  newAction()
   {
       //$user = $this->get('security.context')->getToken()->getUser();
       $teacher = new TeacherProfile();
       //$teacher->setUser($user);
       $teacher->setAbout('Cornet Teacher');


   }

    /**
     * @Route("/about",name="about")
     */
    public function aboutAction()
    {
        return $this->render('about.html.twig');
    }

    /**
     * @Route("/lessons",name="lessons")
     */

    public function lessonsAction()
    {
        return $this->render('lessons.html.twig');
    }

    /**
     * @Route("/blog",name="blog")
     */

    public function blogAction()
    {
        return$this->render('blog.html.twig');
    }

    /**
     * @Route("/teacher",name="teacher")
     */
    public function teacherAction()
    {
        return$this->render('teacher.html.twig');
    }
}