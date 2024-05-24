@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-container">
            <h1 class="text-center">Nueva Nota</h1>

            <form action="{{ route('notes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="curso">Curso</label>
                    <input type="text" name="curso" id="curso" class="form-control" value="{{ old('curso') }}">
                </div>
                <div class="form-group">
                    <label for="nota">Nota</label>
                    <input type="number" name="nota" id="nota" class="form-control" value="{{ old('nota') }}">
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Guardar Nota</button>
                </div>
            </form>
        </div>
    </div>
@endsection
