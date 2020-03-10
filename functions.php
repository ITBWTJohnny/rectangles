<?php

/**
 * @param int $n
 * @param int $m
 * @return int
 * @throws Exception
 */
function countRectangles(int $n, int $m): int
{
    if ($n < 2 || $m < 2) {
        throw new Exception('Count of points cant be lass than 2');
    }

    $arithmeticProgressionN = computationArithmeticProgression(--$n);
    $arithmeticProgressionM = computationArithmeticProgression(--$m);

    return $arithmeticProgressionN * $arithmeticProgressionM;
}

/**
 * ((2 * a1 + d(n - 1)) / 2) * n
 * a1 - start position = 1
 * d - step = 1
 * n - count of elements for computation of progression
 *
 * @param int $n
 * @return int
 */
function computationArithmeticProgression(int $n)
{
    return ((2 + ($n - 1)) / 2) * $n;
}