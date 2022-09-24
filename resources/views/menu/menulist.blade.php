<x-app-layout>
</x-app-layout>


<!DOCTYPE html>
<html>
<head>
   <title>Multi Level Dynamic Menu In Laravel Treeview - codingspoint.com</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link href="/css/treeview.css" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="container">
   <div class="row">
      <div class="col-md-10 offset-md-1 mt-4">
         <div class="card">
         <div class="card-header">
               <a href="{{url('/')}}/menulist" class="btn btn-primary m-2">Menu List</a>
               <a href="{{url('/')}}/menus" class="btn btn-secondary m-2">Add Menu</a>
            </div>
            <div class="card-body">
               <div class="row">
                 
                  <div class="col-md-12">
                     <h5 class="text-center mb-4 bg-info text-white">Menu List</h5>
                      <ul id="tree1">
                         @foreach($menus as $menu)
                            <li>
                                <a href="">
                                {{ $menu->title }}
                                @if(count($menu->childs))
                                    @include('menu.manageChild',['childs' => $menu->childs])
                                @endif
                                </a>
                                
                            </li>
                         @endforeach
                        </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="/js/treeview.js"></script>
</body>
</html>