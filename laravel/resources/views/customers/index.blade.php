<h1>Müşteriler</h1>

<a href="{{ route('customers.create') }}">Yeni Müşteri Ekle</a>

@if(session()->has('status'))
    <div>{{ session('status') }}</div>
@endif

@if($customers->isEmpty())
    <p>Henüz müşteri yok.</p>
@else
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Doğum Yılı</th>
                <th>Cinsiyet</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td><a href="{{ route('customers.show', $customer) }}">{{ $customer->name ?? '-' }}</a></td>
                <td>{{ $customer->surname ?? '-' }}</td>
                <td>{{ $customer->birthYear ?? '-' }}</td>
                <td>{{ $customer->gender ?? '-' }}</td>
                <td>
                    <a href="{{ route('customers.edit', $customer) }}">Düzenle</a>
                    |
                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline" onsubmit="return confirm('Silinsin mi?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Sil</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
