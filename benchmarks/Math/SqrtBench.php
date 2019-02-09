<?php

declare(strict_types=1);

namespace PhpBenchmark\Math;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class SqrtBench
{
    /**
     * @Revs(1000000)
     * @Iterations(5)
     */
    public function benchSqrtFunction() : void
    {
        sqrt(3.1415);
    }

    /**
     * @Revs(1000000)
     * @Iterations(5)
     */
    public function benchExponentiationOperator() : void
    {
        3.1415 ** .5;
    }
}
