<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

final class BookController extends Controller
{
    /**
     * @param Book $book
     * @return array
     */
    public function show(Book $book): array
    {
        return [
            'data' => [
                'id' => $book->id,
                'name' => $book->name,
            ],
        ];
    }
}
