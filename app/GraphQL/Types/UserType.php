<?php

namespace App\GraphQL\Types;

use App\Domain\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user',
        'model' => User::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the user'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of user'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of user'
            ],
            'createdAt' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The createdAt of user',
                'resolve' => function ($root, $args) {
                    return $root->createdAt->format('Y-m-d H:i:s');
                }
            ],
            'updatedAt' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The updatedAt of user',
                'resolve' => function ($root, $args) {
                    return $root->updatedAt->format('Y-m-d H:i:s');
                }
            ],
            /*
            'memberships' => [
                'type' => Type::listOf(GraphQL::type('membership')),
                'description' => 'The memberships of user'
            ],
            'tenants' => [
                'type' => Type::listOf(GraphQL::type('tenant')),
                'description' => 'The tenants of user'
            ],
            'permissions' => [
                'type' => Type::listOf(GraphQL::type('permission')),
                'description' => 'The permissions of user'
            ],
            'permission_groups' => [
                'type' => Type::listOf(GraphQL::type('permission_group')),
                'description' => 'The permission_groups of user'
            ],
            */
        ];
    }

}
