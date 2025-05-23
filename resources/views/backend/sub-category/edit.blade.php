



@extends('backend.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit SubCategory</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit SubCategory</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit SubCategory</h3>
                            </div>
                           
                            <form action="{{url('/admin/sub-category/update/'.$subCategory->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Select Category* </label>
                                        <select name="cat_id" id=""class="form-control">
                                            <option selected disabled>Select Category</option>
                                            @foreach ( $categories as $category)
                                                <option value="{{$category->id}}"@if ($category->id==$subCategory->cat_id)
                                                    selected
                                                @endif>{{$category->name}}</option>
                                            
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">SubCategory Name* </label>
                                        <input type="text" class="form-control"name="name"value="{{$subCategory->name}}" id="name"placeholder="Enter category name"required>
                                    </div>
                                    
                                   
                             

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                       
                    </div>

                </div>
                
            </div>
        </section>
        
    </div>
   
@endsection
@push('srcipt')
<script>
    $(function () {
      image.init();
    });
    </script>
@endpush


