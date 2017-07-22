<?php

// Defines a public API - a contract that any implementation HAS to abide by.
// However, no logic will ever be stored in an interface. (VERY cheap to use!)
interface Provider {
    public function getAuthorizeUrl();
}

// You must 'force' a contract by creating abstract methods.
// However, this relies heavily on inheritance, which isn't always the best idea.
abstract class AbstractProvider {

    abstract protected function getAuthorizationUrl();
}

class FacebookProvider implements Provider {

    protected function getAuthorizationUrl()
    {
        return '';
    }
}