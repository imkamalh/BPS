@extends('layouts.master')
    @section('title')
        Survey Form
    @endsection
    
    @section('css')
        <link href="{{ asset('assets/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/bower_components/google-material-color/dist/palette.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/farbtastic/farbtastic.css') }}" rel="stylesheet') }}">
        <link href="{{ asset('assets/vendors/bower_components/chosen/chosen.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/summernote/dist/summernote.css') }}" rel="stylesheet">
    @endsection

    @section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Survey Creating</h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Remember :<small>
                            1. Define your survey's name <br>
                            2. Assign a number of phase <br>
                            3. Determine an admin of survey Extend form controls by adding text or buttons before, after, or on both sides of any text-based inputs.</small></h2>
                        </div>
                        <br/>
                    </div>
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('survey/create') }}">
                        <div class="card">
                            <div class="card-header">
                                <h2>Form Create Survey</h2>
                            </div>
                            <br/>
                            <div class="card-body card-padding">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                            <div class="fg-line">
                                                    <input type="text" name="namasurvey" class="form-control" placeholder="Nama Survey">
                                            </div>
                                        </div>

                                        <br/>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                            <div class="fg-line">
                                                <input type="number" id="namatahapan" name="namatahapan[]" class="form-control" placeholder="Jumlah Tahapan">
                                            </div>
                                        </div>
                                        
                                       <table class="table-common">
                                          <tr><th style="width:200px">Item</th><th style="width:200px">Nominal</th></tr>
                                          <tr id="item"><td><input type="text" name="item[]"></td><td><input type="text" name="nominal[]"></td></tr>
                                       </table>

                                        <a onclick="tambah()" style="cursor:pointer;text-decoration:underline;">Tambah form</a><br/><br/>

                                        <input type="submit" name="submit" value="Submit">   
                                         
                                        <br/>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>

                                        <br/>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Home Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      <div class="card">
                            <div class="card-body card-padding">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                            <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>

                                        <br/>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Contact Number">
                                            </div>
                                        </div>

                                        <br/>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>

                                        <br/>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Home Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <button type="submit" class="btn palette-Teal bg">Create</button>
                    </form>
                    
                </div>
            </section>
@endsection

@section('js')
        <script src="{{ asset('assets/js/jumlahtahapan.js') }}"></script>
        <script src="{{ asset('assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>

        <script src="{{ asset('assets/vendors/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
        <script src="{{ asset('assets/vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/summernote/dist/summernote-updated.min.js') }}"></script>


        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="{{ asset('assets/endors/bower_components/chosen/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/fileinput/fileinput.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/input-mask/input-mask.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/farbtastic/farbtastic.min.js') }}"></script>
        
@endsection