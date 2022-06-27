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
        <h2>Máy tính hai số</h2>
        @if ($errors ->any())
            <div class="text-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form class="form" action ="caculate" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <input type="text" name= "a"class="form-control" placeholder="Nhap so a"  value="{{isset($a)? $a:""}}"><br>
                    <input type="text" name="b"class="form-control" placeholder="Nhap so b" value="{{isset($b)? $b:""}}">
                </div>
                <div class="col-6"><ul>
                    <li><input type="radio" id="" class="form-check-input"name="site" value="+" {{isset($site) && $site =="+" ?  "checked" :""}}>
                        <label for="html">+</label>
                    </li>
                    <li><input type="radio" id="" class="form-check-input"name="site" value="-" {{isset($site) && $site =="-" ?  "checked" :""}}>
                        <label for="css">-</label>
                    </li>
                    <li>
                        <input type="radio" id="" class="form-check-input"name="site" value="*" {{isset($site) && $site =="*" ?  "checked" :""}}>
                        <label for="">*</label>
                    </li>
                    <li>
                        <input type="radio" id="" class="form-check-input" name="site" value="/" {{isset($site) && $site =="/" ?  "checked" :""}}>
                        <label for="">/</label>
                    </li>
                </ul></div>
            </div>
            
            
            
            
            
            <button type="submit"class="btn btn-outline-primary">Tính</button>
        </form>
        
        <h4>{{isset($result)? $result:""}}</h4>
    </div>
</body>
</html>