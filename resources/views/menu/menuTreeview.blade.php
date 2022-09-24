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
                     <h5 class="mb-4 text-center bg-success text-white ">Add New Menu</h5>
                     <form accept="{{ route('menus.store')}}" method="post">
                        @csrf
                         @if(count($errors) > 0)
                                  <div class="alert alert-danger  alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert">×</button>
                                      @foreach($errors->all() as $error)
                                              {{ $error }}<br>
                                      @endforeach
                                  </div>
                              @endif
                          @if ($message = Session::get('success'))
                           <div class="alert alert-success  alert-dismissible">
                               <button type="button" class="close" data-dismiss="alert">×</button>   
                                   <strong>{{ $message }}</strong>
                           </div>
                        @endif
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Title</label>
                                 <input type="text" name="title" class="form-control">   
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Parent</label>
                                 <select class="form-control" name="parent_id">
                                    <option selected disabled>Select Parent Menu</option>
                                    @foreach($allMenus as $key => $value)
                                       <option value="{{ $key }}">{{ $value}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <button class="btn btn-success">Save</button>
                           </div>
                        </div>
                     </form>
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