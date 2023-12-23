<?php

namespace App\GraphQL\Queries;

use App\Domain\User;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;

class UsersQuery extends Query
{
    protected $attributes = [
        'name' => 'users',
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return Type::nonNull(Type::listOf(Type::nonNull(GraphQL::type('User'))));
    }

    public function args(): array
    {
        return [];

    }

    public function resolve($root, $args)
    {
        return $this->resolveStaticData();
    }

    protected function resolveStaticData(int $num=100): array {
        $data = [];
        for($i=0; $i<$num; $i++) {
            $ts1 = mt_rand(1262055681,1703317896);
            $ts2 = mt_rand(1262055681,1703317896);
            if($ts1 > $ts2) {
                $tmp = $ts1;
                $ts1 = $ts2;
                $ts2 = $tmp;
            }
            $data[] = new User(1000+$i, 'User '.$i, 'user'.$i.'@example.com', \DateTime::createFromFormat('U', $ts1), \DateTime::createFromFormat('U', $ts2));
        }
        return $data;
    }
}
