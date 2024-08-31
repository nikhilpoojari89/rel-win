<?php $title = "RNL Wealth and INsurance Plan"; ?>
<?php include 'header.php' ?>

<!--********************** Tabs Section ***********************-->
<section class="bg-white custom-top-padding mb-0 pb-5 pb-lg-0">
    <div class="container-fluid">
        <div class="row justify-content-start">

            <div class="col-12" id="product_booking_page">
                <div class="row custom-nav-tabs-section">

                    <div class="col-12">
                        <div class="row custom-nav-tabs-div">
                            <div class="col-12">

                                <div class="custom-nav-tabs-wrapper">
        
                                    <ul class="nav nav-pills list mb-0 custom-nav-tabs py-2 justify-content-center" id="plan_booking_tabs" role="tablist">
                                        <li class="nav-item mr-5" role="presentation">
                                            <a class="nav-link active rounded-pill line-height-12 text-center" id="pills-step1-tab" data-toggle="pill" href="#pills-step1" role="tab" aria-controls="pills-step1" aria-selected="true">Step 1</a>
                                        </li>
                                        <li class="nav-item mx-5" role="presentation">
                                            <a class="nav-link rounded-pill line-height-12 text-center" id="pills-step2-tab" data-toggle="pill" href="#pills-step2" role="tab" aria-controls="pills-step2" aria-selected="false">Step 2</a>
                                        </li>
                                        <li class="nav-item ml-5" role="presentation">
                                            <a class="nav-link rounded-pill line-height-12 text-center" id="pills-step3-tab" data-toggle="pill" href="#pills-step3" role="tab" aria-controls="pills-step3" aria-selected="false">Step 3</a>
                                        </li>
                                    </ul>
        
                                </div>
        
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
        
                            <div class="tab-pane fade show active" id="pills-step1" role="tabpanel" aria-labelledby="pills-step1-tab">
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <!-- Step1 Tab -->
                                        <div class="bg-white mt-2 pt-3">

                                            <section class="">
                                                <div class="container-fluid px-0">
                                                    <div class="row justify-content-between mx-3">
                                                        <div class="col-xl-7 left-section align-self-center">
                                                            <div class="form-card position-relative">
                                                                <h1 class="text-black text-center font-weight-bold mb-3">RNL Wealth and INsurance Plan (WIN)</h1>
                                                                <p class="text-black text-center font-weight-bold font-20 font-smooth">A Unit Linked, Non Participating, Individual Life Insurance Plan</p>

                                                                <div class="row justify-content-center">
                                                                    <div class="col-lg-9">
                                                                        <ul class="custom-tab-list text-black font-20 letter-spacing-1 mt-5">
                                                                            <li>Choose to pay your premium periodically for a limited period</li>
                                                                            <li>The plan offers you coverage up to the age of 100</li>
                                                                            <li>You can select any or all of the fund options offered under this plan</li>
                                                                            <li>You have the choice of systematic investment through the portfolio strategy - Enhanced SMART</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>


                                                                <div class="position-absolute right-0 bottom-0">
                                                                    <img src="./public/images/png/user-img.png" class="img-fluid" alt="User Image" width="120" title="User Image" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5 right-section">
                                                            <div class="form-card p-4">

                                                                <ul class="nav nav-pills list mb-0 custom-nav-tabs py-2 justify-content-between d-none" id="more_info_tabs" role="tablist">
                                                                    <li class="nav-item mr-2" role="presentation">
                                                                        <a class="nav-link active rounded-pill font-serif font-weight-bold" id="pills-professional-details-tab" data-toggle="pill" href="#pills-professional-details" role="tab" aria-controls="pills-professional-details" aria-selected="true">Branch Details</a>
                                                                    </li>
                                                                    <li class="nav-item mr-2" role="presentation">
                                                                        <a class="nav-link rounded-pill font-serif font-weight-bold" id="pills-personal-details-tab" data-toggle="pill" href="#pills-personal-details" role="tab" aria-controls="pills-personal-details" aria-selected="false">Personal Details</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content" id="pills-tabContent">
                                                
                                                                    <div class="tab-pane fade show active" id="pills-professional-details" role="tabpanel" aria-labelledby="pills-professional-details-tab">
                                                
                                                                        <form>
                                                                            <div class="text-center text-black mb-5">
                                                                                <h2 class="font-weight-bold">Buy Online</h2>
                                                                                <p class="font-24">Please share your details to view quotes</p>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-12">
                                                                                    <input type="text" class="form-control" placeholder="Name" id="inputName">
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="row justify-content-between">
                                                                                        <div class="form-group col-sm-5 pr-0">
                                                                                            <input type="text" class="form-control" placeholder="DOB" id="inputDob">
                                                                                        </div>
                                                                                        <div class="form-group col-sm-5 pl-0">
                                                                                            <select id="inputGender" class="form-control">
                                                                                                <option selected>Gender</option>
                                                                                                <option>Male</option>
                                                                                                <option>Female</option>
                                                                                                <option>Other</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="row justify-content-between">
                                                                                        <div class="form-group col-sm-5 pr-0">
                                                                                            <select id="inputsmoking" class="form-control">
                                                                                                <option selected>Smoker/Non-Smoker</option>
                                                                                                <option>Smoker</option>
                                                                                                <option>Non-Smoker</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group col-sm-5 pl-0">
                                                                                            <select id="inputself" class="form-control">
                                                                                                <option selected>Self/Others</option>
                                                                                                <option>Self</option>
                                                                                                <option>Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-12">
                                                                                    <input type="text" class="form-control" placeholder="Contact No." id="inputContact">
                                                                                </div>
                                                                                <div class="form-group col-12">
                                                                                    <input type="email" class="form-control" placeholder="Email ID" id="inputEmail">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group text-center mt-3 mb-0">
                                                                                <a href="javascript:void(0);" type="submit" id="step_1" class="btn btn-primary letter-spacing-05 font-18 font-16 font-weight-bold">Get Quotes</a>
                                                                            </div>
                                                                        </form>
                                                
                                                                    </div>
                                                
                                                                    <div class="tab-pane fade" id="pills-personal-details" role="tabpanel" aria-labelledby="pills-personal-details-tab">

                                                                        <form class="professional-details">
                                                                            <div class="text-center text-black mb-5">
                                                                                <h2 class="font-weight-bold">Almost There</h2>
                                                                                <p class="font-24">Please share your details to view quotes</p>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-12">
                                                                                    <input type="text" class="form-control" placeholder="Annual Income" id="inputIncome">
                                                                                </div>
                                                                                <div class="form-group col-12">
                                                                                    <select id="inputEdQualification" class="form-control">
                                                                                        <option selected>Educational Qualification</option>
                                                                                        <option>SSC</option>
                                                                                        <option>HSC</option>
                                                                                        <option>Graduate</option>
                                                                                        <option>Post-Graduate</option>
                                                                                        <option>PHD</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-12">
                                                                                    <input type="email" class="form-control" placeholder="Occupation" id="inputOccupation">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group text-center mt-3 mb-0 d-flex justify-content-between">
                                                                                <a href="javascript:void(0);" type="submit" id="step_prev_1" class="btn btn-secondary letter-spacing-05 font-18 font-16 font-weight-bold">Back</a>
                                                                                <a href="javascript:void(0);" type="submit" id="btn_get_quotes" class="btn btn-primary letter-spacing-05 font-18 font-16 font-weight-bold">Get Quotes</a>
                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="tab-pane fade" id="pills-step2" role="tabpanel" aria-labelledby="pills-step2-tab">
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <!-- Step2 Tab -->
                                        <div class="bg-white mt-2">
                                            <img src="./public/images/png/variant/early-return-variant.png" class="img-fluid" alt="Step2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-step3" role="tabpanel" aria-labelledby="pills-step3-tab">
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <!-- Step3 Tab -->
                                        <div class="bg-white mt-2 pt-3">
                                            
                                            <section class="">
                                                <div class="container-fluid px-0">
                                                    <div class="row justify-content-between mx-3">
                                                        <div class="col-xl-7 left-section align-self-center">
                                                            <div class="form-card position-relative">
                                                                <h1 class="text-black text-center font-weight-bold mb-3">RNL Wealth and INsurance Plan (WIN)</h1>
                                                                <p class="text-black text-center font-weight-bold font-20 font-smooth">A Unit Linked, Non Participating, Individual Life Insurance Plan</p>

                                                                <div class="row justify-content-center">
                                                                    <div class="col-lg-9">
                                                                        <ul class="custom-tab-list text-black font-20 letter-spacing-1 mt-5">
                                                                            <li>Choose to pay your premium periodically for a limited period</li>
                                                                            <li>The plan offers you coverage up to the age of 100</li>
                                                                            <li>You can select any or all of the fund options offered under this plan</li>
                                                                            <li>You have the choice of systematic investment through the portfolio strategy - Enhanced SMART</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>


                                                                <div class="position-absolute right-0 bottom-0">
                                                                    <img src="./public/images/png/user-img.png" class="img-fluid" alt="User Image" width="120" title="User Image" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5 right-section">
                                                            <div class="form-card p-4">

                                                                <form>
                                                                    <div class="text-center text-black mb-5">
                                                                        <h2 class="font-weight-bold">Plan Summary for Name</h2>
                                                                        <p class="font-24">RNL Wealth and INsurance Plan (WIN)</p>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-12">
                                                                            <input type="text" class="form-control" placeholder="Name" id="inputName">
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row justify-content-between">
                                                                                <div class="form-group col-sm-5 pr-0">
                                                                                    <input type="text" class="form-control" placeholder="DOB" id="inputDob">
                                                                                </div>
                                                                                <div class="form-group col-sm-5 pl-0">
                                                                                    <select id="inputGender" class="form-control">
                                                                                        <option selected>Gender</option>
                                                                                        <option>Male</option>
                                                                                        <option>Female</option>
                                                                                        <option>Other</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row justify-content-between">
                                                                                <div class="form-group col-sm-5 pr-0">
                                                                                    <select id="inputsmoking" class="form-control">
                                                                                        <option selected>Smoker/Non-Smoker</option>
                                                                                        <option>Smoker</option>
                                                                                        <option>Non-Smoker</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-sm-5 pl-0">
                                                                                    <select id="inputself" class="form-control">
                                                                                        <option selected>Self/Others</option>
                                                                                        <option>Self</option>
                                                                                        <option>Others</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-12">
                                                                            <input type="text" class="form-control" placeholder="Contact No." id="inputContact">
                                                                        </div>
                                                                        <div class="form-group col-12">
                                                                            <input type="email" class="form-control" placeholder="Email ID" id="inputEmail">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group text-center mt-3 mb-0 d-flex justify-content-between">
                                                                        <a href="javascript:void(0);" type="submit" id="main_step_1" class="btn btn-secondary btn-step-3 letter-spacing-05 font-18 font-16 font-weight-bold">Back</a>
                                                                        <a href="javascript:void(0);" type="submit" id="main_step_2" class="btn btn-danger btn-step-3 letter-spacing-05 font-18 font-16 font-weight-bold">Modify</a>
                                                                        <a href="javascript:void(0);" type="submit" id="btnContinue" class="btn btn-primary btn-step-3 letter-spacing-05 font-18 font-16 font-weight-bold">Continue</a>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12" id="product_overview_page">
                <div class="form-card bg-white shadow py-5 text-center">
                    <h2 class="text-success font-weight-bold mb-4 letter-spacing-1">SUCCESS !</h2>
                    <!-- <div class="p-5"><img src="./public/images/png/success-icon.png" class="img-fluid" alt="Success Icon" width="200" title="Success Icon" /></div> -->
                    <div><img src="./public/images/png/success-check.gif" class="img-fluid" alt="Success Icon" width="400" title="Success Icon" /></div>
                    <h5 class="title-color font-weight-bold font-smooth letter-spacing-1 mt-4 mb-3">You application has been sent successfully!!!</h5>
                    <div>
                        <a href="javascript:void(0);" id="step_back" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php' ?>

<script>
    
    //Next Button Click JS
    $("#step_1").on("click", function(){
        $('#more_info_tabs a[href="#pills-personal-details"]').tab('show');
        //$('#more_info_tabs li:eq(1) a').tab('show');
    });
    //Prev Button Click JS
    $("#step_prev_1").on("click", function(){
        $('#more_info_tabs a[href="#pills-professional-details"]').tab('show');
    });

    //Next Button Click JS
    $("#btn_get_quotes").on("click", function(){
        $('#plan_booking_tabs a[href="#pills-step2"]').tab('show');
    });

    //Prev Button Click For Step3 JS
    $("#main_step_1").on("click", function(){
        $('#plan_booking_tabs a[href="#pills-step1"]').tab('show');
    });
    $("#main_step_2").on("click", function(){
        $('#plan_booking_tabs a[href="#pills-step2"]').tab('show');
    });

    $("#btnContinue").on("click", function(){
        $('#product_booking_page').hide();
        $('#product_overview_page').show();
    });

    $('#product_overview_page').hide();
    $("#step_back").on("click", function(){
        // window.location.reload();
        $('#product_booking_page').show();
        $('#product_overview_page').hide();
        $('#plan_booking_tabs a[href="#pills-step3"]').tab('show');
    });

</script>