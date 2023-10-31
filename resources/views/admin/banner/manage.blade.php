@extends('admin.master')

@section('title')
    Portflio Website
@endsection
@section('body')
    <div class="page-body">
        <!-- Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-desi">
                                    <table class="table table-striped all-package">
                                        <thead>
                                        <tr>
                                            <th>Order Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($banners as $banner)
                                        <tr>
                                            <td>
                                                            <span>
                                                                <img src="{{asset($banner->image)}}" alt="users">
                                                            </span>
                                            </td>

                                            <td>{{$banner->name}}</td>

                                            <td>{{$banner->email}}</td>

                                            <td>{{$banner->mobile}}</td>

                                            <td>
                                                {{$banner->address}}
                                            </td>

                                            <td>{{$banner->status == 1 ? 'Published' : 'Unpublished'}}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <span class="lnr lnr-eye"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('banner.edit', ['id' => $banner->id])}}" class="btn btn-success btn-sm">
                                                            <span class="lnr lnr-pencil text-white"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('banner.delete', ['id' => $banner->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this.');">
                                                            <span class="lnr text-white lnr-trash"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination Box Start -->
                        <div class=" pagination-box">
                            <nav class="ms-auto me-auto " aria-label="...">
                                <ul class="pagination pagination-primary">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0)">Previous</a>
                                    </li>

                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Table End -->
    </div>
@endsection
