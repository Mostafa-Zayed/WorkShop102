<?php include_once '../../config.php'; ?>
<?php include_once CORE_PATH.'connect.php'; ?>
<?php include_once CORE_PATH.'functions.php'; ?>
<?php include_once ADMIN_INCLUDES_PATH.'header.php'; ?>
<div class="be-content">
  <div class="main-content container-fluid">
    <div class="row">
    <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> Users 
                <div class="tools"><a href="<?=ADMIN_URL?>users/add.php" class="btn btn-primary">New User</a></div>
                </div>
                <div class="panel-body">
                  <table class="table">
                  <thead>
                      <tr>
                        <th style="width:5%; text-align:center">ID</th>
                        <th>Image</th>
                        <th style="width:10%;">Name</th>
                        <th style="text-align:center">Email</th>
                        <th class="actions text-align:center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $rows = get_data('users','id,name,email,image'); ?>
                      <?php if(! empty($rows)) : ?>
                        <?php foreach($rows as $row) : ?>
                    <tr>
                        <td><?= $row['id']?></td>
                        <td><?= $row['image']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td class='actions'><a href="edit.html" class="icon"><i class="mdi mdi-edit"></i></a></td>
                        <td class="actions"><a href="delete.html" class="icon"><i class="mdi mdi-delete"></i></a></td>
                      </tr>
                    <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan='5' >NO Data Yet</td>
                    <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  </div>
  </div> <!-- end content fluid  containter -->
</div> <!-- end content -->
<?php include_once ADMIN_INCLUDES_PATH.'footer.php'; ?>