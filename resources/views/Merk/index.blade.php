<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <h1>Merk</h1>
        <a href="{{ route('Merk.create') }}" class="btn btn-primary mb-5">Tambah Baru</a>

        <table class="table">
	        <thead>
		        <tr>
			        <th scope="col">#</th>
			        <th scope="col">Nama</th>
			        <th scope="col">Alamat</th>
			        <th scope="col">Aksi</th>
		        </tr>
	        </thead>
	        <tbody>
		        @foreach ($merk as $merk)
		        <tr>
		            <th scope="row">{{ $merk->id }}</th>
                    <td>{{ $merk->name }}</td>
                    <td>{{ $merk->address }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('Merk.edit', $merk->id) }}">Update</a>
                        <form action="{{ route('Merk.destroy', $merk->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>