<?php

namespace App\Domain;

class PermissionGroup
{

        public int $id;

        public string $name;

        public Account $account;

        public array $permissionValues;

        public function __construct(int $id, string $name, array $permissions)
        {
            $this->id = $id;
            $this->name = $name;
            $this->permissions = $permissions;
        }

}
