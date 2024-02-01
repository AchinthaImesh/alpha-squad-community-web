<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->simplePaginate(9)
        ]);
    }

    public function show($id)
    {
        return view('listings.show', [
            'listing' => Listing::find($id)
        ]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'author' => 'required',
            'tags' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        $formFields['image'] = $request->file('image')->store('post-images', 'public');

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Post created Successfully!');
    }

    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'author' => 'required',
            'tags' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        $formFields['image'] = $request->file('image')->store('post-images', 'public');

        $listing->update($formFields);

        return back()->with('message', 'Post updated Successfully!');
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect('/')->with('message', 'Post deleted Successfully!');
    }

    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

    public function home()
    {
        return view('listings.home');
    }
}
