
<table class="table table-bordered table-stripped">
    <thead>
    <th>ID</th>
    <th>Titre</th>
    <th>Prix</th>
    <th>Genre</th>
    </thead>
    @foreach($lesMangas as $mangas)
        <tr>
            <td> {{{ $mangas->getIdManga() }}} </td>
            <td> {{{ $mangas->getPrix() }}} </td>
            <td> {{{ $mangas->getTitre()}}}</td>
            <td> {{{ $mangas->getGenre()}}} </td>
        </tr>
    @endforeach
</table>
