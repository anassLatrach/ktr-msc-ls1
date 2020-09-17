
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $_SESSION['user_data']['name']; ?></h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $_SESSION['user_data']['email']; ?>
                            <br />
                            <i class="glyphicon glyphicon-home"></i><?php echo $_SESSION['user_data']['company']; ?>
                            <br />
                            <i class="glyphicon glyphicon-phone"></i><?php echo $_SESSION['user_data']['tel']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>