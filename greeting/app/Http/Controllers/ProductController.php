<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    private $price;
    private $discount;
    function __construct($price, $discount)
    {
        $this->price = $price;
        $this->discount = $discount;
    }
    function calcDiscount()
    {
        return $this->price * $this->discount * 0.01;
    }
    function calcPrice()
    {
        return $this->price - $this->calcDiscount();
    }
}
