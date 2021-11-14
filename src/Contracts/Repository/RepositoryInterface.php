<?php


namespace App\HystrixAppBundle\Contracts\Repository;

interface RepositoryInterface
{
    public function find(int|string $id);
}