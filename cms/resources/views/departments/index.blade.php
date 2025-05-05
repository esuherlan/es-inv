@extends('layout')

@section('content')
   <div class="app-content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Departemen</h3></div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Departemen</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="app-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="card mb-4">
                  <div class="card-header">
                     <a href="{{ route('departments.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-2"></i> Add Department
                     </a>
                  </div>
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th style="width: 10px">#</th>
                              <th>Name</th>
                              <th style="width: 200px">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($departments as $department)
                              <tr class="align-middle">
                                 <td>{{ ++$i }}</td>
                                 <td>{{ $department->name }}</td>
                                 <td>
                                    <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
                                       <a class="btn btn-outline-primary" href="{{ route('departments.edit',$department->id) }}"><i class="bi bi-pencil me-2"></i> Edit</a>
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash me-2"></i> Delete</button>
                                    </form>
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  <div class="card-footer clearfix">
                     <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
 </div>
@endsection