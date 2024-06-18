<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Street Address Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('validate.address') }}" class="mt-5 p-4 border rounded">
            @csrf
            <h2 class="text-center mb-4">Street Address Validation</h2>

            <!-- Success Message -->
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif


            <!-- Street -->
            <div class="mb-3">
                <label for="street" class="form-label">Street</label>
                <input type="text" class="form-control" id="street" name="street" value="{{ old('street') }}" required />
            </div>

            <!-- City -->
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required />
            </div>

            <!-- State -->
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required />
            </div>

            <!-- Zip Code -->
            <div class="mb-3">
                <label for="zip_code" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ old('zip_code') }}" required />
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">
                Validate Address
            </button>
        </form>
    </div>
</body>

</html>