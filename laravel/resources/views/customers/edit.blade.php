<h1>Müşteri Düzenle</h1>

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('customers.update', $customer) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Ad: <input type="text" name="name" value="{{ old('name', $customer->name) }}"></label><br>
    <label>Soyad: <input type="text" name="surname" value="{{ old('surname', $customer->surname) }}"></label><br>
    <label>Doğum Yılı: <input type="number" name="birthYear" value="{{ old('birthYear', $customer->birthYear) }}"></label><br>
    <label>Cinsiyet: <input type="text" name="gender" value="{{ old('gender', $customer->gender) }}"></label><br>
    <button type="submit">Güncelle</button>
</form>

<p><a href="{{ route('customers.index') }}">Geri dön</a></p>
