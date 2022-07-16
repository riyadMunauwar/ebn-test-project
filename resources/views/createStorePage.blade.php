@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('header')
    @include('sections.header')
@endsection


@section('main')
    <div class="create-store py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Create your store
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/store/create') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <label for="storename" class="form-label">Store name</label>
                                <div class="input-group mb-3">
                                    <input id="storename" name="name" type="text" placeholder="Store name " class="form-control">
                                </div>
                                @error('name')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                                <label for="storeslug" class="form-label">Store slug</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">www.ebnshop.com/</span>
                                    <input id="storeslug" name="slug" type="text" placeholder="Store slug" class="form-control">
                                </div> 
                                @error('slug')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror                              
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="storelogo" class="form-label">Logo</label>
                                        <div class="input-group">
                                            <input id="storelogo" name="logo" type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img id="logo-priview" src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image-300x225.png" class="img-thumbnail" alt="...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <label for="type" class="form-label">Store Type</label>
                                    <div class="input-group mb-3">
                                        <select name="type" class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>                                       
                                    </div>
                                    <div class="col-md-4">
                                        <label for="country" class="form-label">Country</label>
                                        <select name="country" id="country" class="form-select">
                                            <option selected value="Bangladesh">Bangladesh</option>
                                            <option  value="India">India</option>
                                            <option  value="Pakistan">Pakistan</option>
                                        </select >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="District" class="form-label">District</label>
                                        <div class="input-group">
                                            <input name="district" placeholder="District" id="District" name="country"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="Upazila" class="form-label">Upazila</label>
                                        <div class="input-group mb-3">
                                            <input name="upazila" id="Upazila" type="text" class="form-control">
                                        </div>                                       
                                    </div>
                                    <div class="col-md-4">
                                        <label for="postcode" class="form-label">Post code</label>
                                        <div class="input-group">
                                            <input name="postcode" id="postcode" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="adress" class="form-label">Adress</label>
                                            <div class="input-group">
                                                <input name="adress" id="adress" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                    <label for="Phone" class="form-label">Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-text">+880</div>
                                            <input name="phone" placeholder="Phone" id="country" name="country"  type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-5">
                                        <label for="email" class="form-label">Contact Email</label>
                                         <input name="email" type="email" placeholder="Email" class="form-control">
                                    </div>
                                    <input type="submit" value="Create Store" class="w-50 mx-auto btn btn-dark">

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer>
    (function(){
        var uploadButton = document.querySelector('#storelogo');

        uploadButton.addEventListener('change', function(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("logo-priview");
            preview.src = src;
            // preview.style.display = "block";
            // alert('hi')

        }
        })
    })()
    </script>

@endsection



@section('footer')
    @include('sections.footer')
@endsection

