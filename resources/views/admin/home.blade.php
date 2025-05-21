@extends('admin/layouts/base')

@section('menu')
<md-list style="border-radius:25px;">
    <md-list-item>
        Welcome {{ session('username') }}
    </md-list-item>
    <md-divider></md-divider>
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
    </md-list-item>
    <md-divider></md-divider>
    <md-list-item type="link" href="{{route('logout')}}">
        LogOut
    </md-list-item>
</md-list>
@endsection
@section('content')

<div class="p-3">
    <div class="row">
        <div class="col-lg-6">
            <canvas id="userChart" width="400" height="200"></canvas>
            @foreach($ccount as $cc)
           <h1>{{$cc->products_count}}</h1>
           <h1>{{$cc->catename}}</h1>
           @endforeach
        </div>
        <div class="col-lg-6"></div>
    </div>

    <div class="row g-2">
        <div class="col-lg-6 ">
            <div class="p-3 shadow-lg rounded rounded-3">
                <h3 class="text-center text-white">Image Upload</h3>
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
                        <input type="file" name="slimg" required class="form-control form-control-lg"><br>
                        <md-filled-button>Upload</md-filled-button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-3 shadow-lg rounded rounded-3">
                <table class="table text-white">
                    <tr class="text-uppercase">
                        <th>Id</th>
                        <th>Image</th>
                        <th>category</th>
                        <th>Action</th>
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
        </div>
    </div>
    <!-- <div class="material">
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
    </div> -->






</div>
@endsection