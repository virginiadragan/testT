<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yiisoft\Http\Header;
use Yiisoft\Http\Method;
use Yiisoft\Http\Status;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Yii\View\ViewRenderer;
use App\Form\EchoForm;

class EchoController
{

    private ResponseFactoryInterface $responseFactory;
    private UrlGeneratorInterface $url;
    private ViewRenderer $viewRenderer;

    public function __construct(
        ResponseFactoryInterface $responseFactory,
        UrlGeneratorInterface $url,
        ViewRenderer $viewRenderer
    ) {
        $this->responseFactory = $responseFactory;
        $this->url = $url;
        $this->viewRenderer = $viewRenderer->withControllerName('echo');
    }

    public function say(EchoForm $form, ServerRequestInterface $request): ResponseInterface
    {
        $body = $request->getParsedBody();
        if (($request->getMethod() === Method::POST) && $form->load($body) && $form->validate()) {

            return $this->responseFactory
                ->createResponse(Status::FOUND)
                ->withHeader(Header::LOCATION, $this->url->generate('echo/say'));
        }

        return $this->viewRenderer->render('say', ['form' => $form]);
    }
}
