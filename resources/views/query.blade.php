<link rel="stylesheet" type="text/css" href="/css/style.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<script type="text/javascript" src="/js/app.js"></script>

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>


<!DOCTYPE html>
<html>

<head></head>

<body>
    <p>nama : joselyn amanda</p>
    <p>nim : 03081200019 </p>
    <img src="images/logouph.jpg" alt="">
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">notransaksi</th>
            <th scope="col">namastatus</th>
          </tr>
        </thead>
        <tbody>
    <?php
          $rows = \DB::select('select notransaksi, namastatus  from statustransaksisaya');
          foreach($rows as $row)
          echo'  <tr>
            <td scope="row">'.$row->notransaksi.'</td>
            <td>'.$row->namastatus.'</td>
          </tr>';
          ?>
           </tbody>
      </table>
</body>
</html>