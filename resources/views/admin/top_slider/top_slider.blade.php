<!DOCTYPE html>
<!-- <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                    <img style="height: 30vh" src="{{(@$main->bc_img)?url($main->bc_img):asset("assets/images/top_part/slider1.jpeg")}}" class="img-thumbnail">
                    <input class="mt-3" type="file" id="bc_img" name="bc_img">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">
                            <h4>Title</h4>
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{(@$main->title)?$main->title:"The title" }}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title">
                            <h4>Sub Title</h4>
                        </label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{(@$main->subtitle)?$main->sub_title:"Sub Title" }}">
                    </div>
                    <div>
                        <h4>Upload Resume</h4>
                        <input class="mt-2" type="file" id="resume" name="resume">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5"> -->

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../admin/assets/" data-template="vertical-menu-template-free">

<head>
    @include('admin.css')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Menu -->
            @include('admin.sidebar')
            <!-- / Menu -->



            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 style="margin-left: 30px;" class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Frontend/</span> Banner Image</h4>


                <div class="row" style="margin-left: 20px;">

                    @if (session()->has('message'))

                    <div class="alert alert-success alert-dismissible" role="alert">

                        {{session()->get('message')}}

                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    @endif



                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Top Image</h5>
                                <small class="text-muted float-end"></small>
                            </div>
                            <div class="card-body">

                                <form action="{{ url('edit_top_slider') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT')}}

                                    <div class="row">
                                        <div class="form-group col-md-3 mt-3">
                                            <h3>Background Image</h3>

                                            <!-- <img style="height: 30vh" src="{{(@$main->bc_img)?url($main->bc_img):asset("assets/img/bc_img.jpg")}}" class="img-thumbnail"> -->
                                            <img style="height: 30vh" src="assets/images/top_part/{{ $data->bg_image }}" class="img-thumbnail">
                                            <h4 style="margin-top: 20px;">Upload Slider Image</h4>
                                            <input class="mt-3" type="file" id="bg_image" name="bg_image">
                                        </div>
                                        <div class="form-group col-md-4 mt-3">
                                            <div class="mb-3">
                                                <label for="title">
                                                    <h4>Title</h4>
                                                </label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{(@$data->title)?$data->title:'The title'}}">
                                            </div>
                                            <div class="mb-5">
                                                <label for="sub_title">
                                                    <h4>Sub Title</h4>
                                                </label>
                                                <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{(@$data->sub_title)?$data->sub_title:'Sub Title'}}">
                                            </div>
                                            <div>
                                                <h4>Upload Resume</h4>
                                                <input class="mt-2" type="file" id="resume" name="resume">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary mt-5">
                            </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>


    <div class="layout-overlay layout-menu-toggle"></div>

    </div>
    <!-- / Layout wrapper -->

    @include('admin.script')


</body>

</html>