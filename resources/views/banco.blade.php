@extends('layouts.admin')

@section('title', 'Ban co XO')

@push('styles')
    <style>
        .board-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .board-table {
            border-collapse: collapse;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            background: #ffffff;
        }
        .board-table td {
            width: 60px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
            font-size: 32px;
            font-weight: bold;
            border: 1px solid #ddd;
            transition: background 0.2s;
        }
        .board-table td:hover {
            background: #ecf0f1;
        }
        .board-x {
            color: #e74c3c;
        }
        .board-o {
            color: #3498db;
        }
    </style>
@endpush

@section('content')
    <div class="board-wrap">
        <table class="board-table">
            @for ($i = 1; $i <= $n; $i++)
                <tr>
                    @for ($j = 1; $j <= $n; $j++)
                        <td>
                            @if (($i + $j) % 2 == 0)
                                <span class="board-x">X</span>
                            @else
                                <span class="board-o">O</span>
                            @endif
                        </td>
                    @endfor
                </tr>
            @endfor
        </table>
    </div>
@endsection
