<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Index extends Component
{
    public function deleteBook($id) {
        Book::whereId($id)->first()->delete();
    }

    public function render()
    {
        return view('livewire.book.index', ["books" => Book::all()]);
    }
}
