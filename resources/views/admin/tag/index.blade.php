@extends('layouts.backend.app')

@section('title','Tags')

@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
            <button href="{{ route('tag.create') }}" class="btn btn-primary float-right text-white"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add Tag</button>
             <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                   <div class="card-icon">
                      <i class="material-icons">assignment</i>
                   </div>
                   <h4 class="card-title">Tags</h4>
                </div>
                <div class="card-body">
                   <div class="toolbar">
                   </div>
                   <div class="material-datatables">
                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                         <thead>
                            <tr>
                               <th>Name</th>
                               <th>Position</th>
                               <th>Office</th>
                               <th>Age</th>
                               <th>Date</th>
                               <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td class="text-right">
                                   <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                                   <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                                   <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                                </td>
                             </tr>
                            @endforeach

                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


 @endsection
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title fs-5" id="exampleModalLabel">Create</h4>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <form method="POST" action="{{ route('tag.store') }}">
             @csrf
           <div class="mb-3">
             <label for="recipient-name" class="col-form-label">Tag Name</label>
             <input type="text" class="form-control" id="name" name="name">
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

