<?php

use App\Models\User;


beforeAll(function(){
    dumpHelloWorld();
});

beforeEach(function(){
    User::factory(10)->create();
});

it('works', function(){
    $this->assertTrue(true);
});

it('works again', function(){
    expect(true)->toBeTrue;
});

it('expects 10 to be greater than 5', function() {
    expect(10)->toBeGreaterThan(5);
});

it('expects that 10 users are created', function() {

    expect(User::count())->toEqual(10);
    expect(User::all())->toHaveCount(10);
});

it('expects that 10 users are created 2', function() {

    expect(User::count())->toEqual(10);
    expect(User::all())->toHaveCount(10);
});

it('expects that 10 users are created 3', function() {

    expect(User::count())->toEqual(10);
    expect(User::all())->toHaveCount(10);
});