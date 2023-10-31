@extends('admin.master')

@section('title')
    Portflio Website
@endsection

@section('body')

    <!-- Page Body start -->
    <div class="page-body-wrapper">

        <div class="page-body">
            <div class="title-header">
                <h5>Add Biography Info</h5>
                <p class="text-center text-success">{{Session::get(('message'))}}</p>
                <form action="{{route('biography.create')}}" method="POST" enctype="multipart/form-data">
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
                                                            <label class="form-label-title col-sm-2 mb-0">Full
                                                                Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="name" type="text"
                                                                       placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Subtitle
                                                                </label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="subtitle" type="text"
                                                                       placeholder="Subtitle">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Your
                                                                E-mail</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="email" type="email"
                                                                       placeholder="yourmail@mail.com">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Age</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="age" type="number"
                                                                       placeholder="18">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Mobile</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="mobile" type="number"
                                                                       placeholder="+880130000000">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-2 mb-0">Born</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="born" type="text"
                                                                       placeholder="Florida, USA">
                                                            </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Experience</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="experience" type="text"
                                                                       placeholder="50+">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Project</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="project" type="text"
                                                                       placeholder="40+">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Client</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="client" type="text"
                                                                       placeholder="20+">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Profession
                                                                Type</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="profession_type_one" type="text"
                                                                       placeholder="Web Developer">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Profession
                                                                Type</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="profession_type_two" type="text"
                                                                       placeholder="Designer">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Profession
                                                                Type</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="profession_type_three" type="text"
                                                                       placeholder="Comparative Programmer">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">Image</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="image" class="form-control-file"/>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-2 col-form-label form-label-title">PDF</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="pdf" class="form-control-file"/>
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
                                                                <label class="form-label-title col-sm-2 mb-0">Description</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="description" id="editor"></textarea>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8"></div>
                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-primary w-100 mt-4" data-bs-original-title="" title="biography">Add
                                                                            Biography</button>
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
                                <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
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
