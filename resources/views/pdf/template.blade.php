<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product PDF</title>
    <style type="text/css">
        body {
            font-family: Verdana, Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }

        .gray {
            background-color: lightgray;
            font-weight: bold;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        h3 {
            margin-bottom: 0;
        }

        pre {
            margin-top: 0;
        }

        .address {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td><img src="https://img.freepik.com/premium-vector/ghassan-name-arabic-diwani-calligraphy-art_587453-537.jpg" alt="Company Logo"></td>
            <td>
                <h3>Manager PDF</h3>
                <div class="address">
                    <pre>
                        Company representative name
                        Company address: Ouaradnine, Monastir
                        Tax ID: null
                        Phone: +216 21 922 206
                        Fax: 73518224
                    </pre>
                </div>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td><strong>From:</strong> Linblum - Barrio teatral</td>
            <td><strong>To:</strong> Linblum - Barrio Comercial</td>
        </tr>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Taxes</th>
                <th>Ads</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->title }}</td>
                <td>{{ $m->price }}</td>
                <td>{{ $m->taxes }}</td>
                <td>{{ $m->ads }}</td>
                <td>{{ $m->discount }}</td>
                <td>{{ $m->total }}</td>
                <td>{{ $m->category }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6"></td>
                <td align="center">Subtotal $</td>
                <td align="center">1635.00</td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <td align="center">Tax $</td>
                <td align="center">294.3</td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <td align="center">Total $</td>
                <td align="center" class="gray">$ 1929.3</td>
            </tr>
        </tfoot>
    </table>

</body>

</html>
