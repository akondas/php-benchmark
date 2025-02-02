<?php

declare(strict_types=1);

namespace PhpBenchmark\Reflection;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class ShortClassNameBench
{
    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchBasename() : void
    {
        basename(str_replace('\\', '/', get_class(new SomeService())));
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchReflection() : void
    {
        (new \ReflectionClass(new SomeService()))->getShortName();
    }
}
