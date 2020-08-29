@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Portfolyo Ekle') }}</div>

                <div class="card-body">
                    <form method="post" action="/home/product-add" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">Ürün Kategorisi </label>
                            <select class="form-control col-md-8" name="categories" id="categories" data-value="restaurant">
                                <option value="none" selected disabled hidden>Select an Option</option> 
                                <option value="education">Eğitim Yazılımı</option>
                                <option value="excavation">Hafriyat Yazılımı</option>
                                <option value="restaurant">Restaurant Yazılımı</option>
                                <option value="website">Web Siteleri</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ürün Adı </label>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" class="form-control" required
                                    autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="header" class="col-md-4 col-form-label text-md-right">Ürün Başlık </label>
                            <div class="col-md-8">
                                <input id="header" name="header" type="text" class="form-control" required
                                    autocomplete="header" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">Ürün İçerik </label>
                            <div class="col-md-8">
                                <textarea id="content" name="content" rows="5" type="text" class="form-control" required
                                    autocomplete="content" autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Ürün İçerik </label>
                            <div class="col-md-8">
                                    <input id="image" name="image" type="file" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="extension" class="col-md-4 col-form-label text-md-right">Fotoğraf Uzantısı </label>
                            <select class="form-control col-md-8" name="extension" id="extension">
                                <option value="jpg">JPG</option>
                                <option value="jpeg">JPEG</option>
                                <option value="png">PNG</option>
                            </select>
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