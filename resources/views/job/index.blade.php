<x-layout>
    <x-slot:title>
        Jobs
    </x-slot:title>

    <h1>Jobs</h1>

    @foreach($vacancies as $vacancy)
        <h2><a href="{{ route('jobs.show', ['vacancy' => $vacancy]) }}">{{ $vacancy->title }}</a></h2>
        <p>{{ $vacancy->description }}</p>
    @endforeach
</x-layout>

