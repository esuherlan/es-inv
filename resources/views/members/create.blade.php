@extends('layout')

@section('content')
   <div class="app-content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Members</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="app-content">
      <div class="container-fluid">
         <div class="row g-4">
            <div class="col-md-12">
               <div class="card card-primary card-outline mb-4">
                  <div class="card-header"><div class="card-title">Add New Member</div></div>
                  <form action="{{ route('members.store') }}" method="POST">
                     @csrf

                     <div class="card-body">
                        <div class="col-6 mb-3">
                           <label for="exampleInputEmail1" class="form-label">NIK</label>
                           <input type="text" class="form-control" name="nik" id="nik" />
                        </div>
                        <div class="col-6 mb-3">
                           <label for="exampleInputEmail1" class="form-label">Nama</label>
                           <input type="text" class="form-control" name="nama" id="name" />
                        </div>
                        <div class="col-6 mb-3">
                           <label for="exampleInputEmail1" class="form-label">Name</label>
                           <input type="text" class="form-control" name="name" id="name" />
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i> Save</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection