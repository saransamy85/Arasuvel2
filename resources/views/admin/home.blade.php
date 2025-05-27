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
    <md-divider></md-divider>
</md-list>
@endsection
@section('content')

<div class="p-3">

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
                        <input type="text" name="ttle" required class="form-control" placeholder="Enter title"><br>
                        <input type="text" name="alt" required class="form-control" placeholder="Enter alt"><br>
                        <input type="text" name="desc" required class="form-control"
                            placeholder="Enter description"><br>
                        <input type="file" name="slimg" required class="form-control form-control-lg"><br>
                       
                        <md-elevated-button><span class="material-symbols-outlined addbtn">
                                file_upload
                            </span><span>Upload</span></md-elevated-button>
                    </div>
                </form>
                <br>
                <table class="table text-uppercase text-white">
                    <tr>
                        <th>Catergory</th>
                        <th>No of Image</th>
                    </tr>
                    @foreach($ccount as $cc)
                    <tr>
                        <td>{{$cc->catename}}</td>
                        <td>{{$cc->products_count}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-3 shadow-lg rounded rounded-3">
                <table class="table text-white">
                    <tr class="text-uppercase text-white">
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
                            <form method="post" action="{{route('pdel',$ss->id)}}">
                                @csrf
                                <!-- <md-elevated-button><span class="material-symbols-outlined">
                                        edit
                                    </span></md-elevated-button> -->
                                <md-elevated-button><span class="material-symbols-outlined cdelbtn">delete</span>
                                </md-elevated-button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 ">
            <div class="p-3 shadow shadow-lg rounded rounded-4">
                <canvas id="categoryChart" style="height:50px; width:100px;color:white;"></canvas>
            </div>
            <script>
            const ctx = document.getElementById('categoryChart').getContext('2d');

            const categoryChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {
                        !!json_encode($labels) !!
                    },
                    datasets: [{
                        label: 'Number of Products',
                        data: {
                            !!json_encode($data) !!
                        },
                        backgroundColor: 'rgba(153, 102, 255, 0.6)',
                        borderColor: 'rgb(216, 212, 223)',
                        barPercentage: 0.5,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        x: {
                            ticks: {
                                color: 'white' // X-axis label color
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#34495E' // Y-axis label color
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white' // Legend text color
                            }
                        },
                        title: {
                            display: true,
                            text: 'Image count',
                            color: 'white', // Title color
                            font: {
                                size: 18
                            }
                        }
                    }
                }
            });
            </script>

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