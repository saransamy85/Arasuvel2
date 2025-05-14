@extends('admin/layouts/base')

@section('menu')
<md-list>
    <md-list-item type="link" href="{{route('home')}}">
        Home
    </md-list-item>
    <md-divider></md-divider>
    <md-list-item type="link" href="{{route('category')}}">
        Category
    </md-list-item>
    <md-divider></md-divider>
    <md-list-item type="link" href="#">
        Product
</md-list>
@endsection
@section('content')

<div class="p-3">
    <div class="row g-2">
        <div class="col-lg-12">
            <h3>Image Upload</h3>
            <form action="{{ route('cpro') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <select name="catevalue" class="form-select">
                        <option value="">--Select Categories--</option>
                        @foreach($cates as $cc)
                        <option value="{{$cc->id}}" class="form-control">{{$cc->catename}}</option>
                        @endforeach
                    </select>
                    <!-- <md-filled-select>
                        <md-select-option selected value="Select categories" name="catevalue">
                            <div slot="headline">Select categories</div>
                        </md-select-option>
                         @foreach($cates as $cc)
                        <md-select-option value="{{$cc->id}}">
                            <div slot="headline" value="{{$cc->id}}">{{$cc->catename}}</div>
                        </md-select-option>
                         @endforeach
                    </md-filled-select> -->


                </div>
                <div class="mb-3">
                    <input type="file" name="slimg" required class="form-control"><br>
                    <md-filled-button>Upload</md-filled-button>
                </div>
            </form>
        </div>
    </div>

    <div class="row g-2 box">
        <table>
            <tr>
                <td>Id</td>
                <td>Image</td>
                <td>category</td>
                <td>Action</td>
            </tr>
            @foreach($sl as $ss)
            <tr>
                <td>
                    {{$ss->id}}
                </td>
                <td>
                    <img src="{{asset('storage/'.$ss->path)}}" height="100px" width="100px">
                </td>
                <td>
                    {{$ss->Category->catename}}
                </td>
                <td>
                    <md-outlined-button>Delete</md-outlined-button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <br>
    <div class="material">
        <md-list style="max-width: 400px;">
            @foreach($sl as $ss)
            <md-list-item>
                {{$ss->id}}
                {{$ss->Category->catename}}
                <img slot="start" style="width: 56px" src="{{asset('storage/'.$ss->path)}}">
            </md-list-item>
            <md-divider></md-divider>
            @endforeach
        </md-list>
    </div>






</div>
@endsection