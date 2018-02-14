<?php
declare(strict_types=1);

namespace PhpBenchmark\Strict;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class InArrayBench
{
    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchInArray() : void
    {
        in_array(5, [1,2,3,4,5,6,7,8,9,10]);
    }

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchInArrayMixed() : void
    {
        in_array(5, [1,'2',3,4,'5',6,'7',8,'9',10]);
    }

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchInArrayStrict() : void
    {
        in_array(5, [1,2,3,4,5,6,7,8,9,10], true);
    }

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchInArrayStrictMixed() : void
    {
        in_array(5, [1,'2',3,4,'5',6,'7',8,'9',10], true);
    }
}