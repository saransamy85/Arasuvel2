@extends('admin/layouts/base')

@section('menu')
<div class="mb-3">
   <md-list>
  <md-list-item type="link"
      href="{{route('home')}}">
    Home
  </md-list-item>
  <md-divider></md-divider>
  <md-list-item type="link" href="{{route('category')}}">
   Category
  </md-list-item>
  <md-divider></md-divider>
  <md-list-item type="link" href="{{route('dashboard')}}">
    Product
</md-list>
</div>
@endsection
@section('content')
<div class="row g-2">

    <div class="col-lg-6">
        <h3>Catagories Created</h3>
        <form action="" method="Post">
            @csrf
            <div class="mb-3">
                <input type="text" name="catename" class="form-control" required>
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
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ACTION</th>
            </tr>
            @foreach($cates as $catedisplay)
            <tr>
                <td>{{ $catedisplay->id }}</td>
                <td>{{ $catedisplay->catename }}</td>
                <td>
                    <md-elevated-button type="link" href="#" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $catedisplay->id }}">Edit</md-elevated-button>
                    <!-- Edit Button -->
                    <!-- <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $catedisplay->id }}">
                        Edit
                    </a> -->

                    <!-- Delete Button -->
                    <form action="{{route('cdel',$catedisplay->id)}}" method="post">
                        @csrf
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
                                        <h5 class="modal-title" id="editModalLabel{{ $catedisplay->id }}">Update
                                            Category
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="id{{ $catedisplay->id }}" class="form-label">ID</label>
                                            <input type="text" class="form-control" id="id{{ $catedisplay->id }}"
                                                value="{{ $catedisplay->id }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="catename{{ $catedisplay->id }}" class="form-label">Category
                                                Name</label>
                                            <input type="text" class="form-control" name="name"
                                                id="catename{{ $catedisplay->id }}" value="{{ $catedisplay->catename }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
    <div class="col-lg-6">
        <md-list style="max-width: 400px;">
            @foreach($cates as $catedisplay)
            <md-list-item>
                {{ $catedisplay->catename }}
                <img slot="end" style="width: 56px" src="https://placekitten.com/112/112">
            </md-list-item>
            <md-divider></md-divider>
            @endforeach
        </md-list>
    </div>
</div>
@endsection