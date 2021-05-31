<?php

declare(strict_types=1);

namespace PhpBenchmark;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @BeforeMethods({"init"})
 */
final class IsSetVsInArray
{
    private array $array;

    public function init(): void
    {
        for ($i = 0; $i < 1000; ++$i) {
            $keyValue = 'key-'.$i;
            $this->array[$keyValue] = $keyValue;
        }
    }

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchIsSet() : void
    {
        isset($this->array['key-500']);
    }

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchInArray() : void
    {
        in_array('key-500', $this->array, true);
    }
}
