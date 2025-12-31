<h1>Müşteri Detayı</h1>

<p><strong>ID:</strong> {{ $customer->id }}</p>
<p><strong>Ad:</strong> {{ $customer->name }}</p>
<p><strong>Soyad:</strong> {{ $customer->surname }}</p>
<p><strong>Doğum Yılı:</strong> {{ $customer->birthYear }}</p>
<p><strong>Cinsiyet:</strong> {{ $customer->gender }}</p>

<p>
    <a href="{{ route('customers.edit', $customer) }}">Düzenle</a>
    |
    <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline" onsubmit="return confirm('Silinsin mi?');">
        @csrf
        @method('DELETE')
        <button type="submit">Sil</button>
    </form>
</p>

<p><a href="{{ route('customers.index') }}">Geri dön</a></p>
