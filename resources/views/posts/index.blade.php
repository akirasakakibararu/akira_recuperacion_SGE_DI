<ul>
    {{--esto es un comentario: recorremos el listado de posts--}}
    @foreach ($producers as $producers)
      {{-- visualizamos los atributos del objeto --}}
      <li>
        <a href="{{route('posts.show',$producers)}}">
        Nombre:    {{$producers->name}}</a>.
        Fecha de fundacion:    {{$producers->foundation_date}}</a>.
        Web:    {{$producers->web}}</a>.
        Creado el {{$producers->created_at}}
      </li>
    @endforeach
  </ul>
