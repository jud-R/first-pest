<?php

use App\Models\Book;
use App\Models\User;

use function Pest\Laravel\actingAs;

it ('creates a book for a user', function() {
    expect(Book::all())->toHaveCount(0);

    $this->actingAs(User::factory()->create())
    ->post('books', [
        'title' => 'titre livre 1',
        'description' => 'description du livre 1',
        'price' => '1500',
    ])->assertOk();

    expect(Book::all())->toHaveCount(1);
    expect(Book::first())->toBeInstanceOf(Book::class);
    expect(Book::first())->title->toBeString()->not->toBeEmpty();

});