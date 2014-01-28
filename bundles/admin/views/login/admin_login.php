<html>
<head><title>Admin-Authentication</title>
    <?php
    echo Asset::container('header')->styles();
    echo Asset::container('header')->scripts();
    ?>
</head>
<body>
<div class="row-fluid">
    <div class="widget-box">
        <div class="widget-header">
            <h5>Admin Login</h5>
        </div>
        <div class="widget-body">
            <form class="form-horizontal" action="#">
                <div class="control-group">
                    <label class="control-label" for="">UserName</label>
                    <div class="controls">
                        <input type="text" id="username" name="username"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Password</label>
                    <div class="controls">
                        <input type="password" id="password" name="password"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>