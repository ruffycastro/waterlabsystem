<?php include('header.php');?>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="">
			<h1>Welcome back <?php echo $fullname;?>,</h1>
            <p><?php echo php_ini_loaded_file(); ?></p>
			<p style="text-align: center;">
				<!-- <img src="/prints/images/logo.png"> -->
			</p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"><strong>Communication Box</strong> <a href="messaging.php" class="btn btn-default pull-right"><span class="glyphicon glyphicon-plus"></span></a></div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Message</th>
                                <th>Author</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM message WHERE status<>'1' ORDER BY id DESC");
                            while ($row=mysqli_fetch_array($sql)) {
                                ?>
                                <tr>
                                    <td><?php echo substr($row['message'], 0, 100) . ' <a href="readmessage.php?id='.$row['id'].'">Readmore</a>';?></td>
                                    <td><?php echo username($row['created_by']);?></td>
                                    <td><?php echo $row['created_date'];?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>
