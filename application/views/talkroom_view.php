<html>

<head>
    <meta charset="UTF-8">
    <title>Fire.app Demo</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>


    <div class="row">
        <div class="col-sm-6">
            <form role="form" method="POST" action="/ci/index.php/talk" >
                <div class="form-group">
                    <label>姓名</label>
                    <input type="text" class="form-control" placeholder="name" name="name">
                </div>
                
                <div class="form-group">
                    <label>主旨</label>
                    <input type="text" class="form-control" placeholder="main" name="main">
                </div>
                



				<div class="form-group">
                    <label>內容</label>
                    <textarea class="form-control" rows="2" name="message"> </textarea>
                </div>


                <div class="form-group">
                    <label>
                        <button class="btn btn-primary" >送出</button>
                    </label>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>            



</body>
</html>