<?php
namespace App\Test;

use App\Greeter;

class GreeterTest extends \PHPUnit\Framework\TestCase {
	public function testGreeterSaysHello() {
		$greeter = new Greeter();
		self::assertStringContainsString(
			"Hello",
			$greeter->greet()
		);
	}

	public function testGreeterUsesName() {
		$greeter = new Greeter();

		self::assertStringContainsString(
			"Hello, Cody",
			$greeter->greet("Cody")
		);
		self::assertStringContainsString(
			"Hello, Sarah",
			$greeter->greet("Sarah")
		);
	}

	public function testGreeterUsesNameAndAge() {
		$greeter = new Greeter();

		self::assertStringContainsString(
			"Hello, Cody! (you're 55, I would never have guessed!)",
			$greeter->greet(age: 55, name: "Cody")
		);
	}

	public function testGreeterIsRude() {
		$greeter = new Greeter();

		self::assertStringContainsString(
			"%&*§%!",
			$greeter->insult()
		);
	}
}
