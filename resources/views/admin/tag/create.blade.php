@extends('layouts.backend.app')

@section('title', 'Create')


@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
             <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                   <h4 class="card-title">Create Tag</h4>
                </div>
                <div class="card-body ">
                   <form method="POST" action="{{ route('tag.store') }}">
                        @csrf
                      <div class="form-group">
                         <label for="exampleEmail" class="bmd-label-floating">Tag Name</label>
                         <input type="text" name="name" id="name" class="form-control" id="exampleEmail">
                      </div>
                      <div class="card-footer ">
                         <button type="submit" class="btn btn-fill btn-rose">Create Tag</button>
                      </div>
                   </form>
                </div>
             </div>
          </div>

       </div>
    </div>
 </div>
@endsection
