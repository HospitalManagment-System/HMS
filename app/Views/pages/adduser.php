 <input hidden id="url" value="<?php echo base_url();?>"></input>

<div class="container-fluid"  >
    <div class="mx-auto my-manual col-4">
    <div class="header" style="text-align: center;">
                        <h3>Signup User</h3>
                    </div>
                    <div class="">Add Role If Doesn't Exits : <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" style=" float: right;" type="button">+</button></div>
                  
                  
                    <div class="row col-12">
                        <div class="form-group col-6">
                            <label for="email">First Name:</label>
                            <input type="email" class="form-control" id="fname" name="fname">
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Last Name:</label>
                            <input type="email" class="form-control" id="lname" name="lname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" id="cnfrmpassword" name="cnfrmpassword">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="roles">Role</label>
                            <select class="form-control" id="roleid" name="roleid">
                              
                                                                                                         
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="id">Employee ID:</label>
                            <input type="text" disabled class="form-control" id="code" name="code">
                        </div>
                    </div>
                    <button type="button" id="save" name="save" class="btn btn-primary">Save</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Role</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div style="display:none" id="Successalert" name="Successalert" class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Success!</strong> Role Added
                        </div>
                        <div class="field-group">

                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" class="form-control" id="role" name="role">
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="addrole" name="addrole" class="btn btn-success" data-dismiss="role">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

<script>
  var base_url = $("#url").val();
  
  
  function create_role(){
               
    $.ajax({
        url: base_url + "/User/create_role",
        method: "POST",
        data: { 
            role:$('#role').val()
        },
        dataType: "text",
        success: function(data) {
            alert(data);
        //  document.getElementById("roleid").innerHTML = data;
        }
      });
  }
   
  
  $(document).ready(function() {

         
    $.ajax({
        url: base_url + "/User/get_role",
        method: "POST",
        data: { 
        },
        dataType: "text",
        success: function(data) {
          document.getElementById("roleid").innerHTML = data;
        }
      });

      $('#addrole').on('click',function(){
        create_role();
      });

      $('#roleid').on('change',function () {
            var x = $('#roleid').val();
            $.ajax({
                url:  base_url + "/User/get_role_by_id",
                method: 'POST',
                data: {
                    role: x,
                },
                success: function(data) {
                    var x = data.substring(0, 3);
                    $('#code').val(x+"-"+ Math.floor(100000 + Math.random() * 900000));
                    
                }
            }); 
        });

        $('#save').on("click",function(){
                     
    $.ajax({
        url: base_url + "/User/create_user",
        method: "POST",
        data: { 
            code:$('#code').val(),
            roleid:$('#roleid').val(),
            fname:$('#fname').val(),
            lname:$('#lname').val(),
            email:$('#email').val(),
            password:$('#password').val(),

        },
        dataType: "text",
        success: function(data) {
        alert(data);
            //  document.getElementById("roleid").innerHTML = data;
        }
      });
        });
 
    });
 
</script>