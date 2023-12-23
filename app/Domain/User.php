<?php

namespace App\Domain;

class User
{

    public int $id;

    public string $name;

    public string $email;

    public \DateTime $createdAt;

    public \DateTime $updatedAt;
    //cognito?

    public function __construct(int $id, string $name, string $email, \DateTime $createdAt, \DateTime $updatedAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

}
