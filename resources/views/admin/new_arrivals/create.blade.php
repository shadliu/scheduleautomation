@extends('admin.layouts.app')
@section('title',' New Arrivals Medicine')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Create New Arrivals</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Create New Arrivals Medicine</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Arrivals Medicine</h4>
                    </div>
                    <form method="POST" action="{{ route('newarrivals.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Medicine Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="name" name="medicine_name" value="{{ old('medicine_name'); }}" required>
                                        @error('medicine_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Medicine Price</label>
                                        <input type="number" class="form-control" id="field-2" placeholder="price ($)" name="price" value="{{ old('price'); }}" required>
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Return Policy (Days)</label>
                                        <input type="number" class="form-control" id="field-2" placeholder="return policy (Day)" name="return_policy" value="{{ old('return_policy'); }}" required>
                                        @error('return_policy')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Medicine Image <span class="text-light"> &nbsp;(Preferable width : 380px Height: 310px)</span></label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="image" />
                                    </button><br>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Medicine Description</label>
                                        <textarea style="height: 220px;" type="text" class="form-control" placeholder="Medicine Description" name="description" required></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('newarrivals.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Published Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

