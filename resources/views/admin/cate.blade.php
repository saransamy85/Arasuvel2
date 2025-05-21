@extends('admin/layouts/base')

@section('menu')
<div class="mb-3">
    <md-list style="border-radius:25px;">
        <md-list-item type="link" href="{{route('home')}}">
            Home
        </md-list-item>
        <md-divider></md-divider>
        <md-list-item type="link" href="{{route('category')}}">
            Category
        </md-list-item>
        <md-divider></md-divider>
        <md-list-item type="link" href="{{route('dashboard')}}">
            Product
        </md-list-item>
        <md-divider></md-divider>
        <md-list-item type="link" href="{{route('logout')}}">
            LogOut
        </md-list-item>
    </md-list>
</div>
@endsection
@section('content')
<div class="p-3">
    <div class="row g-2">
        <div class="col-lg-6">
            <div class="p-3 shadow-lg rounded rounded-3">
                <h3 class="text-center text-white">Catagories Created</h3>
                <form action="" method="Post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="catename" class="form-control" required placeholder="Enter Catergory Name">
                        <br>
                        <md-filled-tonal-button>
                            CREATE
                            <svg slot="icon" viewBox="0 0 48 48">
                                <path d="M6 40V8l38 16Zm3-4.65L36.2 24 9 12.5v8.4L21.1 24 9 27Zm0 0V12.5 27Z" />
                            </svg>
                        </md-filled-tonal-button>
                        <!-- <input type="submit" class="btn btn-success" value="Create category"> -->
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-3 shadow-lg rounded rounded-3">
                <table class="table text-white">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($cates as $catedisplay)
                    <tr>
                        <td>{{ $catedisplay->id }}</td>
                        <td>{{ $catedisplay->catename }}</td>
                        <td colspan="2">
                            <md-elevated-button type="link" href="#" data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $catedisplay->id }}"><span
                                    class="material-symbols-outlined">
                                    edit
                                </span></md-elevated-button>
                            <!-- Edit Button -->
                            <!-- <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $catedisplay->id }}">
                        Edit
                    </a> -->

                            <!-- Delete Button -->
                            <form action="{{route('cdel',$catedisplay->id)}}" method="post">
                                @csrf
                                <!-- <md-fab label="delete">
                                    <md-icon slot="icon">delete</md-icon>
                                </md-fab> -->
                               
                                <md-elevated-button>Delete</md-elevated-button>
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                            </form>

                            <!-- Modal -->
                            <div class="modal fade" id="editModal{{ $catedisplay->id }}" tabindex="-1"
                                aria-labelledby="editModalLabel{{ $catedisplay->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="{{ route('cupdate', $catedisplay->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-black"
                                                    id="editModalLabel{{ $catedisplay->id }}">Update
                                                    Category
                                                </h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <!-- <label for="id{{ $catedisplay->id }}"
                                                        class="form-label text-black">ID</label>
                                                    <input type="text" class="form-control"
                                                        id="id{{ $catedisplay->id }}" value="{{ $catedisplay->id }}"
                                                        readonly> -->

                                                    <md-outlined-text-field label="ID" type="number" name="name"
                                                        id="id{{ $catedisplay->id }}" value="{{ $catedisplay->id }}"
                                                        readonly>
                                                    </md-outlined-text-field>
                                                </div>
                                                <div class="mb-3">

                                                    <md-outlined-text-field label="Category Name" type="text"
                                                        name="name" id="catename{{ $catedisplay->id }}"
                                                        value="{{ $catedisplay->catename }}" required>
                                                    </md-outlined-text-field>
                                                    <!-- <input type="text" class="form-control" name="name"
                                                        id="catename{{ $catedisplay->id }}"
                                                        value="{{ $catedisplay->catename }}" required> -->
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <md-elevated-button  data-bs-dismiss="modal">Close</md-elevated-button> -->
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                                    <md-elevated-button>Update</md-elevated-button>
                                                <!-- <button type="submit" class="btn btn-primary">Update</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Modal -->
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection