@extends('layouts.app')
@section('content')

    
<div class="row justify-content-center ">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header mt-4">Create Listing
                <a href="{{route('dashboard')}}" class="pull-right btn btn-default btn-xs" style="float:right;">Go Back</a>
            </div>

            <div class="card-body">
                <form method="POST" action="{{route('listing.store')}}">

    
                    @csrf
                            
                    {{--                Name     --}}
                    <div class="form-group">
            
                    <label class="la">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Company Name"/>
            
                    @error('name')                   {{--  error message   --}}
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                
                    </div>
                    <div class="form-group">
                        <label class="la">Email</label>
                       
                        <input type="text" class="form-control" name="email" placeholder="Contact Email"/>
                        @error('email')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="la">Website</label>
                       
                        <input type="text" class="form-control" name="website" placeholder="Write The Website"/>
                        @error('website')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
            
                    <div class="form-group">
            
                    <label class="la">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Contact Phone"/>
                        @error('phone')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
        
                        <label class="la">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Business Address"/>
                            @error('address')
                            <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="form-group">
        
                        <label class="la">Bio</label>
                            <textarea type="text" class="form-control" name="bio" rows="6" placeholder=""></textarea>
                               
                            @error('bio')
                            <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                    </div>
                   
                    <input type="submit" class="btn btn-primary" value="Save" />
                </form>
            </div>
        </div>
    </div>
</div>
    @stop