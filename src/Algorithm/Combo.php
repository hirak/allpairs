<?php
namespace Hirak\AllPairs\Algorithm;

class Combo
{
    /**
     * nC2 の一覧を作成する
     *
     */
    public static function combine(array $variables)
    {
        $cnt = count($variables);

        if ($cnt <= 1) {
            throw new \InvalidArgumentException('$variables array must contain over 2 elements.');
        }

        if ($cnt <= 2) {
            return [$variables];
        }

        $combo = [];
        $car = array_shift($variables);
        foreach ($variables as $cdr) {
            $combo[] = [$car, $cdr];
        }

        return array_merge($combo, self::combine($variables));
    }
}
