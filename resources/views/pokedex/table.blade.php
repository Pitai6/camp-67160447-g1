<div class="col-12 mt-5">
    <h2>Pokedex table</h2>

    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>id</th>
                <th>image</th>
                <th>name</th>
                <th>type</th>
                <th>species</th>
                <th>height</th>
                <th>weight</th>
                <th>hp</th>
                <th>attack</th>
                <th>defense</th>
                <th>tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokedex as $item)
            <tr>
                <td>{{ $item->id }}</td>


                <td>
                    <img src="{{ $item->image_url }}"
                         alt="{{ $item->name }}"
                         width="80"
                         class="img-thumbnail">
                </td>

                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->species }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->attack }}</td>
                <td>{{ $item->defense }}</td>

                <td>
                    <a href="{{ route('pokedexs.edit', $item->id) }}"
                       class="btn btn-warning btn-sm mb-1">
                        แก้ไข
                    </a>

                    <form action="{{ route('pokedexs.destroy', $item->id) }}"
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('ยืนยันการลบ?')">
                            ลบ
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
