# PHP internals benchmark

My personal php internals benchmarks. :rocket:

To run:
```
vendor/bin/phpbench run --report=time --retry-threshold=1 
```

## InArray

Test strict mode in `in_array` function:

```
+-------------------------+---------+---------+--------+-------+
| subject                 | mode    | mean    | rstdev | diff  |
+-------------------------+---------+---------+--------+-------+
| benchInArray            | 0.053μs | 0.053μs | 0.41%  | 1.00x |
| benchInArrayMixed       | 0.094μs | 0.094μs | 0.51%  | 1.78x |
| benchInArrayStrict      | 0.066μs | 0.066μs | 0.48%  | 1.26x |
| benchInArrayStrictMixed | 0.078μs | 0.078μs | 0.41%  | 1.48x |
+-------------------------+---------+---------+--------+-------+
```
