<?php

namespace App\Http\Controllers;

use App\Mail\DonateFormMail;
use Illuminate\Http\Request;
use Mail;
use Flasher\Laravel\Facade\Flasher;

class DonateController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            // Mother details
            'mother_name' => 'required|string',
            'mother_surname' => 'required|string',
            'mother_cell' => 'required|string',
            'mother_alternative_number' => 'nullable|string',
            'mother_email' => 'required|email',
            'mother_date_of_birth' => 'required|date',
        ]);

        Mail::to('admin@email.com')->send(new DonateFormMail($validatedData));

        Flasher::addSuccess('Thank you! Your form has been submitted successfully.');

        // Redirect back
        return redirect()->back();
    }
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }

}
