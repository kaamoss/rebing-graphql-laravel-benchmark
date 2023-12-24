<?php

namespace App\Domain;

class Membership
{

    public int $id;

    public Account $account;

    public User $user;

    public array $permissionGroups;

    public function __construct(int $id, Account $account, User $user, array $permissionGroups)
    {
        $this->id = $id;
        $this->account = $account;
        $this->user = $user;
        $this->permissionGroups = $permissionGroups;
    }
}
