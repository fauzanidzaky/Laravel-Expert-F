<h2>Daftar Tugas Hari Ini:</h2>
<ul>
    @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
    @endforeach
</ul>