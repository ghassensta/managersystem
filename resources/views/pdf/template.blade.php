<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>
</head>
<body>

  <table width="100%">
    <tr>
        <td valign="top"><img src="resources/150x150.png"/></td>
        <td align="center">
            <h3>MAnager Pdf</h3>
            <pre>
                Company representative name
                Company address : Ouaradnine,Monastir
                Tax ID : null
                phone : +216 21 922 206
                fax : 73518224
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>From:</strong> Linblum - Barrio teatral</td>
        <td><strong>To:</strong> Linblum - Barrio Comercial</td>
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th>taxes</th>
        <th>ads</th>
        <th>discount</th>
        <th>total</th>
        <th>category</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $m )

      <tr>
        <th scope="row">{{ $m->id }}</th>
        <td align="center">{{ $m->title }}</td>
        <td align="center">{{ $m->price }}</td>
        <td align="center">{{ $m->taxes }}</td>
        <td align="center">{{ $m->ads }}</td>
        <td align="center">{{ $m->discount }}</td>
        <td align="center">{{ $m->total }}</td>
        <td align="center">{{ $m->category }}</td>


      </tr>
      @endforeach

    </tbody>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="center">Subtotal $</td>
            <td align="center">1635.00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="center">Tax $</td>
            <td align="center">294.3</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="center">Total $</td>
            <td align="center" class="gray">$ 1929.3</td>
        </tr>
    </tfoot>
  </table>

</body>
</html>
