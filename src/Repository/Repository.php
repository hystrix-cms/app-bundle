<?php


namespace App\HystrixAppBundle\Repository;


use App\HystrixAppBundle\Contracts\Repository\RepositoryInterface;

/**
 * @template T
 */
final class Repository implements RepositoryInterface
{
    /**
     * @var T
     */
    protected $model;

    public function find(int|string $id)
    {

    }
}