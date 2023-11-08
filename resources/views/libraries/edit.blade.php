<x-main>

    <x-slot:title>Modifica un titolo</x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1>Modifica un titolo</h1>

                <x-success />

                <form action="{{ route('libraries.update', $library) }}" method="POST" class="mt-4">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title') }}">
                            @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="author">Autore</label>
                            <input type="text" name="author" id="author" class="form-control"
                                    value="{{ old('author') }}">
                            @error('author') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="year">Anno di pubblicazione</label>
                            <input type="text" name="year" id="year" class="form-control"
                                    value="{{ old('year') }}">
                            @error('year') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="genre">Genere</label>
                            <select name="genre" id="genre" class="form-control">
                                @foreach(['Biografia', 'Romanzo storico', 'Giallo', 'Thriller', 'Horror', 'Avventura', 'Fantascienza', 'Fantasy', 'Commedia', 'Saggistica', 'Economia', 'Politica', 'Altro'] as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </select>
                            @error('genre') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Modifica</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main>