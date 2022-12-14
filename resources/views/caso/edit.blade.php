@extends('dashboard')
@section('content')
@include('sweetalert::alert')   
   <div class="w-100 d-flex justify-content-center h-100 aligin-items-center pt-5 mt-6">
    <div clas s="w-100 justify-content-center d-flex"> 
        <a href="{{route('caso.index')}}" class="btn bi bi-arrow fs-3"><i class="bi bi-arrow-bar-left"></i></a>
    </div> 
               <div class="col-4  d-flex justify-content-center rounded-5 border p-3 shadow-lg bg-white  h-75">

                       <form action="{{route('actualizarcaso',$caso->id_caso)}}" method="post">
                           @method('PUT')
                           @csrf
                           <div class="w-100 justify-content-center d-flex">
                                <h1>Edita un caso</h1>
                           </div>

                           <div clas s="w-100 justify-content-center d-flex"> 
                                <label for="exampleFormControlTextarea1" class="form-label">ingrese la descripcion de su caso:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion_caso" value="">{{$caso->descripcion_caso}}</textarea>
                           </div>
                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                               <select name="instancia_id" id="" requided class="form-select mt-2">
                                    <option value="{{$caso->instancia_id}}">{{$caso->instancia_id}}</option>
                                    @foreach ($instancias as $i)
                                       <option value="{{$i->id_instancia}}">{{$i->estado}}</option>
                                    @endforeach
                               </select>
                           </div>
                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                            <select  id="" requided class="form-select mt-2" name="rama_id">
                                <option value="{{$caso->rama_id}}" selected>{{$caso->rama_id}}</option>
                                @foreach ($ramas as $r)
                                   <option value="{{$r->id_rama}}">{{$r->nombre_rama}}</option>
                                @endforeach
                            </select>
                          </div>
                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                               <button class="btn btn-dark w-100 rounded-5 mt-4">Enviar</button>
                           </div>
                       </form>
               </div>
   </div>
@endsection