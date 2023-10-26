<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizard form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form id="regForm">
                    <h1 id="register">signup user</h1>
                    <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                    <div class="tab">
                        <h3>Welcome User</h3>
                        <form>
                            Name:<input type="text" name="username"><br>
                            Email:<input type="email" name="email"><br>
                            Password:<input type="password" name="password"><br>
                            confirm:<input type="password">
                        </form>
                    </div>
                    <div class="tab">
                        <h3>Please enter Details</h3>
                        <p><input placeholder="First Name" oninput="this.className = ''" name="first"></p>
                        <p><input placeholder="Last Name" oninput="this.className = ''" name="last"></p>
                        <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
                        <p><input placeholder="Phone" oninput="this.className = ''" name="phone"></p>
                        <p><input placeholder="Street Address" oninput="this.className = ''" name="address"></p>
                        <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
                        <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
                        <p><input placeholder="Country" oninput="this.className = ''" name="country"></p>
                    </div>
                    <div class="tab">
                        <h3>upload neccesary documents</h3>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <label for="pdfFile">Select a PDF File:</label>
                            <input type="file" id="pdfFile" name="pdfFile" accept=".pdf" required>
                            <br>
                            <label for="photoFile">Select a Photograph:</label>
                            <input type="file" id="photoFile" name="photoFile" accept="image/*" required>
                            <br>
                    </div>
                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thanks for your Patience!</h3> <span>Your details has been entered successfully!</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>