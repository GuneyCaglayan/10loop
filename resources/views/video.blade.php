@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Ürün Video Ekleme') }}</div>

                <div class="card-body">
                    <form method="post" action="/home/product/video" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="productId" class="col-md-4 col-form-label text-md-right">Ürün</label>
                            <select class="form-control col-md-8" name="productId" id="productId">
                                <option value="none" selected disabled hidden>Select an Option</option> 
                                @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->id }} - {{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ürün Adı </label>
                            <div class="col-md-8">
                                    <input id="name" name="name" type="text" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">Ürün Video Url </label>
                            <div class="col-md-8">
                                    <input id="video" name="video" type="text" class="form-control" required autofocus>
                            </div>
                        </div>
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="Ürün Ekle">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection