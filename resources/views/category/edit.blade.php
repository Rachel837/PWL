@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Pages</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Starter Page</a>
            </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('category.update', $category->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" class="form-control" readonly value="{{$category->id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$category->name  }}" autofocus required >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control">
                            {{$category->description}}
                        </textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('ExtraCSS')
    
@endsection

@section('ExtraJS')
    
@endsection