@extends('theme.default')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Match</title>
</head>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2>Cek Persentase Karakter</h2>
                <form method="POST" action="{{ route('character.match') }}">
                    @csrf
                    <label for="input1">Input 1:</label>
                    <input type="text" id="input1" name="input1" required>
                    <br><br>
                    <label for="input2">Input 2:</label>
                    <input type="text" id="input2" name="input2" required>
                    <br><br>
                    <button type="submit">Cek</button>
                </form>

                @if(isset($percentage))
                    <h3>Hasil:</h3>
                    <p>Input 1: <strong>{{ $input1 }}</strong></p>
                    <p>Input 2: <strong>{{ $input2 }}</strong></p>
                    <p>Jumlah Karakter yang Cocok: {{ $matchCount }} dari {{ $totalChars }}</p>
                    <p>Persentase Kecocokan: <strong>{{ number_format($percentage, 2) }}%</strong></p>
                @endif
            </div>
        </div>
    </div>
</html>
@endsection
