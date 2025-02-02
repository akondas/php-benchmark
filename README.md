# PHP internals benchmark

My personal php internals benchmarks. :rocket:
You do not believe? check on your own:

To run:
```
composer install
vendor/bin/phpbench run benchmarks/__BenchmarkName__ --report=time --retry-threshold=1 
```

## Table of Contents

 * Array
    * [Check is array empty](#check-is-array-empty)
    * [json_decode vs unserialize](#json_decode-unserialize)
    * [`isset` vs `in_array`](#isset-vs-in_array)
 * Math
    * [Exponential expression](#exponential-expression)
    * [Square root](#square-root)
 * Reflection
   * [Short class name](#short-class-name)
 * Strict checking
    * [`in_array` strict mode](#in_array-strict-mode)


## Benchmark results

### Check is array empty

How to fast check if array is empty. Remember that `empty` can lead to confusion results (automatic cast type).

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

### `json_decode` vs `unserialize`

Faster way to decompress serialized arrays

```
vendor/bin/phpbench run benchmarks/Array/JsonDecodeBench.php --report=time --retry-threshold=1 

suite: 1343ab2c7ea88c1f4e096d667ee3e7fc90c7fbc5, date: 2020-01-14, stime: 10:03:37
+------------------+---------+---------+--------+-------+
| subject          | mode    | mean    | rstdev | diff  |
+------------------+---------+---------+--------+-------+
| benchJsonDecode  | 7.687μs | 7.697μs | 0.42%  | 3.58x |
| benchUnserialize | 2.155μs | 2.150μs | 0.33%  | 1.00x |
+------------------+---------+---------+--------+-------+
```

### `isset` vs `in_array`

Find value in array (1000 elements).

```
vendor/bin/phpbench run benchmarks/Array/IsSetVsInArray.php --report=time --retry-threshold=1

+--------------+---------+---------+--------+--------+
| subject      | mode    | mean    | rstdev | diff   |
+--------------+---------+---------+--------+--------+
| benchIsSet   | 0.095μs | 0.095μs | 0.45%  | 1.00x  |
| benchInArray | 3.289μs | 3.294μs | 0.32%  | 34.51x |
+--------------+---------+---------+--------+--------+

```

### Exponential expression

`pow` function vs `**` operator.

```
vendor/bin/phpbench run benchmarks/Math/PowBench.php  --report=time --retry-threshold=1

+-----------------------------+---------+---------+--------+-------+
| subject                     | mode    | mean    | rstdev | diff  |
+-----------------------------+---------+---------+--------+-------+
| benchPowFunction            | 0.090μs | 0.090μs | 0.40%  | 3.60x |
| benchExponentiationOperator | 0.025μs | 0.025μs | 0.42%  | 1.00x |
+-----------------------------+---------+---------+--------+-------+
```

### Square root

`sqrt` function vs `** .5` operator

```
vendor/bin/phpbench run benchmarks/Math/SqrtBench.php  --report=time --retry-threshold=1 

+-----------------------------+---------+---------+--------+-------+
| subject                     | mode    | mean    | rstdev | diff  |
+-----------------------------+---------+---------+--------+-------+
| benchSqrtFunction           | 0.038μs | 0.038μs | 0.56%  | 1.53x |
| benchExponentiationOperator | 0.025μs | 0.025μs | 0.53%  | 1.00x |
+-----------------------------+---------+---------+--------+-------+
```

### `in_array` strict mode

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

### `match` vs array map

Test if match is faster than using array key to match value:

```
vendor/bin/phpbench run benchmarks/Syntax/MatchVsArrayMapBench.php --report=time --retry-threshold=1

+---------------+---------+---------+--------+-------+
| subject       | mode    | mean    | rstdev | diff  |
+---------------+---------+---------+--------+-------+
| benchMatch    | 0.841μs | 0.838μs | 0.63%  | 1.01x |
| benchArrayMap | 0.829μs | 0.828μs | 0.35%  | 1.00x |
+---------------+---------+---------+--------+-------+
```

### Short class name

Test if reflection short class name is faster than using `get_class` and string manipulation:

```
vendor/bin/phpbench run benchmarks/Reflection/ShortClassNameBench.php --report=time --retry-threshold=2 

+-----------------+---------+---------+--------+
| subject         | mode    | mean    | rstdev |
+-----------------+---------+---------+--------+
| benchBasename   | 0.184μs | 0.185μs | ±1.19% |
| benchReflection | 0.145μs | 0.145μs | ±0.22% |
+-----------------+---------+---------+--------+

```
