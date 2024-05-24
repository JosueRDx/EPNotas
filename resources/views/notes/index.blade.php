@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content-container">
            <h1>Notas</h1>
            <a href="{{ route('notes.create') }}" class="btn btn-primary">Agregar Notas</a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mt-4">
                @if ($notes->isEmpty())
                    <p>No hay Notas.</p>
                @else
                    <ul>
                        @foreach ($notes as $note)
                            <li>Curso: {{ $note->Curso }}, Notas: {{ $note->Notas }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
