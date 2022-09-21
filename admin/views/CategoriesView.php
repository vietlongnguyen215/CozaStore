<?php 
	//load file layout.php
	$this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn btn-primary">Add category</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List Category</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th style="width: 250px;">Hiển thị trang chủ</th>
                    <th style="width:350px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name ?></td>
                    <td style="text-align: center;"><?php if($rows->displayhomepage==1): ?><span class="fa fa-check"></span><?php endif; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>" class="btn btn-primary">Update</a>&nbsp;
                        <a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-success">Delete</a>
                    </td>
                </tr>
                        <!-- cap con -->
                        <?php 
                            $dataSub = $this->modelListCategoriesSub($rows->id);
                         ?>
                        <?php foreach($dataSub as $rowsSub): ?>
                        <tr>
                            <td style="padding-left: 30px;"><?php echo $rowsSub->name ?></td>
                            <td style="text-align: center;"><?php if($rowsSub->displayhomepage==1): ?><span class="fa fa-check"></span><?php endif; ?></td>
                            <td style="text-align:center;">
                                <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>" class="btn btn-primary">Update</a>&nbsp;
                                <a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-success">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
            	<li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
            	<?php for($i = 1; $i <= $numPage; $i++): ?>
            	<li class="page-item"><a href="index.php?controller=categories&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
            	<?php endfor; ?>
            </ul>
        </div>
    </div>
</div>