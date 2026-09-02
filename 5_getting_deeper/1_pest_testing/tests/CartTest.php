<?php

use App\Cart;

// Cada it() é um teste. O nome completa a frase em inglês "it ...".

it("starts empty", function () {
    $cart = new Cart();

    expect($cart->count())->toBe(0);
});

it("sums the prices", function () {
    $cart = new Cart();
    $cart->add("Book", 50.00);
    $cart->add("Pen", 5.50);

    expect($cart->total())->toBe(55.50);
});

it("refuses a negative price", function () {
    $cart = new Cart();

    expect(fn() => $cart->add("Broken", -10.00))
        ->toThrow(InvalidArgumentException::class);
});
