<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index()
    {
        $vacancies = Vacancy::get();
        return view('job.index', compact('vacancies'));
    }

    function show($vacancyId)
    {
        $vacancy = Vacancy::find($vacancyId);

        return view('job.show', compact('vacancy'));
    }

    function create()
    {
        return view('job.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $vacancy = new Vacancy();
        $vacancy->title = $request->get('title');
        $vacancy->description = $request->get('description');
        $vacancy->save();

        return redirect()->route('jobs.index');
    }
}
