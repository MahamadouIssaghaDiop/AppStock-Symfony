<?php
// src/Security/AccessDeniedHandler.php
namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        // ...
        //return $request->getSession()->getFlashBag()->add('note', 'You have to login in order to access this page.');

        //return new RedirectResponse($this->urlGenerator->generate('accessDenied'));
        //return new Response($content, 403);
        return new Response("<div class='lock'></div>
        <div class='message'>
          <h1>Access to this page is restricted</h1>
          <p>Please check with the site admin if you believe this is a mistake.</p>
        </div>", 403);

    }
}