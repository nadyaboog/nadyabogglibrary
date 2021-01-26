<?php namespace Bogdanova;

use core\EquationInterface;

Class QuEquation extends Equation implements EquationInterface
{

    protected function dis($a, $b, $c)
    {
        $x = ($b ** 2) - 4 * $a * $c;
        return $x;
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @return array|null
     */
    public function solve($a, $b, $c):array
    {
        $x = $this->dis($a, $b, $c);
        if ($a == 0) {
            return $this->one_solve($b, $c);
        }
        MyLog::log("Это квадратное уравнение");
        if ($x > 0) {
            return $this->X = array(
                -($b + sqrt($b ** 2 - 4 * $a * $c) / 2 * $a),
                -($b - sqrt($b ** 2 - 4 * $a * $c) / 2 * $a)
            );
        }
        if ($x == 0) {
            return $this->X = array(-($b / 2 * $a));
        }

        throw new BogdanovaException("Ошибка: уравнение не имеет корней.");

    }
}

?>