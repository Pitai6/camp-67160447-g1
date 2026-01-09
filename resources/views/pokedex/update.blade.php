@extends('template.default')

@section('header1', 'Pokedex Update')

@section('content')
<div class="row">
    <div class="col-12 mt-3">

        <form action="{{ route('pokedexs.update', $pokedex_update->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <label>Name</label>
                <input class="form-control" name="name"
                       value="{{ $pokedex_update->name }}" required>
            </div>

            <div class="mb-2">
                <label>Type</label>
                <input class="form-control" name="type"
                       value="{{ $pokedex_update->type }}" required>
            </div>

            <div class="mb-2">
                <label>Species</label>
                <input class="form-control" name="species"
                       value="{{ $pokedex_update->species }}">
            </div>

            <div class="mb-2">
                <label>Height</label>
                <input class="form-control" name="height"
                       value="{{ $pokedex_update->height }}">
            </div>

            <div class="mb-2">
                <label>Weight</label>
                <input class="form-control" name="weight"
                       value="{{ $pokedex_update->weight }}">
            </div>

            <div class="mb-2">
                <label>HP</label>
                <input class="form-control" name="hp"
                       value="{{ $pokedex_update->hp }}">
            </div>

            <div class="mb-2">
                <label>Attack</label>
                <input class="form-control" name="attack"
                       value="{{ $pokedex_update->attack }}">
            </div>

            <div class="mb-2">
                <label>Defense</label>
                <input class="form-control" name="defense"
                       value="{{ $pokedex_update->defense }}">
            </div>

            <div class="mb-2">
                <label>Image URL</label>
                <input class="form-control"
                       type="url"
                       name="image_url"
                       value="{{ $pokedex_update->image_url }}"
                       required>
            </div>

            <div class="mb-3">
                <img src="{{ $pokedex_update->image_url }}"
                     width="150"
                     class="img-thumbnail">
            </div>

            <button class="btn btn-success">อัปเดต</button>
            <a href="{{ route('pokedexs.index') }}" class="btn btn-secondary">
                กลับ
            </a>

        </form>

    </div>
</div>
@endsection
