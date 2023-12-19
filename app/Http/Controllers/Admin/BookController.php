<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookDate;
use App\Models\BookTime;
use Illuminate\Support\Carbon;

class BookController extends Controller
{
    public function __construct()
    {
        /* actions for admin only */
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.book.index');
    }

    public function times()
    {
        $times = BookTime::latest()->paginate(10);
        return view('admin.book.time', compact('times'));
    }

    /* ----------------------------- */
    /*          Create new Time      */
    /* ----------------------------- */
    public function timeStore(Request $request)
    {
        $request->validate([
            'time' => 'required'
        ],
            [
                'time.required' => 'Time required'
            ]);
        /* create time */
        BookTime::create([
            'title' => $request->time,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        /* to page with list times */
        $notification = array(
            'message' => 'Time created',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* ----- end create new time ----- */

    /* -------------------------- */
    /*          Delete Time       */
    /* -------------------------- */
    public function timeDelete($id)
    {
        BookTime::find($id)->delete();
        $notification = array(
            'message' => 'Time deleted',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* ---- end delete time ----- */

    public function dates()
    {
        $dates = BookDate::latest()->paginate(10);
        return view('admin.book.date', compact('dates'));
    }

    /* ----------------------------- */
    /*          Create new Date      */
    /* ----------------------------- */
    public function dateStore(Request $request)
    {
        $data = $request->validate([
            'date' => 'required'
        ],
            [
                'date.required' => 'Date required'
            ]);
        /* create date */
        BookDate::create([
            'date' => $request->date,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        /* to page with list dates */
        $notification = array(
            'message' => 'Date created',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* ----- end create new date ----- */

    /* -------------------------- */
    /*          Delete date       */
    /* -------------------------- */
    public function dateDelete($id)
    {
        BookDate::find($id)->delete();
        $notification = array(
            'message' => 'Date deleted',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    /* ---- end delete date ----- */

}
