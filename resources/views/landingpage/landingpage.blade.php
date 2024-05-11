<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>
<body>
    @include("components.navbar")
    @include("user.login")

   <div class="row mx-1 mt-1">
        <div class="col-10">
            <h4>Jadwal Nobar</h4>
        </div>
        <div class="col text-end ps-5">
            <select style="width : 100px;" class="form-select form-select-sm ms-5 me-auto" aria-label="Small select example">
                <option selected>filter</option>
                <option value="1">Free</option>
                <option value="2">Pay</option>
            </select>
        </div>
   </div>

    <div class="row mt-2">
        @for($i=0; $i< 6; $i++)
        <div class="col-4">
            <div class="card mx-1 my-1" style="width: auto;">
                <div style="width : 50px; height : 100px;"></div>
                <div class="card-body">
                    <h5 class="card-text">Nobar Final liga Champions {{ $i+1 }}</h5>
                    <p>Real Madrid VS Borusia Dortmun</p>
                    <p>2-06-2024  <strong>50 Seat</strong>  <button type="button" class="btn btn-success">free</button></p>
                    <p>Gedung serbaguna, Sukabumi</p>
                </div>
                <div class="card-footer">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">tertarik</button>
                </div>
            </div>
        </div>
        @endfor
    </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
