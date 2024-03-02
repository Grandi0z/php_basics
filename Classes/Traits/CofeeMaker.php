<?php

namespace Classes\Traits;

abstract class CofeeMaker {
    public function makeCoffee(): string {
        return static::class." make a coffee <br>";
    }
} 