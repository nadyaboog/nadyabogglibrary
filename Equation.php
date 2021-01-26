<?php namespace Bogdanova;

Class Equation{
	public function one_solve($a, $b){
			if($a == 0){
                throw new BogdanovaException("Ошибка: уравнения не существует.");
            }
        MyLog::log("Это линейное уравнение");
			return $this->X=array(-($b/$a));
	}
	protected $X;
}
?>