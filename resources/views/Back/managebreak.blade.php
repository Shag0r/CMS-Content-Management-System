@extends('Back.master')


@section('main-content')
<div class="container-fluid px-4">
                        <h1 class="mt-4">Break Fast Arrangement</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">BreakFast</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                            
                                <a href="{{Route('breakfast')}}" class="btn btn-success"><i class="fa-solid fa-mug-saucer"></i>&#8209;ADD Items</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SL.NO</th>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL.NO</th>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        @php
                                            $b=1;
                                        @endphp
                                        @if (count($foods)>0)
                                            @foreach ($foods as $food )
                                                <tr>
                                                    <td>{{$b++}}</td>
                                                    <td>{{$food->breakfastname}}</td>
                                                    <th>
                                                        <img src="{{asset('images/breakfast/'.  $food->breakfoobimg)}}" alt="" width="150px" height="150px">
                                                    </th>
                                                    <td> {{ $food->price}} TK</td>
                                                    <td>
                                                        @if ( $food->breakstatus==1)
                                                            <a href="{{Route('inactivefood',$food->id)}}" class="btn btn-success  btn-sm">
                                                                <i class="fas fa-check"></i>Active
                                                            </a>
            
                                                        @else
                                                            <a href="{{Route('activefood', $food->id)}}" class="btn btn-warning  btn-sm">
                                                                <i class="fas fa-warning"></i>InActive
                                                            </a>    
                                                        @endif
                                                    </td>
                                                    <td>
                                                    <a href="{{Route('updatebreak',$food->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i>Edit </a>
                                                    <a href="{{Route('deletebreak',$food->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i>Delete </a>

                                                        
                                                    </td>

                                                </tr>
                                                
                                            @endforeach

                                            
                                        @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      
                        
                      
        </div>
    
@endsection