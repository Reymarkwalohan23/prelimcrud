<div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-info">
            <tr>
                <th>ID No</th>
                <th>Cap Name</th>
                <th>Cap Brand</th>
                <th>Price</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($caps as $cap)
                <tr>
                    <td>{{ $cap->id }}</td>
                    <td>{{ $cap->cap_name }}</td>
                    <td>{{ $cap->cap_brand }}</td>
                    <td>{{ $cap->price }}</td>
                    <td>{{ $cap->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['cap' => $cap->id]) }}" class="btn btn-primary" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['cap' => $cap->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>

</style>
