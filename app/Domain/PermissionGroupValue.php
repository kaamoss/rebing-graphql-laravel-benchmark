<?php

namespace App\Domain;

class PermissionGroupValue
{

            public int $id;

            public PermissionGroup $permissionGroup;

            public Permission $permission;

            public bool $value;

            public \DateTime $setAt;

            public Membership $setBy;

            public function __construct(int $id, PermissionGroup $permissionGroup, Permission $permission, bool $value, \DateTime $setAt, Membership $setBy)
            {
                $this->id = $id;
                $this->permissionGroup = $permissionGroup;
                $this->permission = $permission;
                $this->value = $value;
                $this->setAt = $setAt;
                $this->setBy = $setBy;
            }

}
