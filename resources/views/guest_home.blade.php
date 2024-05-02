@extends('layouts.app')

@section("content")
<div class="container mx-auto mt-10 mb-10 max-w-lg">
    @livewireScripts
    <div>
        <h2 class="mb-4 mt-4 text-2xl">Available Polls</h2>
        @livewire('polls')
    </div>
</div>

@endsection