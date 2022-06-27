<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giai phuong trinh bac nhat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Giải phương trinh bậc nhất</h2>
        @if ($errors ->any())
            <div class="text-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form class="form" action ="ptbn" method="POST">
            @csrf
            <input type="text" name= "a"placeholder="Nhap he so a" value="{{isset($a)? $a:""}}">
            <label>x+</label>
            <input type="text" name="b" placeholder="Nhap he so b" value="{{isset($b)? $b:""}}">
            <label>=0</label>
            <button type="submit">Giai phuong trinh</button>
            {{-- <input type="text" value="{{isset($nghiem)? $nghiem:""}}" > --}}
        </form>
        @error('a')
            <div class="alert alert-danger">Bạn nhập sai kiểu dữ liệu</div>
        @enderror
        @error('b')
            <div class="alert alert-danger">Bạn nhập sai kiểu dữ liệu</div>
        @enderror
        <h4>{{isset($nghiem)? $nghiem:""}}</h4>
    </div>
</body>
</html>