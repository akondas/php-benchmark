<?php

declare(strict_types=1);

namespace PhpBenchmark\Math;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class PowBench
{
    /**
     * @Revs(1000000)
     * @Iterations(5)
     */
    public function benchPowFunction() : void
    {
        pow(7.6543, 3.1415);
    }

    /**
     * @Revs(1000000)
     * @Iterations(5)
     */
    public function benchExponentiationOperator() : void
    {
        7.6543 ** 3.1415;
    }
}
