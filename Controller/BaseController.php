<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/24/17
 * Time: 4:24 PM
 */

namespace Narmafzam\ArchiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class BaseController
 * @package Narmafzam\ArchiveBundle\Controller
 */
class BaseController extends Controller
{
    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * BaseController constructor.
     *
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @return RouterInterface
     */
    public function getRouter(): RouterInterface
    {
        return $this->router;
    }

    protected function renderResponse($view, $parameters = array(), Response $response = null)
    {
        if ($this->container->has('templating')) {

            $content = $this->container->get('templating')->render($view, $parameters);
        } elseif ($this->container->has('twig')) {

            $content = $this->container->get('twig')->render($view, $parameters);
        } else {

            throw new \LogicException('You can not use the "render" method if the Templating Component or the Twig Bundle are not available.');
        }

        if (null === $response) {

            $response = new Response();
        }

        $response->setContent($content);

        return $response;

    }
}