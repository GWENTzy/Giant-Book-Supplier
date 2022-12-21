<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\publisher;

class HomeController extends Controller
{
    public function index()
    {
        $book = Book::all();

        return view('home', compact('book'));
    }

    public function category($id)
    {
        $bookCategory = BookCategory::where('category_id', $id)->get();

        $categoryName = $id == 1 ? 'Drama' : ($id == 2 ? 'Romance' : 'Horror');

        return view('category', compact('bookCategory', 'categoryName'));
    }

    public function detail($id)
    {
        $data = BookCategory::with('book')->where('book_id', $id)->get()->first();

        return view('detail', compact('data'));
    }

    public function publisher()
    {
        $publisher = publisher::all();

        return view('publisher', compact('publisher'));
    }

    public function publisherDetail($id)
    {
        $publisher = publisher::find($id);

        return view('publisherDetail', compact('publisher'));
    }

    public function contact()
    {
        return view('contact');
    }

}
