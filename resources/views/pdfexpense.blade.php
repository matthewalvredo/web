<!DOCTYPE html>
<html>

<head>
  <title>Data Export</title>
  <style>
    /* Add your custom styles here */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }
  </style>
</head>

<body>
  <h1>Data Expense this Month</h1>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Quantity / Roll</th>
        <th>Price</th>
        <th>Total</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>{{ $item->baku_id == 1 ? $item->baku->name : $item->jadi->name }}</td>
          <td style="text-align: center">{{ $item->stock }}</td>
          <td>Rp. {{ number_format($item->totalprice / $item->stock, 0, ',', '.') }}</td>
          <td>Rp. {{ number_format($item->totalprice, 0, ',', '.') }}</td>
          <td>{{ $item->updated_at->format('d-m-Y') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>
