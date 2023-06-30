<?php

it('works', function(){
    $this->assertTrue(true);
});

it('works again', function(){
    expect(true)->toBeTrue;
});

it('expects 10 to be greater than 5', function() {
    expect(10)->toBeGreaterThan(5);
});