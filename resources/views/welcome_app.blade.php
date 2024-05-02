@extends('layouts.app')


@section("content")
<div class="container mx-auto mt-10 mb-10 max-w-lg">
  @livewireScripts

  @guest()
  <p> no user loged in</p>
  @else
  {{ Auth::user()->name }}
  @endguest

  <div>
    <h2 class="mb-4 mt-4 text-2xl">Create Poll</h2>
    @livewire('create-poll')
  </div>

  <div>
    <h2 class="mb-4 mt-4 text-2xl">Available Polls</h2>
    @livewire('polls')
  </div>
</div>
@endsection