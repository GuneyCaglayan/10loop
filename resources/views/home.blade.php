@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 style="text-align: center">Products</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            
                            <th scope="col">Edit</th>
                            <th scope="col">Id</th>
                            <th scope="col">Category</th>
                            <th scope="col">Name</th>
                            <th scope="col">Header</th>
                            <th scope="col">Content</th>
                            <th scope="col">Image</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <form action="/home/product/{{ $product->id }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @method('DELETE')
                                @csrf
                                <tr>
                                <td><a href="/product/{{$product->id}}/edit"><i class="far fa-edit fa-2x"></a></i></td>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->categories }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->header }}</td>
                                    <td>{{ $product->content }}</td>
                                    <td><img src="product/{{ $product->name }}.{{ $product->extension }}"
                                            style="width:50px; height:50px;" alt=""></td>
                                    <td><button class="btn btn-danger">Sil</button></td>
                            </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h2 style="text-align: center">Images</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                
                                <th scope="col">Id</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                            <form action="/home/image/{{ $image->id }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @method('DELETE')
                                @csrf
                                <tr>
                                    <td>{{ $image->id }}</td>
                                    <td>{{ $image->productId }}</td>
                                    <td><img src="product/{{ $product->name }}.{{ $product->extension }}"
                                        style="width:50px; height:50px;" alt=""></td>
                                    <td><button class="btn btn-danger">Sil</button></td>
                                </form>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
                <h2 style="text-align: center">Videos</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            
                            <th scope="col">Id</th>
                            <th scope="col">Product Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                        <form action="/home/video/{{ $video->id }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @method('DELETE')
                            @csrf
                            <tr>
                                <td>{{ $video->id }}</td>
                                <td>{{ $video->productId }}</td>
                                <td>{{ $video->name }}</td>
                                <td><button class="btn btn-danger">Sil</button></td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
@endsection
