<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    Ad: <input type="text" name="name"> <br>
    Soyad: <input type="text" name="surname"> <br>
    Doğum Yılı: <input type="number" name="birthYear"> <br>
    Cinsiyet: <input type="text" name="gender"> <br>
    <button type="submit">Veritabanına Gönder</button>
</form>