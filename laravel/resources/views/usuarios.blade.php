<h1>LISTAR USUÁRIO</h1>

<table border=1>
@foreach ($users as $user)
<tr>
    <td><p>ID: {{ $user->id }}</p></td>
    <td><p>NOME: {{ $user->name }}</p></td>
    <td><p>E-mail: {{ $user->email }}</p></td>

</tr>

@endforeach
</table>
