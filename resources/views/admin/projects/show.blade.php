@extends('layouts.admin')

@section('content')
{{-- @include('partials.flash-messages') --}}

<section>
    <div class="d-flex align-items-center justify-content-between">
        <div class="px-2">
            <h3 class="text-uppercase">{{ $project->name }}</h3>
        </div>
    @if ($project->cover_image)
        <div>
            <img src="{{ asset('storage/'. $project->cover_image) }}" alt="{{ $project->name }}">
        </div>
    @endif
    </div>
    <div class="p-2 mt-4">
        <div class="mt-1">
            <h5>Slug: {{ $project->slug }}</h5>
        </div>
        <div class="mt-1">
            <h5>Cliente: {{ $project->client_name }}</h5>
        </div>
    </div>

    <div class="p-2 mt-4">
        <strong>Tipo di progetto</strong>: {{ $project->type ? $project->type->name : 'non specificato' }}
    </div>

    <div class="p-2 mt-4">
        <strong>Tecnologie usate</strong>:
        @if (count($project->technologies) > 0)
            @foreach ($project->technologies as $technology)
                {{ $technology->name }}@if (!$loop->last),@endif
            @endforeach
        @else
            nessuna
        @endif
    </div>

    <div class="p-2 mt-4">
        <div>
            <h6>Descrizione del progetto</h6>
        </div>
        <div>
            {{ $project->summary }}
        </div>     
    </div>

</section>
    
@endsection