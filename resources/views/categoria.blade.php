@extends("layout")
@section("conteudo")
   <div class="col-2">
     @if(isset($listaCategoria) && count($listaCategoria) > 0)
      <div class="list-group">
         <ul>
          <a href="{{ route('categoria')}}" 
             class="list-group-item list-group-item-action @if(0 == $idcategoria) active @endif">Todas</a>
             @foreach($listaCategoria as $categoria)
               <a href="{{ route('categoria_por_id', ['idcategoria' => $categoria->id])}}" 
                  class="list-group-item list-group-item-action @if($categoria->id == $idcategoria) active @endif"> 
                  {{$categoria->categoria}}</a>
             @endforeach
         </ul>
    </div>
     @endif
    </div>

    <div class="col-10">
       @include("_produtos", ['lista' => $lista])
    </div>
@endsection 