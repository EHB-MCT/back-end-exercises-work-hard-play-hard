<x-layout>
    <x-slot:title>
        Create job
    </x-slot:title>

    <form action="{{ route('vacancies.store') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" id="title" name="title">

        <label for="description">Description</label>
        <input type="text" id="description" name="description">

        <input type="submit" value="Submit">
    </form>
</x-layout>

