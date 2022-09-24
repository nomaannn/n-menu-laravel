
<ul>
@foreach($childs as $child)
   <li>
      <a href="">
      {{ $child->title }}
   @if(count($child->childs))
            @include('menu.manageChild',['childs' => $child->childs])
        @endif
      </a>
   </li>
@endforeach
</ul>