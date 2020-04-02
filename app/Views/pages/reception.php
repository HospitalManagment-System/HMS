

<div class="container-fluid">
    <div class="row col-12" style="margin-top: 5%;">
        <div id="left" name="left" style="display:block" class="col-3"></div>
        <div class="col-6">
            <form action="">
                <div class="header" style="text-align: center;">
                    <h3>Reception</h3>
                </div>



                <div class="field-group">
                    <div class="row">
                        <h5 class="col-4">View Previous Record Of Patient :</h5>
                        <div class="col-4"></div>
                        <button type="button" id="record" name="record" class="col-4 btn btn-secondary" >View <img class="icons1" ></button>
                    </div>
                    <div class="row">
                        <div class="form-group col-4 ">
                            <lable for="pcode">Pateint Code:</lable>
                            <div class="input-group-prepend">
                                <input type="text" class="form-control" disabled value="<?php $num_str = sprintf("%06d", mt_rand(1, 999999)); ?>" id="pcode" name="pcode" required>
                                <button type="button" class="btn btn-success" id="genrate" name="genrate">Genrate</button>
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="form-group col-4">
                            <lable for="date">Date-Time:</lable>
                            <input type="datetime-local" class="form-control" id="date" name="date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <lable for="cnic">First Name:</lable>
                            <input type="text" class="form-control" id="fname" name="fname">
                        </div>
                        <div class="col-4"></div>
                        <div class="form-group col-4">
                            <lable for="cnic">Last Name:</lable>
                            <input type="text" class="form-control" id="lname" name="lname">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <lable for="cnic">CNIC:</lable>
                            <input type="text" class="form-control" id="cnic" name="cnic" required>
                        </div>
                        <div class="col-4"></div>
                        <div class="form-group col-4">
                            <lable for="cnic">phone:</lable>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <lable for="address">Address:</lable>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <lable for="cnic">Doctor:</lable>
                            <select class="form-control" id="doctor" name="doctor">
                                <option>select</option>

                            </select>
                        </div>
                        <div class="form-group col-4">
                            <lable for="cnic">Status:</lable>
                            <select class="form-control" id="status" name="status">
                                <option value="-">Select</option>
                                <option value="Normal">Normal</option>
                                <option value="Emergency">Emergency</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <lable for="cnic">Refernce:</lable>
                            <select class="form-control" id="refrence" name="refrence">
                                <option value="-">Select</option>
                                <option value="By Self">By Self</option>
                                <option value="By Doctor">By Doctor</option>
                            </select>
                        </div>
                    </div>


                </div>
                <button type="button"  onclick="create_Patient()" id="save" name="save" class="btn btn-primary">Save</button>
            </form>
        </div>
        <div id="right" name="right" style="display:block" class="col-4"></div>
        <div id="tablediv" name="tablediv" class="col-6" style="display:none;">
            <div class="container">
                <div class="row">
                    <div class="form-group col-6 ">
                        <lable for="pcode">Pateint Code / CNIC:</lable>
                        <div class="input-group-prepend">
                            <input type="text" class="form-control" id="code" name="code">
                            <button type="button" class="btn btn-success" id="search" name="search">Search</button>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div id="card" style="visibility: hidden" class="col-12" name="card">
                        <div class="card">

                            <div class="card-header"><div class="row">
                                    <button type="button" onclick="new_appointment()"  style="color:white" class="float-left btn btn-primary">New Appointment</button>
                                    <h4 style="text-align: center;font-weight: bold;" class="mx-auto my-1" id="patient_code_header"></h4>
                                    <button type="button" onclick=""  style="color:white" data-toggle="modal" data-target="#myModal" class="float-right btn btn-warning">edit</button>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="form-group">
                                                <lable for="name">Patient Code : </lable>
                                                <lable id="patient_code" style="float:right"></lable>
                                            </div>

                                            <div class="form-group">
                                                <lable for="name">Full Name : </lable>
                                                <lable id="patient_name" style="float:right"></lable>
                                            </div>

                                            <div class="form-group">
                                                <lable for="name">CNIC : </lable>
                                                <lable id="patient_cnic" style="float:right"></lable>
                                            </div>


                                            <div class="form-group">
                                                <lable for="name">Phone : </lable>
                                                <lable id="patient_phone" style="float:right"></lable>
                                            </div>


                                            <div class="form-group">
                                                <lable for="name">Address : </lable>
                                                <lable id="patient_address" style="float:right"></lable>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">

                                <div class="row">

                                    <div class="col-4">
                                        <button type="button" style="float: left;" onclick="doc()" class=" btn btn-primary">Doctors</button>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <button type="button" style="float: right;"id="record" name="record" class=" btn btn-secondary">History</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Patient Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                                <div class="row">
                                    <div class="form-group col-6">
                                        <lable for="cnic">First Name:</lable>
                                        <input type="text" class="form-control" id="efname" name="fname">
                                    </div>
                                    <div class="form-group col-6">
                                        <lable for="cnic">Last Name:</lable>
                                        <input type="text" class="form-control" id="elname" name="lname">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <lable for="cnic">CNIC:</lable>
                                        <input type="text" class="form-control" id="ecnic">
                                    </div>
                                    <div class="form-group col-6">
                                        <lable for="cnic">phone:</lable>
                                        <input type="text" class="form-control" id="ephone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable for="address">Address:</lable>
                                    <input type="text" class="form-control" id="eaddress" name="eaddress">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="update_Patient_data()">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>


<script>

    let base_url = "<?php echo base_url();?>";

    function get_Doctors() {
        $.ajax({
            url:  base_url + "/User/get_doctors",
            method: 'POST',
            data: {

            },
            dataType:"text",
            success: function(data) {
                document.getElementById('doctor').innerHTML = data;
            }
        });
    }

    function get_Pateint_data(){
        $.ajax({
            url:  base_url + "/Patient/get_patient",
            method: 'POST',
            data: {
                code: $('#code').val()
            },
            dataType:"json",
            success: function(data) {

                document.getElementById('card').style.visibility="visible";
                document.getElementById('patient_code_header').innerHTML=data[0]['pcode'];
                document.getElementById('patient_code').innerHTML=data[0]['pcode'];
                document.getElementById('patient_name').innerHTML=data[0]['firstname']+' '+data[0]['lastname'];
                document.getElementById('patient_cnic').innerHTML=data[0]['cnic'];
                document.getElementById('patient_phone').innerHTML=data[0]['phone'];
                document.getElementById('patient_address').innerHTML=data[0]['address'];

 

                document.getElementById('efname').value=data[0]['firstname'];
                document.getElementById('elname').value=data[0]['lastname'];
                document.getElementById('ecnic').value=data[0]['cnic'];
                document.getElementById('ephone').value=data[0]['phone'];
                document.getElementById('eaddress').value=data[0]['address'];

            }
        });
    }
    
    function new_appointment() {
        $.ajax({
            url:  base_url + "/Patient/get_patient",
            method: 'POST',
            data: {
                code: $('#code').val()
            },
            dataType:"json",
            success: function(data) {



                document.getElementById('pcode').value=data[0]['pcode'];
                document.getElementById('fname').value=data[0]['firstname'];
                document.getElementById('lname').value=data[0]['lastname'];
                document.getElementById('cnic').value=data[0]['cnic'];
                document.getElementById('phone').value=data[0]['phone'];
                document.getElementById('address').value=data[0]['address'];



            }
        });
    }
    
    function create_Patient() {
        $.ajax({
            url:  base_url + "/Patient/create_new_pateint",
            method: 'POST',
            data: {
                code: $('#pcode').val(),
                fname:$('#fname').val(),
                lname:$('#lname').val(),
                cnic:$('#cnic').val(),
                phone:$('#phone').val(),
                address:$('#address').val(),
                doctor:$('#doctor').val(),
                status:$('#status').val(),
                refrence:$('#refrence').val(),
                date:$('#date').val()

            },
            dataType:"text",
            success: function(data) {

                alert(data);
            }
        });
    }

    function update_Patient_data(){
        $.ajax({
            url:  base_url + "/Patient/update_patient",
            method: 'POST',
            data: {
                code: $('#code').val(),
                fname:$('#efname').val(),
                lname:$('#elname').val(),
                ecnic:$('#ecnic').val(),
                ephone:$('#ephone').val(),
                eaddress:$('#eaddress').val()
            },
            dataType:"text",
            success: function(data) {

                alert(data);
                get_Pateint_data();
            }
        });
    }

    $(document).ready(function() {

        get_Doctors();

        $('#genrate').on('click', function() {
            var x = "PT-" + Math.floor(100000 + Math.random() * 900000)
            $('#pcode').val(x);
        });

        $('#record').on('click', function() {
            document.getElementById('left').style.display = "none";
            document.getElementById('right').style.display = "none";
            document.getElementById('tablediv').style.display = "block";
        });

        $('#search').on('click',function () {

            get_Pateint_data();

        });

    });


</script>
