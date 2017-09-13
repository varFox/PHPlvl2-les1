<?php
/**
* 5. Дан код (ниже). Что он выведет на каждом шаге? Почему? 
*/

class A {                   //создаётся и 
	public function foo() {   //описывается класс
		static $x = 0;					//статическое свойство внутри публичного метода
		echo ++$x;              //префиксный декремент сначала увеличит
	}                         //затем выведет
}

$a1 = new A();              //а1 объект класса А
$a2 = new A();              //анологично, но не то же самое
$a1->foo();                 //т.к. х статичный, то он в данном
$a2->foo();                 //случае будет увеличиваться с каждым вызовом
$a1->foo();                 //вывод: 1234
$a2->foo();