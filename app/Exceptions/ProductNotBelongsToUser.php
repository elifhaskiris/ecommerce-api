<?php

namespace App\Exceptions;

use Exception;
use function GuzzleHttp\Promise\all;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
        return ['errors'=> 'Product Not Belongs To User'];
    }
}
