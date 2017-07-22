<?php namespace Acme;

class AuthController implements RespondsToUserRegistration{

//    public function register(RegisterUser $registration)
//    {
//        $registration->execute();
//    }

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register()
    {
        $this->registration->execute([], $this);
    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully. redirect somewhere');
    }

    public function userRegisterdFailed()
    {
        var_dump('created unsuccessfully. redirect back.');
    }
}