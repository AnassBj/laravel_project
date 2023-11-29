@extends('layouts.app')

@section('content')
<div class='cont'>
    <h1>Store<span> Product</span> </h1>
    <p>Welcome to you product dashboard interface. When you see, add, delete, and update your product easily.</p>
    <div>
    <button type="button" class="addbtn" data-toggle="modal" data-target="#addProductModal">
        Add Product &nbsp;&nbsp;
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 14H12M12 14H14M12 14V16M12 14V12" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M22 11.7979C22 9.16554 22 7.84935 21.2305 6.99383C21.1598 6.91514 21.0849 6.84024 21.0062 6.76946C20.1506 6 18.8345 6 16.2021 6H15.8284C14.6747 6 14.0979 6 13.5604 5.84678C13.2651 5.7626 12.9804 5.64471 12.7121 5.49543C12.2237 5.22367 11.8158 4.81578 11 4L10.4497 3.44975C10.1763 3.17633 10.0396 3.03961 9.89594 2.92051C9.27652 2.40704 8.51665 2.09229 7.71557 2.01738C7.52976 2 7.33642 2 6.94975 2C6.06722 2 5.62595 2 5.25839 2.06935C3.64031 2.37464 2.37464 3.64031 2.06935 5.25839C2 5.62595 2 6.06722 2 6.94975M21.9913 16C21.9554 18.4796 21.7715 19.8853 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V11" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
    </button>
    <h2>Product List</h2>
    <div class="cardok">

    @foreach ($products as $product)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->description }}</h5>
                <p class="card-text">Price: ${{ $product->price }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Show more</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Update</a>
                <a href="{{ route('products.confirm-delete', $product->id) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    @endforeach 
 </div>
    </div>
</div>

     
     <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                         <div class="form-group">
                            <label for="description">Description:</label>
                            <input  type="text" name="description" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" class="form-control" step="0.01" required>
                        </div>

                        <div class="form-group">
                            <label for="image1">Image 1:</label>
                            <input  type="text" name="image1" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label  for="image2">Image 2:</label>
                            <input type="text" name="image2" class="form-control" required>
                        </div>


                        <button class="addtgbtn" type="submit" class="btn btn-success">Add Product</button>
                    </form>
                                </div>
            </div>
        </div>
    </div>
@endsection


