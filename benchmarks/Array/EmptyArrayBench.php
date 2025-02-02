<?php

declare(strict_types=1);

namespace PhpBenchmark;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class EmptyArrayBench
{
    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchEmpty() : void
    {
        empty([]);
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchCount() : void
    {
        count([]) == 0;
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchCountStrict() : void
    {
        count([]) === 0;
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchComparision() : void
    {
        [] === [];
    }
}
