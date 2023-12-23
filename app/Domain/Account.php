<?php

namespace App\Domain;

class Account
{

    public int $id;

    public string $name;

    public ?Account $parent;

    public array $children;

    //config

    //main admin

    //main user
}
