<?php

namespace Tensor\Benchmarks\Decompositions;

use Tensor\Matrix;

class LUBench
{
    /**
     * @var \Tensor\Matrix
     */
    protected $a;

    public function setUp() : void
    {
        $this->a = Matrix::uniform(500, 500);
    }

    /**
     * @Subject
     * @Iterations(5)
     * @BeforeMethods({"setUp"})
     * @OutputTimeUnit("seconds", precision=3)
     */
    public function lu() : void
    {
        $this->a->lu();
    }
}