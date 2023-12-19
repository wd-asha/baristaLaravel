<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookDate;
use App\Models\BookTime;
use App\Models\Book;
use Illuminate\Support\Carbon;

class BookController extends Controller
{
    public function books()
    {
        $bookDates = BookDate::all();
        $bookTimes = BookTime::all();
        $note = "";
        return view('book', compact('bookDates', 'bookTimes', 'note'));
    }

    /* -------------------------- */
    /*       Create new Book      */
    /* -------------------------- */
    public function store(Request $request)
    {
        $request->validate([
            'person' => 'required|not_in:"Select Persons"',
            'date' => 'required|not_in:"Select Date"',
            'time' => 'required|not_in:"Select Time"',
            'phone' => 'required'
        ],
            [
                'person.required' => 'Required for selection',
                'person.not_in' => 'Required for selection',
                'date.required' => 'Required for selection',
                'date.not_in' => 'Required for selection',
                'time.required' => 'Required for selection',
                'time.not_in' => 'Required for selection',
                'phone.required' => 'Required for input'
            ]);
        /* create book */
        Book::create([
            'person' => $request->person,
            'date' => $request->date,
            'time' => $request->time,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        /* to booking page */
        $notification = array(
            'message' => 'Booking Table done',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* ----- end create new book ----- */

}
