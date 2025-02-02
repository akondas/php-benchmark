<?php

declare(strict_types=1);

namespace PhpBenchmark\PHPUnit;

use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/**
 * @BeforeMethods({"init"})
 */
final class AssertBench extends TestCase
{
    public function init(): void
    {
        require __DIR__.'/../../vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchAssertThis() : void
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchAssertSelf() : void
    {
        self::assertEquals(1, 1);
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchAssertStatic() : void
    {
        static::assertEquals(1, 1);
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchAssertFunction() : void
    {
        \assertEquals(1, 1);
    }

    /**
     * @Revs(100000)
     *
     * @Iterations(5)
     */
    public function benchAssertStaticClass() : void
    {
        Assert::assertEquals(1, 1);
    }
}
