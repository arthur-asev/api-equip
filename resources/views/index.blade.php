<link href="{{ url('css/index.css')}}" rel="stylesheet">
<div class="container">
    <h2>Equipamentos</h3>

        @if (session('message'))
        <div>
            {{ session('message')}}
        </div>
        @endif
        <div class="create-equip">
            <h3>
                <a href="{{ route('equip.create') }}">Cadastrar um novo equipamento</a>
            </h3>
        </div>

        <table>
            <tr>
                <th>titulo</th>
                <th>tipo</th>
                <th>valor</th>
                <th>Ano de Fabricação</th>
                <th>Número de Série</th>
                <th>Editar/Excluir</th>
            </tr>
            @foreach ($equips as $equip)
            <tr>

                <td>{{ $equip->titulo }}</td>
                <td>{{ $equip->tipo }}</td>
                <td>{{ $equip->valor }}</td>
                <td>{{ $equip->anofab }}</td>
                <td>{{ $equip->serialnum }}</td>
                <td><button class="button"><a href="{{ route('equip.edit', $equip->id) }}">Editar
                            Equipamento</a></button>
                    <form action="{{ route('equip.destroy', $equip->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="button" type="submit">Excluir Equipamento</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </table>
</div>


</div>
