<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PostsFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'gt', 'lt'],
        'authorId' => ['eq'],
        'created_at' => ['eq', 'gt', 'lt']
    ]; 

    protected $columnMap = [
        'authorId' => 'author'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<'
    ];
}
