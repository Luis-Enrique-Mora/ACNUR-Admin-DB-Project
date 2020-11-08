<table class="table table-bordered" id="cuotas">
    <thead>
        <tr>
        <th>Tipo cuota</th>
 
        </tr>
    </thead>
    <tbody>
        @foreach($tipo_cuota as $cuota)
        <tr>
        <td>{{ $cuota->tipo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>