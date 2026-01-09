@extends('template.default')

@section('header1', 'Pokedex Create')

@section('content')
<div class="row">
    <h1>Pokedex Create</h1>

    
    <div class="col-12 mt-3">
        <form action="{{ route('pokedexs.store') }}" method="POST">
            @csrf

            <div class="mb-2">
                <label>Name</label>
                <input class="form-control" name="name" required>
            </div>

            <div class="mb-2">
                <label>Type</label>
                <input class="form-control" name="type" required>
            </div>

            <div class="mb-2">
                <label>Species</label>
                <input class="form-control" name="species">
            </div>

            <div class="mb-2">
                <label>Height</label>
                <input class="form-control" name="height">
            </div>

            <div class="mb-2">
                <label>Weight</label>
                <input class="form-control" name="weight">
            </div>

            <div class="mb-2">
                <label>HP</label>
                <input class="form-control" name="hp">
            </div>

            <div class="mb-2">
                <label>Attack</label>
                <input class="form-control" name="attack">
            </div>

            <div class="mb-2">
                <label>Defense</label>
                <input class="form-control" name="defense">
            </div>


            <div class="mb-3">
                <label>Image URL</label>
                <input class="form-control"
                       type="url"
                       name="image_url"
                       placeholder="https://..."
                       required>
            </div>

            <button class="btn btn-success">บันทึก</button>
        </form>
    </div>

    {{-- ตาราง --}}
    @include('pokedex.table')

</div>
@endsection
