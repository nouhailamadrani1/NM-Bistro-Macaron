@extends('layouts.app')

@section('content')
<body class="overflow-x-hidden">
<div> <a href="add"><button type="button" class="btn btn-outline-danger"> + Add Menu</button></a></div>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Menu</h2>
        </div>
       
    </div>
</div>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Photo</th>
        <th scope="col">Description</th>
        <th scope="col">price</th>
        <th scope="col">Action</th>
      </tr>
      
    </thead>
   
    <tbody>
        @foreach($menu as $menus)
      <tr>
        <th scope="row">  {{ $menus["id"]}}</th>
        <td>  {{ $menus["name"]}}</td>
        <td>  <img style="width:80px ;
          height:80px;;" src="/images/{{ $menus["image"]}}"/></td>
        <td> {{ $menus["description"] }}</td>
        <td> {{ $menus["price"] }}</td>
        <td> <div><a href="{{ url('edit/'.$menus->id) }}"  class="btn btn-primary my-2 btn-sm px-2">Edit</a>
        </div>
       
       
         <form action="{{'delete/'.$menus->id}}" method="POST">
             @method('DELETE')
             @csrf
            <button type="submit" class="btn btn-danger btn-sm px-2 ">
                delet  <i class="lni-trash"></i>
            </button>
     </form></td>
      </tr>
      
    
      @endforeach
    </tbody>
   
</table>


@endsection
