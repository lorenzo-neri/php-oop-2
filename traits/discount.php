<?php

trait Discount
{

    public $discount;

    public function getDiscount(): int
    {
        return '-' . $this->discount . '%';
    }
}
