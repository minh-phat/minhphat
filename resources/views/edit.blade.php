<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product add</title>
  </head>
  <body>
    <div class ="container">
        <div class = "row">
            <div class = "col-md-12">
                <h2>Update product</h2>

                <!-- use to run notification for save success -->
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                    
                
                <form action="{{url('update')}}" method="POST">
                  @csrf
                  <div class="md-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" 
                           placeholder="Enter product id" value="{{$data->productID}}">
                    @error('id')
                        <div class= "alert alert-danger" role ="alert">
                            {{$message}}
                        </div>                        
                    @enderror
                  </div>
                  <div class="md-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" 
                           placeholder="Enter product name" value="{{$data->productName}}">
                    @error('name')
                        <div class= "alert alert-danger" role ="alert">
                            {{$message}}
                        </div>                        
                    @enderror
                  </div>
                  <div class="md-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" 
                           placeholder="Enter product price" value="{{$data->productPrice}}">
                    @error('price')
                        <div class= "alert alert-danger" role ="alert">
                            {{$message}}
                        </div>                        
                    @enderror                        
                  </div>
                  <div class="md-3">
                    <label for="details" class="form-label">Details</label>
                    <textarea type="number" name="details" class="form-control" 
                              placeholder="Enter product details" value="{{$data->productDetails}}"></textarea>
                    @error('details')
                        <div class= "alert alert-danger" role ="alert">
                            {{$message}}
                        </div>                        
                    @enderror
                  </div>
                  <div class="md-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image1" class="form-control" value="{{$data->productImage}}">
                    @error('image1')
                        <div class= "alert alert-danger" role ="alert">
                            {{$message}}
                        </div>                        
                    @enderror
                  </div>
                  <div class="md-3">
                    <label for="producer" class="form-label">Producer</label>
                    <input type="number" name="producer" class="form-control" 
                           placeholder="Enter producer" value="{{$data->roductProducer}}">
                    @error('producer')
                        <div class= "alert alert-danger" role ="alert">
                            {{$message}}
                        </div>                        
                    @enderror
                  </div> <br>
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{url('list')}}" class="btn btn-danger">Back</a>

                </form>
            </div>
        </div>

    </div>
  </body>
</html>