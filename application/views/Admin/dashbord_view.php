
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
          <?php if ($this->session->flashdata('approval')) { ?>
            <div class="text-white bg-success text-center">

              <?php echo $this->session->flashdata('approval'); ?>

            </div>
          <?php } ?>

          <?php if ($this->session->flashdata('not_approval')) { ?>
            <div class="text-white bg-danger text-center">

              <?php echo $this->session->flashdata('not_approval'); ?>

            </div>
          <?php } ?>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Company Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">eou</th>
                <th></th>
                <th scope="col">Action</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
                <?php foreach($data as $value){?>
                  <tr>

                <th scope="row"><?php echo $value->u_Id; ?></th>
                <td><?php echo $value->u_companyName; ?></td>
                <td><?php echo $value->u_emailId; ?></td>
                <td><?php echo $value->u_contactNumber; ?></td>
                <td><?php echo $value->u_eou; ?></td>
                <td>
                  <?php echo form_open("admin_approval/$value->u_Id"); ?>
                    <select class="form-control" name="type">
                      <option value="0">Desabel</option>
                      <?php foreach($type as $type_d){ ?>
                          <option value="<?php echo $type_d->t_id; ?>"><?php echo $type_d->t_name; ?></option>
                      <?php } ?>
                    </select>
                </td>
                <td>
                    <button type="submit" class="btn btn-success" name="button">Action</button>
                    <?php echo form_close(); ?>
                </td>

                <td><a href="#"><button type="button" class="btn btn-danger" name="button">Delete</button></a></td>

              </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
</div>
