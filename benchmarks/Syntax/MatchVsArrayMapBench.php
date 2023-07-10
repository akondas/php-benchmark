<?php

declare(strict_types=1);

namespace PhpBenchmark;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class MatchVsArrayMapBench
{
    private const MAP = [
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3',
        'key4' => 'value4',
        'key5' => 'value5',
        'key6' => 'value6',
        'key7' => 'value7',
        'key8' => 'value8',
        'key9' => 'value9',
        'key10' => 'value10',
        'key11' => 'value11',
        'key12' => 'value12',
        'key13' => 'value13',
        'key14' => 'value14',
        'key15' => 'value15',
        'key16' => 'value16',
        'key17' => 'value17',
        'key18' => 'value18',
        'key19' => 'value19',
        'key20' => 'value20'
    ];

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchMatch() : void
    {
        $value = random_int(1, 20);

        $match = match ('key'.$value) {
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
            'key4' => 'value4',
            'key5' => 'value5',
            'key6' => 'value6',
            'key7' => 'value7',
            'key8' => 'value8',
            'key9' => 'value9',
            'key10' => 'value10',
            'key11' => 'value11',
            'key12' => 'value12',
            'key13' => 'value13',
            'key14' => 'value14',
            'key15' => 'value15',
            'key16' => 'value16',
            'key17' => 'value17',
            'key18' => 'value18',
            'key19' => 'value19',
            'key20' => 'value20'
        };
    }

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchArrayMap() : void
    {
        $value = random_int(1, 20);

        $match = self::MAP['key'.$value];
    }
}
