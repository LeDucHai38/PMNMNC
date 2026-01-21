<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bàn cờ XO</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f6f8;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            background: white;
        }

        td {
            width: 60px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
            font-size: 32px;
            font-weight: bold;
            border: 1px solid #ddd;
            transition: background 0.2s;
        }

        td:hover {
            background: #ecf0f1;
        }

        .x {
            color: #e74c3c;
        }

        .o {
            color: #3498db;
        }
    </style>
</head>
<body>

<table>
    @for ($i = 1; $i <= $n; $i++)
        <tr>
            @for ($j = 1; $j <= $n; $j++)
                <td>
                    @if (($i + $j) % 2 == 0)
                        <span class="x">X</span>
                    @else
                        <span class="o">O</span>
                    @endif
                </td>
            @endfor
        </tr>
    @endfor
</table>

</body>
</html>
