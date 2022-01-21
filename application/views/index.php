<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Tutorial Membuat Ajax Request Page On Modal Dengan Codeigniter</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   </head>
<body>
    <div class="container">
        <h3>Upload Gambar dengan JQuery Ajax & Codeigniter</h3>
        <form action="" id="formUpload" method="POST" class="form-horizontal"  role="form">
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Pilih Gambar:</label>
                    <div class="col-sm-10">
                        <input type="file" name="gambar"class="form-control" value="" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
        </form>
        <div id="fotoUploadedContainer"></div>
   </div>
   <script>
        $(function () {
            $('#formUpload').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?=site_url('ajaxuploadgambar/uploadgambar');?>",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data)
                    {
                        $("#fotoUploadedContainer").html(data);
                    }	        
                });
            });
        });
    </script>
</body>
</html>