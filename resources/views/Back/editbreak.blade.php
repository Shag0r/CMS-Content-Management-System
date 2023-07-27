@extends('Back.master')


@section('main-content')
<div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Break Fast Items</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Update BreakFast</li>
                        </ol>

                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{Route('updatesavebreak',$food->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="from-group mb-3">
                                        <input type="text" name="breakfastname" class="form-control" placeholder="Breakfast Item Name" value=" {{ $food->breakfastname}}">
                                        @error('breakfastname')
                                        <span class="text-danger">{{message}}</span>
                                            
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea name="breakfastsummary" id="breakfastsummary" cols="100" rows="3" class="form-control" > {{ $food->breakfastsummary}} </textarea>
                                        @error('breakfastsummary')
                                        <span class="text-danger">{{message}}</span>
                                            
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="number" name="price" placeholder="Set the price for the item" class="form-control" value="{{ $food->price}}">
                                                @error('price')
                                                <span class="text-danger">{{message}}</span>
                                                    
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                            
                                            <select class="form-select  form-control" name="breakstatus" id="">
                                                <option selected>-----------------------Select Food Status--------------</option>

                                                <option value="1" @if ( $food->breakstatus==1)  selected
                                                    
                                                @endif>Published</option>
                                                <option value="0" @if ( $food->breakstatus==0) selected
                                                    
                                                @endif>Unpublished</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group mb-3">
                                        <input type="file" name="breakfoobimg" id="breakfoobimg" class="form-control">

                                           
                                        </div>
                                        @if ( $food->breakfoobimg)
                                            <div class="mb-3">
                                                <img src="{{asset('images/breakfast/'.  $food->breakfoobimg)}}" alt="" width="150px" height="150px">
                                            </div>
                                            
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary  w-100">
                                            Update  Information
                                        </button>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                      
                        
                      
        </div>
    
@endsection


                                            
                                 