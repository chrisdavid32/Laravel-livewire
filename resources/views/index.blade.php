@extends('layouts.app')

@section('content')
<livewire:my-component />

<livewire:second-component />

<div class="bg-red mt-3 p-4">
<livewire:message />
</div>
@endsection