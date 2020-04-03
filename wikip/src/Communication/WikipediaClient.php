<?php

namespace App\Communication;
use Symfony\Component\HttpFoundation\RequestStack;

class WikipediaClient
{
    /**
     * @var RequestStack
     */
    protected $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        var_dump($requestStack);
        exit();

        $this->requestStack = $requestStack;

//        // Setup client configuration
//        $handlerStack = $config['handler'] ?? HandlerStack::create();
//        $config['handler'] = $handlerStack;
//        $config['base_uri'] = $baseUri;
//        $config['headers'] = [
//            'X-Temporary-Bob-ID' => 'fapi',
//            'X-Store' => $seller->getStoreCode(),
//        ];
//
//        // Forward request ID to other services
//        $handlerStack->push(Middleware::mapRequest(function (RequestInterface $request) {
//            $currentRequest = $this->requestStack->getCurrentRequest();
//
//            return $request->withHeader('X-Request-ID', $currentRequest->headers->get('X-Request-ID'));
//        }));
//
//        parent::__construct($config);
    }
}
