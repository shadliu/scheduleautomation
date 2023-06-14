<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
    <form method="GET" action="{{ route('subscribe') }}">
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email " value="{{ old('email') }}" name="email" required>
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Subscribe &nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
        @error('email')
            <span class="text-danger fw-bolder"> {{ $message }} </span>
        @enderror
    </form>
</div>

