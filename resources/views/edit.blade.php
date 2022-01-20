<link href="{{ url('css/index.css')}}" rel="stylesheet">
<div class="container">
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
    @endif

    <h2>Editar o equipamento <strong>{{ $equip->titulo }}</strong></h1>
        <div>

            <form action="{{ route('equip.update', $equip->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <table class="table-create">
                    <tr>
                        <th>Titulo</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th>Ano de Fabricação</th>
                        <th>Número de Série</th>
                        <th>Editar/Excluir</th>
                    </tr>
                    <tr>
                        <form method="post" action="{{ route('equip.store')}}" enctype="multipart/form-data">
                            <td>

                                <input type="text" name="titulo" id="titulo" placeholder="Título"
                                    value="{{ $equip->titulo ?? old('titulo') }}">
                            </td>
                            <td>
                                <input type="text" name="tipo" id="tipo" placeholder="Tipo"
                                    value="{{ $equip->tipo ?? old('tipo') }}">
                            </td>
                            <td>
                                <input type="text" name="valor" id="valor" placeholder="Valor"
                                    value="{{ $equip->valor ?? old('valor') }}">
                            </td>
                            <td> <input type="text" name="anofab" id="anofab" placeholder="Ano de Fabricação"
                                    value="{{ $equip->anofab ?? old('anofab') }}">

                            </td>
                            <td>
                                <input type="text" name="serialnum" id="serialnum" placeholder="Número de Série"
                                    value="{{ $equip->serialnum ?? old('serialnum') }}">
                            </td>

                            <td><button class="button" type="submit">Editar Equipamento</button></td>
                        </form>
                    </tr>

                </table>

            </form>


        </div>
</div>