<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = Job::all();
        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // in routes we need to create a post route for 'store'
        // Laravel have protection for cross-site req forgeries and we need to use @csrf in the form

        $title = $request->input('title');
        $description = $request->input('description');

        Job::create([
            'title' => $title,
            'description' => $description,
        ]);
        // In your routes/web.php, you should have a route for listing jobs with the name jobs.index.
        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    // Modal Binding
    // This is a feat of Laravel that allows us to type hint a model in a controller method, and Laravel will automatically fetch the model from th DB based on that route parameter.
    public function show(Job $job): View
    {
        //dd($job); //Debugging
        // Since the route parameter {job} matches the $job parameter in the method, Laravel automatically queries the Job model using its primary key (id by default).
        return view('jobs.show')->with('job', $job);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
