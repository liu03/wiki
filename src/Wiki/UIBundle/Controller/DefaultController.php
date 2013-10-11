<?php

namespace Wiki\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Wiki\UIBundle\Entity\Category;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if($request->getMethod()=='POST') {
            $gender = $this->getDoctrine()
                ->getRepository('WikiUIBundle:Gender')
                ->find(1);
            $article = new Category();
            $article->setLabel('A Foo Bar');
            $article->setLevel(3);
            $article->setCreatedAt(new \DateTime());
            $article->setDescription($request->request->get('des'));
            $article->setStatus(1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

        }

        return $this->render('WikiUIBundle:Default:index.html.twig', array('name' => 'shit'));
    }

    public function articleAction(Request $request, $name)
    {
            $article = $this->getDoctrine()
                ->getRepository('WikiUIBundle:Category')
                ->findOneByLabel(preg_replace('/\s+/','_',$name));


        return $this->render('WikiUIBundle:Default:article.html.twig', array('article' => $article));
    }
}
