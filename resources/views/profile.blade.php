@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="col-md-10 ">
        <form class="form-horizontal">
            <fieldset> 

            <!-- Form Name -->
                <legend><b><i>User Profile</i></b></legend> <br>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>  
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            <input id="fname" name="fname" type="text" placeholder="Firstname" class="form-control input-md">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="mname" name="mname" type="text" placeholder="Midlle Name" class="form-control input-md">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="lname" name="lname" type="text" placeholder="Lastnames" class="form-control input-md">
                        </div>
                    </div>
                </div>
            </div>

            <!-- File Button --> 
            <div class="form-group">
            <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
            <div class="col-md-4">
                <input id="Upload photo" name="Upload photo" class="input-file" type="file">
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>  
            <div class="col-md-4">
            <div class="input-group">   
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fa fa-birthday-cake"></span></div>
                </div>
                <input id="Date Of Birth" name="Date Of Birth" type="date" placeholder="Date Of Birth" class="form-control input-md">
                </div>
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Date Of Birth">Father's name</label>  
            <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fa fa-male"></span></div>
                </div>
                <input id="father" name="Date Of Birth" type="text" placeholder="Father's name" class="form-control input-md">
                </div>
            </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Date Of Birth">Mother's name</label>  
            <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fa fa-female"></span></div>
                </div>
                <input id="mother" name="Date Of Birth" type="text" placeholder="Mother's name" class="form-control input-md">
                </div>
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Permanent Address</label>  
                <div class=row>
                    <div class="col-md-3  col-xs-4">
                        <input id="Permanent Address" name="Permanent Address" type="text" placeholder="District" class="form-control input-md ">
                    </div>

                    <div class="col-md-3 col-xs-4">
                        <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Area" class="form-control input-md ">
                    </div>

                    <div class="col-md-3  col-xs-4">
                        <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Street" class="form-control input-md ">
                    </div>

                </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Temporary Address</label>  
                <div class=row>
                    <div class="col-md-3  col-xs-4">
                        <input id="Permanent Address" name="Permanent Address" type="text" placeholder="District" class="form-control input-md ">
                    </div>

                    <div class="col-md-3 col-xs-4">
                        <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Area" class="form-control input-md ">
                    </div>

                    <div class="col-md-3  col-xs-4">
                        <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Street" class="form-control input-md ">
                    </div>

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Skills">Skills</label>  
            <div class="col-md-4">
            <div class="input-group">
            <div class="input-group-append">
                    <div class="input-group-text"><span class="fa fa-graduation-cap"></span></div>
                </div>
                <input id="Skills" name="Skills" type="text" placeholder="Skills" class="form-control input-md">
                </div>
            
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Phone number ">Phone number </label>  
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fa fa-phone"></span></div>
                        </div>
                            <input id="Phone number " name="Phone number " type="text" placeholder="Primary Phone number " class="form-control input-md">
                        
                        </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Email Address">Email Address</label>  
            <div class="col-md-4">
                <div class="input-group">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fa fa-envelope"></span></div>
                    </div>
                        <input id="Email Address" name="Email Address" type="text" placeholder="Email Address" class="form-control input-md" value="{{ Auth::user()->email }}">
                
                </div>
            
            </div>
            </div>

                <div class="form-group">
                <label class="col-md-4 control-label" ></label>  
                    <div class="col-md-4">
                        <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</a>
                        <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>
@endsection