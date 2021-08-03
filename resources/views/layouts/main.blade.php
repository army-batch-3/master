<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>   
    <div class="row">
        <div class="col-12">
            @include('components.navbar')
        </div>
    </div>

    <div class="row">
        <div class="col-3 p-0">
            @include('components.sidebar')
        </div>
        <div id="content" class="col-9 p-4">
            @yield('content')
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                          <label class="form-label">Email address</label>
                          <input type="email" class="form-control"> 
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control">
                        </div> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

   


    <style>
        .table>:not(:last-child)>:last-child>*{
            border-bottom-color: #eaeaea;
        }
        .page-link{
            color: #6d767e;
        }
        .nav-link { 
            color: #ffffff;
        }
        .page-item.active .page-link { 
            background-color: #ffc007;
            border-color: #ffc007;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
            background-color: #ffc007;
        } 
        #sidebar{
          height: 100vh;
        }
        body{
          overflow: hidden;
          background: #e9e9e9;
        }
        #content{ 
          overflow-y: scroll; 
          height: 90vh; 
          background: #e9e9e9;
        }
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>