@extends('Back.master')


@section('main-content')
<div class="container-fluid px-4">
                        <h1 class="mt-4">Lunch  Items</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><i class="fa-solid fa-bowl-rice"></i>&#8209;Lunch</li>
                        </ol>

                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{Route('addlunchitem')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="from-group mb-3">
                                        <input type="text" name="lunchname" class="form-control" placeholder="lunchname Item Name">
                                        @error('lunchname')
                                        <span class="text-danger">{{message}}</span>
                                            
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea name="lunchsummary" id="lunchsummary" cols="100" rows="3" class="form-control" > </textarea>
                                        @error('lunchsummary')
                                        <span class="text-danger">{{message}}</span>
                                            
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="number" name="price" placeholder="Set the price for the item" class="form-control">
                                                @error('price')
                                                <span class="text-danger">{{message}}</span>
                                                    
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                            
                                            <select class="form-select  form-control" name="lunchstatus" id="">
                                                <option selected>-----------------------Select Food Status--------------</option>

                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group mb-3">
                                        <input type="file" name="lunchfoobimg" id="lunchfoobimg" class="form-control">

                                           
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary  w-100">
                                            Add Lunch  Item
                                        </button>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                      
                        
                      
        </div>
    
@endsection


                                            
                                 