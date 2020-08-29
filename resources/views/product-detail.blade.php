@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Portfolyo Ekle') }}</div>
                @foreach ($products as $product)
                <div class="card-body">
                <form method="post" action="/product/{{ $product->id }}" enctype="multipart/form-data">
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">Ürün Kategorisi </label>
                            <select class="form-control col-md-8" name="categories" id="categories" value="{{$product->categories}}">
                                <option <?php if($product->categories == 'education'){echo("selected");}?> value="education">Eğitim Yazılımı</option>
                                <option <?php if($product->categories == 'excavation'){echo("selected");}?> value="excavation">Hafriyat Yazılımı</option>
                                <option <?php if($product->categories == 'restaurant'){echo("selected");}?> value="restaurant">Restaurant Yazılımı</option>
                                <option <?php if($product->categories == 'website'){echo("selected");}?> value="website">Web Siteleri</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ürün Adı </label>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" class="form-control" required
                                    autocomplete="name" autofocus value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="header" class="col-md-4 col-form-label text-md-right">Ürün Başlık </label>
                            <div class="col-md-8">
                                <input id="header" name="header" type="text" class="form-control" required
                                    autocomplete="header" autofocus value="{{$product->header}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">Ürün İçerik </label>
                            <div class="col-md-8">
                                <textarea id="content" name="content" rows="5" type="text" class="form-control" required
                                    autocomplete="content" autofocus>{{$product->content}}</textarea>
                            </div>
                        </div>
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="Kaydet">
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection