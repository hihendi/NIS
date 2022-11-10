@extends('layouts.app')
@section('title', 'NIS | Role Manage')

@push('addon-style')
<!-- Custom styles for this page -->
<link href="{{asset('admin/assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Roles</h1>
    <p class="mb-4">Menampilkan role-role yang dapat digunakan untuk User </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $no= 1;

                        @endphp
                        @foreach ($roles as $role)


                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$role->roles}}</td>
                            <td>{{$role->created_at}}</td>
                            <td>
                                <form action="{{route('roles.destroy', $role->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@push('addon-script')
<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin/assets/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('admin/assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin/assets/js/demo/datatables-demo.js')}}"></script>

@endpush