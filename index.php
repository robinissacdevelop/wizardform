<!-- MultiStep Form -->
<?php include'headers.php';
include'wizardhead.php';
?>

<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Sign Up Your User Account</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Personal Information</strong></li>
                                <li id="Certificate"><strong>Certificate Details</strong></li>
                                <li id="Education"><strong>Educational Qualification</strong></li>
                                <li id="Mediumofin"><strong>Medium of instruction</strong></li>
                                <li id="Communicate"><strong>Comunication Details</strong></li>
                                <li id="Photosign"><strong>Photograph & Signature</strong></li>
                                <li id="Documentup"><strong>Document Upload</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2>
                                    <input type="email" name="email" placeholder="Email Id"/>
                                    <input type="text" name="uname" placeholder="UserName"/>
                                    <input type="password" name="pwd" placeholder="Password"/>
                                    <input type="password" name="cpwd" placeholder="Confirm Password"/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Certificate Details</h2>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="phno" placeholder="Contact No."/>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Educational Qualification</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                        <br>
                                    </div>
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="text" name="holdername" placeholder=""/>
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Card Number*</label>
                                            <input type="text" name="cardno" placeholder=""/>
                                        </div>
                                        <div class="col-3">
                                            <label class="pay">CVC*</label>
                                            <input type="password" name="cvcpwd" placeholder="***"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Expiry Date*</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Medium of Instruction</h2>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="phno" placeholder="Contact No."/>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Communication Details</h2>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="phno" placeholder="Contact No."/>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Photograph & Signature</h2>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="phno" placeholder="Contact No."/>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Document Upload</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                        <br>
                                    </div>
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="text" name="holdername" placeholder=""/>
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Card Number*</label>
                                            <input type="text" name="cardno" placeholder=""/>
                                        </div>
                                        <div class="col-3">
                                            <label class="pay">CVC*</label>
                                            <input type="password" name="cvcpwd" placeholder="***"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Expiry Date*</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>