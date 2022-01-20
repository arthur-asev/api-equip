<form action="{{route('equip.update', $equip->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
    <input class="form-control mb2" type="text" name="title" id="title" placeholder="Título"
        value="{{ $equip->titulo ?? old('titulo') }}">

</form>
