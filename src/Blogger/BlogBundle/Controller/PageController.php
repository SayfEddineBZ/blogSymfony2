<?php

// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Contact;
use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\ContactType;

class PageController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()
                ->getEntityManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                ->getLatestBlogs();

        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
                    'blogs' => $blogs
        ));
    }

    public function aboutAction() {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }

    public function contactAction() {
        $contact = new Contact();

        $form = $this->createForm(new ContactType(), $contact);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                        ->setSubject('Contact from Dhm blog')
                        ->setFrom($contact->getEmail())
                        ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                        ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig', array('contact' => $contact)));

                $this->get('mailer')->send($message);


                $this->get('session')->getFlashBag()->set('blogger-notice', 'Your contact was successfully sent. Thank you!');
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                //return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
            }
        }

        return $this->render('BloggerBlogBundle:Page:contact.html.twig', array(
                    'form' => $form->createView()
        ));
    }

}
