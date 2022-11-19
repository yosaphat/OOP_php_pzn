<?php 

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

//error

class FakeFacebook extends Facebook
{
    //error karena mengambil final function
    public function login(string $useraname, string $password): bool
    {
        return false; 
    }
}