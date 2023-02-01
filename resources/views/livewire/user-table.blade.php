<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <body>
            @foreach ($users as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('users.show',$item->id) }}" class="badge bg-primary">Detail</a>
                    <a href="" class="badge bg-warning">Edit</a>
                    <a href="" class="badge bg-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </body>
    </table>
</div>
