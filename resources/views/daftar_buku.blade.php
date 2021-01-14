@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 15rem;">
            <img src="{{asset('img/book02.jpg')}}" class="card-img-top" alt="book 01">
            <div class="card-body">
                <h5 class="card-title">Book 01</h5>
                <p class="card-text">This Book 01. this book computer. you have learning to computer and your win</p>
                <a href="#" class="btn btn-primary">Pinjam Sekarang</a>
            </div>
        </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 15rem;">
            <img src="{{asset('img/book01.jpg')}}" class="card-img-top" alt="book 01">
            <div class="card-body">
                <h5 class="card-title">Book 01</h5>
                <p class="card-text">This Book 01. this book computer. you have learning to computer and your win</p>
                <a href="#" class="btn btn-primary">Pinjam Sekarang</a>
            </div>
        </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 15rem;">
            <img src="{{asset('img/book02.jpg')}}" class="card-img-top" alt="book 01">
            <div class="card-body">
                <h5 class="card-title">Book 01</h5>
                <p class="card-text">This Book 01. this book computer. you have learning to computer and your win</p>
                <a href="#" class="btn btn-primary">Pinjam Sekarang</a>
            </div>
        </div>
        </div>

        <div class="col-md-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Kategori
            </a>
            <a href="#" class="list-group-item list-group-item-action">Buku Komputer</a>
            <a href="#" class="list-group-item list-group-item-action">Buku Smartphone</a>
            <a href="#" class="list-group-item list-group-item-action">Buku Photoghrapy</a>
        </div>
        </div>
    </div>
</div>
@endsection