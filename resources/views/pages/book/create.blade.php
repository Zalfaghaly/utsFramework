@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Barang</h1>
    <hr />
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="nama barang">
            </div>
            <div class="col">
                <input type="text" name="author" class="form-control" placeholder="Merk">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="year" class="form-control" placeholder="Harga">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Tambahkan barang</button>
            </div>
        </div>
    </form>
@endsection