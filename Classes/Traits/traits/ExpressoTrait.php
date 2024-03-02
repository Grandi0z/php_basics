<?php

namespace Classes\Traits\trait;

trait ExpressoTrait {
    public function makeExpresso(): string {
        return static::class." make a expresso <br>";
    }
}