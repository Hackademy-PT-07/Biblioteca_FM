<x-main>

<x-slot:title>Biblioteca comunale "F. Margarito"</x-slot>

<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <h1>Database della biblioteca comunale "F. Margarito"</h1>

            <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Anno di pubblicazione</th>
                            <th>Genere</th>
                            <th>Data e ora apertura</th>
                            <th>Modifica/Elimina</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($libraries as $library)
                            <tr>
                                <td>{{ $library->id }}</td>
                                <td>{{ $library->title }}</td>
                                <td>{{ $library->author }}</td>
                                <td>{{ $library->year }}</td>
                                <td>{{ $library->genre }}</td>
                                <td>{{ $library->created_at->format('d/m/Y H:i') }}</td>
                                <td>                                    
                                    <a href="{{ route('libraries.edit', $library) }}" class="btn btn-sm btn-secondary">modifica</a>
                                    <form class="d-inline ms-2" onsubmit="return confirm('Sei sicuro ...?')"
                                        action="{{ route('libraries.destroy', $library) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">cancella</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
        </div>
    </div>
</div>

</x-main>