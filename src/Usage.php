<?php

namespace App;

class Usage {

    public function run(): void
    {
        $stringBox = new Box<string>();
        $stringBox->set('cat');
        var_dump($stringBox->get()); // string "cat"

        $intBox = new Box<int>();
        $intBox->set(1);
        var_dump($intBox->get()); // integer 1
    }
}
