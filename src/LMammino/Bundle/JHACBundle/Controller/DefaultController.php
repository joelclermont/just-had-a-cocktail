<?php

namespace LMammino\Bundle\JHACBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use LMammino\Bundle\JHACBundle\Entity\User;

class DefaultController extends Controller
{

    /**
     * @Route("/")
     * @Template()
     * @Method("GET")
     */
    public function indexAction()
    {
        return array();
    }

    /*
    * Dummy controller for FB login
    */
    public function loginCheckAction()
    {
        //intercepted by user provider
        return new Response();
    }

    /*
    * Dummy controller for FB login
    */
    public function logoutAction()
    {
        //intercepted by user provider
        return new Response();
    }

    /*
    * FB login errors view
    */
    public function loginAction(Request $request)
    {
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return new Response($error);
    }
}
