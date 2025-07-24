<?php
namespace App;

class Greeter {
  public function greet(string $name = null): string {
    if ($name) {
      return "Hello, $name!";
    }

    return "Hello!";
  }

  public function insult(): string {
    return "%&*§%!";
  }
}
