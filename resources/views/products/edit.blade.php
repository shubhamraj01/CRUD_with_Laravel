<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-light text-center">CRUD Operation in Laravel</h3>
    </div>
    <div class="container">
    <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>  
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header">
                        <h3>Edit Product</h3>
                    </div>
                    <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h4">Name</label>
                                <input type="text" value="{{ old('name', $product->name) }}" class="form-control form-control-lg" placeholder="name" name="name">
                                @error('name')
                                  <span class="text-danger">{{ $message }}</span> 
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h4">Sku</label>
                                <input type="text" value="{{ old('sku', $product->sku) }}" class="form-control form-control-lg" placeholder="Sku" name="sku">
                                @error('sku')
                                   <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h4">Price</label>
                                <input type="text" value="{{ old('price', $product->price) }}" class="form-control form-control-lg" placeholder="Price"
                                    name="price">
                                @error('price')
                                   <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h4">Description</label>
                                <textarea class="form-control" name="description" placeholder="Description" cols="30"
                                    rows="5">{{ old('description', $product->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h4">Image</label>
                                <input type="file" class="form-control form-control-lg" name="image">
                                @if($product->image != "")
                                    <img class="w-50 my-3" src="{{ asset('uploads/products/'.$product->image)}}" alt="">
                                @endif
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>