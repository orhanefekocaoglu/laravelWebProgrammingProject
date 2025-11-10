<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İspanyolca el/la İstisnaları</title>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 25px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            overflow: hidden; /* Köşelerin yuvarlak görünmesi için */
        }

        .styled-table thead tr {
            background-color: #AD1519; /* İspanya bayrağı kırmızısı */
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #AD1519;
        }

        .styled-table code {
            background-color: #eee;
            padding: 3px 5px;
            border-radius: 4px;
            font-family: "Courier New", Courier, monospace;
            font-weight: bold;
        }

        h2, h3 {
            color: #333;
            margin-top: 30px;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }

        p {
            line-height: 1.6;
        }
    </style>
    </head>
<body>

    <div class="container">
        <h2>{{ __('İspanyolca Cinsiyet (el/la) İstisnaları') }}</h2>

        <h3>{{ __('Kural 1 İstisnası: "-a" ile Biten Maskülen (Erkek) Kelimeler') }}</h3>
        <p>{{ __('Genel kural: "-a" ile biten kelimeler dişidir (la casa, la mesa). İstisnalar (genellikle Yunanca kökenli -ma, -pa, -ta ile bitenler):') }}</p>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>{{ __('İspanyolca (İstisna)') }}</th>
                    <th>{{ __('Türkçe Anlamı') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>el problema</code></td>
                    <td>{{ __('Sorun') }}</td>
                </tr>
                <tr>
                    <td><code>el tema</code></td>
                    <td>{{ __('Konu') }}</td>
                </tr>
                <tr>
                    <td><code>el sistema</code></td>
                    <td>{{ __('Sistem') }}</td>
                </tr>
                <tr>
                    <td><code>el mapa</code></td>
                    <td>{{ __('Harita') }}</td>
                </tr>
                <tr>
                    <td><code>el día</code></td>
                    <td>{{ __('Gün') }}</td>
                </tr>
                <tr>
                    <td><code>el planeta</code></td>
                    <td>{{ __('Gezegen') }}</td>
                </tr>
                <tr>
                    <td><code>el sofá</code></td>
                    <td>{{ __('Kanepe') }}</td>
                </tr>
            </tbody>
        </table>

        <h3>{{ __('Kural 2 İstisnası: "-o" ile Biten Feminen (Dişi) Kelimeler') }}</h3>
        <p>{{ __('Genel kural: "-o" ile biten kelimeler erkektir (el libro, el perro). İstisnalar:') }}</p>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>{{ __('İspanyolca (İstisna)') }}</th>
                    <th>{{ __('Türkçe Anlamı') }}</th>
                    <th>{{ __('Not') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>la mano</code></td>
                    <td>{{ __('El') }}</td>
                    <td>{{ __('En yaygın istisna.') }}</td>
                </tr>
                <tr>
                    <td><code>la foto</code></td>
                    <td>{{ __('Fotoğraf') }}</td>
                    <td>{{ __('"la fotografía" kelimesinin kısaltmasıdır.') }}</td>
                </tr>
                <tr>
                    <td><code>la moto</code></td>
                    <td>{{ __('Motosiklet') }}</td>
                    <td>{{ __('"la motocicleta" kelimesinin kısaltmasıdır.') }}</td>
                </tr>
                <tr>
                    <td><code>la radio</code></td>
                    <td>{{ __('Radyo (yayın)') }}</td>
                    <td>{{ __('"la radiodifusión" kelimesinin kısaltmasıdır.') }}</td>
                </tr>
            </tbody>
        </table>

        <h3>{{ __('Özel Kural: Ses Çakışmasını Önleme (Fonetik Kural)') }}</h3>
        <p>{{ __('Bu kelimeler aslında dişidir (feminendir), ancak vurgulu "a-" veya "ha-" sesiyle başladıkları için "la a..." ses çakışmasını önlemek amacıyla tekil haldeyken "el" alırlar. Kelimenin cinsiyeti değişmez, sadece artikel değişir.') }}</p>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>{{ __('Doğru (Tekil)') }}</th>
                    <th>{{ __('Anlamı') }}</th>
                    <th>{{ __('Kanıt (Çoğul veya Sıfatlı)') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>el agua</code></td>
                    <td>{{ __('Su') }}</td>
                    <td><code>las aguas</code> (Çoğul) / <code>el agua fría</code> (Soğuk su - sıfat dişidir)</td>
                </tr>
                <tr>
                    <td><code>el águila</code></td>
                    <td>{{ __('Kartal') }}</td>
                    <td><code>las águilas</code> (Çoğul) / <code>el águila herida</code> (Yaralı kartal)</td>
                </tr>
                <tr>
                    <td><code>el hacha</code></td>
                    <td>{{ __('Balta') }}</td>
                    <td><code>las hachas</code> (Çoğul) / <code>el hacha afilada</code> (Keskin balta)</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>