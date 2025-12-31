<h1>Yeni Müşteri</h1>

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <label>Ad: <input type="text" name="name" value="{{ old('name') }}"></label><br>
    <label>Soyad: <input type="text" name="surname" value="{{ old('surname') }}"></label><br>
    <label>Doğum Yılı: <input type="number" name="birthYear" value="{{ old('birthYear') }}"></label><br>
    <label>Cinsiyet: <input type="text" name="gender" value="{{ old('gender') }}"></label><br>
    <button type="submit">Kaydet</button>
</form>
