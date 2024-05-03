@extends('layouts.app')

@section('body')
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #17a538;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .student-info {
            display: flex;
            align-items: center;
        }

        img {
            width: 200px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .bio {
            flex-grow: 1;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        p {
            margin: 5px 0;
            color: #cecece;
        }
    </style>
    <div class="container">
        <h1>Biodata diri</h1>
        <div class="student-info">
            <img src="{}" alt="Student Photo">
            <div class="bio">
                <h2>Zalfa ghaly attallah</h2>
                <p>NIM: 1204220129</p>
                <p>Prodi: Sistem informasi</p>
                <p>kelas: 05-02</p>
            </div>
        </div>
    </div>
@endsection
