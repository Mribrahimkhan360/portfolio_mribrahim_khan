@extends('admin.master')

@section('title')
    Portflio Website
@endsection

@section('body')

    <!-- Page Body start -->
    <div class="page-body-wrapper">

        <div class="page-body">
            <div class="title-header">
                <h5>Edit Biography Info</h5>
                <p class="text-center text-success">{{Session::get(('message'))}}</p>
                <form action="{{route('biography.update', ['id' => $biography->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- New Product Add Start -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-header-2">
                                                    <h5>Biography Information</h5>
                                                </div>

                                                <form class="theme-form theme-form-2 mega-form">
                                                    <div class="row">
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Your
                                                                Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="name" type="text" value="{{$biography->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Subtitle</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="subtitle" type="text" value="{{$biography->subtitle}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">E-mail</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="email" name="email" value="{{$biography->email}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Mobile</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="mobile" type="number" value="{{$biography->mobile}}">
                                                            </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Age</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="age" type="number" value="{{$biography->age}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Born</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="born" type="text" value="{{$biography->born}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Project</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="project" type="text" value="{{$biography->project}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Experience</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="experience" type="text" value="{{$biography->experience}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Client</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="client" type="text" value="{{$biography->client}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Profession Type One</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="profession_type_one" type="text" value="{{$biography->profession_type_one}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Profession Type Two</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="profession_type_two" type="text" value="{{$biography->profession_type_two}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Profession Type Three</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="profession_type_three" type="text" value="{{$biography->profession_type_three}}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Image</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="image" class="form-control-file"/>
                                                                <img src="{{asset($biography->image)}}" alt="" height="100"/>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">PDF</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="pdf" class="form-control-file"/>
                                                                <img src="{{asset($biography->pdf)}}" alt="" height="100"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-header-2">
                                                    <h5>Description</h5>
                                                </div>
                                                <div class="theme-form theme-form-2 mega-form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <label class="form-label-title col-sm-2 mb-0">Product
                                                                    Description</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="description" id="editor">{{$biography->description}}</textarea>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8"></div>
                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-primary w-100 mt-4" data-bs-original-title="" title="">Update
                                                                            Banner</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- New Product Add End -->

                <!-- footer Start -->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2023 © Ibrahim Khan</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer En -->
            </div>
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
@endsection
