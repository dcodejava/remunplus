<?php

use Mentordeveloper\Authentication\Middleware\Repository;
use Mentordeveloper\Authentication\Tests\Unit\DbTestCase;

class RepositoryTest extends DbTestCase  {

    protected $repository;

    public function setUp()
    {
        parent::setUp();
        $this->repository = new Repository();
    }

    /**
     * @test
     **/
    public function canGetAndSetOptions()
    {
        $key = "key";
        $value = "value";

        $this->repository->setOption($key, $value);

        $this->assertEquals($value, $this->repository->getOption($key));
     }
    
}
 