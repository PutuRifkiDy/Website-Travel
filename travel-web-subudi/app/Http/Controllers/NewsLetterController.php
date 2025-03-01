<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletters = Newsletter::get();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Newsletter::create([
        //     'email' => $request->email,
        //     'user_id' => Auth::user()->id
        // ]);

        DB::transaction(function () use ($request) {
            Newsletter::create([
                'email' => $request->email,
                'user_id' => Auth::user()->id
            ]);
        });

        return redirect()->route('front.index')->with('success', 'Berhasil mendaftar newsletter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $newsletters = Newsletter::findOrFail($id);
        return view('admin.newsletters.edit', compact('newsletters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::transaction(function () use ($request, $id) {
            $validated =$request->validate([
                'email' => 'required|email',
            ]);

            Newsletter::findOrFail($id)->update($validated);
        });

        return redirect()->route('newsletter.index')->with('success', 'Berhasil memperbarui newsletter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newsletter = Newsletter::findOrFail($id);
        DB::transaction(function () use ($newsletter) {
            $newsletter->delete();
        });

        return redirect()->route('newsletter.index')->with('success', 'Berhasil menghapus newsletter');
    }
}
