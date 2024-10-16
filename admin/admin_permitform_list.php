<?php 
include('../admin/assets/config/dbconn.php');

include('../admin/assets/inc/header.php');

include('../admin/assets/inc/sidebar.php');

include('../admin/assets/inc/navbar.php');

?> 



<!---QR code-->
<div class="modal fade" id="qrcodeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">QR Code</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <script src="../admin/assets/js/html5-qrcode.min.js"></script>

                <style>
                .result {
                    background-color: green;
                    color: #fff;
                    padding: 20px;
                }
                .row {
                    display: flex;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                    border: 1px solid #ddd;
                }
                </style>



                <div class="row">
                    <div class="col">
                        <div style="width: 470px;" id="reader"></div>
                    </div>
                    <div class="col" style="padding: 20px;">
                        <h4>SCAN RESULT</h4>
                        <div id="result">Result Here</div>
                    </div>
                </div>

                <script type="text/javascript">
                function onScanSuccess(qrCodeMessage) 
                {
                    // Extract application ID from QR code message
                    const ApplicationIDMatch = qrCodeMessage.match(/ApplicationID:(\d{11})/);
                    if (applicationIdMatch) 
                    {
                        const application_id = ApplicationIDMatch[1];
                        fetchDataFromServer(application_id);
                    } 
                    else 
                    {
                        document.getElementById('result').innerHTML = '<span class="result">QR code does not contain valid application ID</span>';
                    }
                }

                function onScanError(errorMessage) 
                {
                    // Handle scan error
                    console.error('Scan error:', errorMessage);
                }

                function fetchDataFromServer(application_id) 
                {
                    fetch('fetch_data.php', 
                    {
                        method: 'POST',
                        headers: 
                        {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams
                        ({
                            'application_id': application_id
                        })
                    })
                    .then(response => response.json())
                    .then(data => 
                    {
                        renderDataInTable(data);
                    })
                    .catch(error => console.error('Error:', error));
                }

                function renderDataInTable(data) 
                {
                    if (!data || data.length === 0) 
                    {
                        document.getElementById('result').innerHTML = '<span class="result">No data found</span>';
                        return;
                    }

                    let table = '<table>';
                    table += '<tr><th>Application ID</th><th>Owner</th><th>Business Name</th><th>Business Type</th><th>Address</th><th>Status</th></tr>';

                    data.forEach(row => 
                    {
                        table += `<tr>
                            <td>${row.application_id}</td>
                            <td>${row.owner_name}</td>
                            <td>${row.business_name}</td>
                            <td>${row.business_type}</td>
                            <td>${row.address}</td>
                            <td>${row.status}</td>
                        </tr>`;
                    });

                    table += '</table>';

                    document.getElementById('result').innerHTML = table;
                }

                var html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader", { fps: 10, qrbox: 250 });
                html5QrcodeScanner.render(onScanSuccess, onScanError);
                </script>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="qrcode()">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!---end QR code-->



<div class="data-card">
    <div class="card">
        <div class="card-header">
            <h4> List
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#qrcodeModal">
                    <i class='bx bx-qr-scan'></i>
                </button>
            </h4>
        </div>


        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div id="displayDataTable">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php 
include('../admin/assets/inc/footer.php');
?> 


<script>
    $(document).ready(function()
    {
        displayData();
    });
    //display function
    function displayData()
    {
        var displayData="true";
        $.ajax
        ({
            url:"admin_permitform_list_displaydata.php",
            type:'post',
            data:{
                displaysend:displayData
            },
            success:function(data,status)
            {
                $('#displayDataTable').html(data);
                $('#updateModal').modal('hide');
            }
        });
    }




    //delete function
    function deleteuser(deleteid)
    {
        $.ajax({
            url:"admin_permitform_list_delete.php",
            type:'post',
            data:{
                deletesend:deleteid
            },
            success:function(data,status){
                //console.log(status);
                displayData();
            }
        });
    }


    
    

</script>


</body>
</html>
