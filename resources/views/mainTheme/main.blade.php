<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/mStyle.css') }}">
</head>

<body>
  <div class="bgDark">
    <div class="nav-fix text-right">
      @php $mytime = Carbon\Carbon::now(); echo $mytime->toDateTimeString(); @endphp
    </div>
    <div class="wrap-nav">
      <div id="nav-show">
        <div class="logohere">
          Logo Here
        </div>
        <div class="the-users">
          guest
        </div>
        <a href="/">
        <h3><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</h3>
        </a>
        <a href="{{ route('bookStore.create') }}">
          <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Book</h3>
        </a>
        <a href="{{ route('category.index') }}">        
          <h3><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Book Category</h3>
        </a>
        <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> List Book</h3>

        <h3><i class="fa fa-wrench" aria-hidden="true"></i> Manage Book</h3>

        <hr>
        <h3><i class="fa fa-home" aria-hidden="true"></i> Back Home</h3>
        <h3><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</h3>
      </div>
      <div id="nav-hide">
      </div>
      <div id="content">
        @yield('content')
      </div>
    </div>
  </div>
  {{-- script jQuery --}}
  <script src="{{ URL::to('js/app.js') }}"></script>
  <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

      $('input , textarea').focus(function () {
        $(this).parents('.form-group').addClass('focused');
      });

      $('input , textarea').blur(function () {
        var inputValue = $(this).val();
        if (inputValue == "") {
          $(this).removeClass('filled');
          $(this).parents('.form-group').removeClass('focused');
        } else {
          $(this).addClass('filled');
        }
      })

    })
  </script>
</body>

</html>