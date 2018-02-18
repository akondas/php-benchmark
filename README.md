# PHP internals benchmark

My personal php internals benchmarks. :rocket:
You do not believe? check on your own:

To run:
```
composer install
vendor/bin/phpbench run path/to/benchmark --report=time --retry-threshold=1 
```

## `in_array` strict mode

Test strict mode in `in_array` function:

```
vendor/bin/phpbench run benchmarks/Strict/InArrayBench.php --report=time --retry-threshold=1

+-------------------------+---------+---------+--------+-------+
| subject                 | mode    | mean    | rstdev | diff  |
+-------------------------+---------+---------+--------+-------+
| benchInArray            | 0.053μs | 0.053μs | 0.41%  | 1.00x |
| benchInArrayMixed       | 0.094μs | 0.094μs | 0.51%  | 1.78x |
| benchInArrayStrict      | 0.066μs | 0.066μs | 0.48%  | 1.26x |
| benchInArrayStrictMixed | 0.078μs | 0.078μs | 0.41%  | 1.48x |
+-------------------------+---------+---------+--------+-------+
```

## Check is array empty

```
vendor/bin/phpbench run benchmarks/Array/EmptyArrayBench.php --report=time --retry-threshold=1

+------------------+---------+---------+--------+-------+
| subject          | mode    | mean    | rstdev | diff  |
+------------------+---------+---------+--------+-------+
| benchEmpty       | 0.027μs | 0.027μs | 0.41%  | 1.00x |
| benchCount       | 0.048μs | 0.048μs | 0.54%  | 1.75x |
| benchCountStrict | 0.051μs | 0.051μs | 0.26%  | 1.87x |
| benchComparision | 0.028μs | 0.028μs | 0.37%  | 1.01x |
+------------------+---------+---------+--------+-------+

```
