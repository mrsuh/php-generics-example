<?php

namespace App;

class Box<T> {

    private ?T $data = null;

    public function set(T $data): void {
        $this->data = $data;
    }

    public function get(): ?T {
        return $this->data;
    }
}
