@extends('dashboard')
@section('content')
@include('sweetalert::alert')
        <div class="w-100 d-flex justify-content-center h-100 ">
            <div clas s="w-100 justify-content-center d-flex"> 
                <a href="{{route('caso.create')}}" class="btn bi bi-arrow fs-3 text-info"><i class="bi bi-folder-plus"></i></a>
            </div>  
             <div class="col-9 d-flex m-auto mt-5 flex-column rounded-5 border p-2 shadow-lg bg-white">
                <form action="{{route('caso.index')}}" method="GET" >
                  @csrf
                  <div  class="input-group w-100 p-3">
                      <input type="text" class="form-control" name="buscar">
                      <a href="" class="btn btn-info bi bi-search input-text-group"></a>
                  </div>
                </form>
                      <table class="table">
                             <thead>
                                  <tr>
                                      <th scope="col" class="text-info">ID</th>
                                      <th scope="col" class="text-info">CASO</th>
                                      <th scope="col" class="text-info">INSTANCIA</th>
                                      <th scope="col" class="text-info">EDITAR</th>
                                      <th scope="col" class="text-info">ELIMINAR</th>
                                  </tr>
                             </thead>
                             <tbody>
                                @foreach($casos as $c)
                                <tr>
                                     
                                        <th scope="row">{{$c->id_caso}}</th>
                                        <td>{{$c->descripcion_caso}}</td>
                                        <td>{{$c->instancia_id}}</td>
                                        <td><a href="{{route('editarcaso',$c->id_caso)}}" class="btn bi bi-pencil text-info"></a></td>
                                        <td>
                                                <form action="{{route('eliminarcaso',$c->id_caso)}}" method="Post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-info bi-trash"></button>
                                                </form> 
                                        </td>
                                  
                                </tr>   
                                @endforeach                           
                             </tbody>
                      </table>

                      {{-- {{$casos->links()}} --}}
             </div>
        </div>
@endsection