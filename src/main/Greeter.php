<?php
namespace App;

class Greeter {
	public function greet(string $name = null, int $age = null): string {
		$value = "Hello!";

		if ($name) {
			$value = "Hello, $name!";
		} else {
			$value = "Hello, $name!";
		}

		if ($age != null) {
			$value .= " (you're $age, I would never have guessed!)";
		}

		return $value;
	}
}

