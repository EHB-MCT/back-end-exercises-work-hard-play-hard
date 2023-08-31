<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::get();
        return view('job.index', compact('vacancies'));
    }

    public function show($vacancyId)
    {
        $vacancy = Vacancy::find($vacancyId);

        return view('job.show', compact('vacancy'));
    }

    public function create()
    {
        return view('job.create');
    }

    public function store(Request $request)
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
