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
                                                                                <p class="font-26">Please share your details to view quotes</p>
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
                                                                                <p class="font-26">Please share your details to view quotes</p>
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
                                        <div class="bg-white mt-2 pt-3">
                                            
                                            <section class="">
                                                <div class="container-fluid px-0">

                                                    <div class="row mx-3">
                                                        <div class="col-12">
                                                            <div class="d-flex justify-content-between">
                                                                <div><h3 class="text-black text-center font-weight-bold mb-0">RNL Wealth and INsurance Plan (WIN)</h3></div>
                                                                <div>
                                                                    <div class="form-group row">
                                                                        <label for="inputlifecover" class="col-auto col-form-label font-24 font-weight-bold p-0">Life Cover</label>
                                                                        <div class="col-auto">
                                                                            <div class="select_wrap" id="life_cover_dd">
                                                                                <ul class="default_option">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Rs.2,00,000</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <ul class="select_ul">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Rs.1,00,000</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Rs.2,00,000</p>
                                                                                        </div>  
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Rs.3,00,000</p>
                                                                                        </div>  
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Rs.5,00,000</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Rs.10,00,000</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group row">
                                                                        <label for="inputage" class="col-auto col-form-label font-24 font-weight-bold p-0">Upto Age</label>
                                                                        <div class="col-auto">
                                                                            <div class="select_wrap" id="upto_age_dd">
                                                                                <ul class="default_option">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>76 (40 years)</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <ul class="select_ul">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>76 (40 years)</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>86 (50 years)</p>
                                                                                        </div>  
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mx-4 mb-4">
                                                                <label for="happy" class="col-auto col-form-label font-22 font-weight-bold p-0">Pay early with limited pay</label>
                                                                <div class="col-auto align-self-center">
                                                                    <div class="input-group">
                                                                        <div id="rdoPayEarly" class="btn-group rdoPayEarly">
                                                                            <a class="btn btn-sm active" data-toggle="happy" data-title="Y">Yes</a>
                                                                            <a class="btn btn-sm notActive" data-toggle="happy" data-title="N">No</a>
                                                                        </div>
                                                                        <input type="hidden" name="happy" id="happy">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="col-xl-8 quotes-table">
                                                            <div class="form-card px-4 py-5">

                                                                <div class="row quotes-main-sec">
                                                                    <div class="col-md-6 q-left">
                                                                        <div class="row q-row">
                                                                            <div class="col-md-7">
                                                                                <p class="q-left-text font-20 line-height-13 font-weight-bold mb-0">RNL Accidental Death Benefit Rider</p>
                                                                            </div>
                                                                            <div class="col-md-5 px-0 align-self-center">
                                                                                <p class="q-left-box">Rs.1,00,000</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row q-row">
                                                                            <div class="col-md-7">
                                                                                <p class="q-left-text font-20 line-height-13 font-weight-bold mb-0">RNL Accidental Death
                                                                                and Disabilty Rider</p>
                                                                            </div>
                                                                            <div class="col-md-5 px-0 align-self-center">
                                                                                <p class="q-left-box">Rs.1,00,000</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row q-row">
                                                                            <div class="col-md-7">
                                                                                <p class="q-left-text font-20 line-height-13 font-weight-bold mb-0">RNL Critical Illness
                                                                                Plus Rider</p>
                                                                            </div>
                                                                            <div class="col-md-5 px-0 align-self-center">
                                                                                <p class="q-left-box">Rs.1,00,000</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 q-right pl-5 pr-0">
                                                                        <div>
                                                                            <div class="form-group d-flex justify-content-between">
                                                                                <label for="maturity_amt_dd" class="col-form-label align-self-center font-28 font-weight-bold py-0 pr-2">Maturity Amount at</label>
                                                                                <div class="align-self-center">
                                                                                    <div class="select_wrap" id="maturity_amt_dd">
                                                                                        <ul class="default_option mb-0">
                                                                                            <li>
                                                                                                <div class="option">
                                                                                                    <p>8%</p>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <ul class="select_ul">
                                                                                            <li>
                                                                                                <div class="option">
                                                                                                    <p>8%</p>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="option">
                                                                                                    <p>9%</p>
                                                                                                </div>  
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="option">
                                                                                                    <p>10%</p>
                                                                                                </div>  
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="option">
                                                                                                    <p>11%</p>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="option">
                                                                                                    <p>12%</p>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="option">
                                                                                                    <p>25%</p>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <p class="final-mat-amt">Rs.80,00,000</p>
                                                                        </div>
                                                                        <div class="mat-amt-info-box mr-3 mt-5">
                                                                            <p class="mb-0 font-26 text-center line-height-13">Actual rate of return of the fund</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 quotes-payment align-self-center">
                                                            <div class="row justify-content-center">
                                                                <div class="col-md-9 text-center">

                                                                    <div class="form-group">
                                                                        <label for="pay_till_dd" class="col-form-label align-self-center font-28 font-weight-bold py-0 pr-2 mb-1">Pay Till</label>
                                                                        <div class="align-self-center">
                                                                            <div class="select_wrap pay_till_dd" id="pay_till_dd">
                                                                                <ul class="default_option mb-0">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>2050 (26 years)</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <ul class="select_ul">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>2050 (26 years)</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>2054 (30 years)</p>
                                                                                        </div>  
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="frequency_dd" class="col-form-label align-self-center font-28 font-weight-bold py-0 pr-2 mb-1">Frequency</label>
                                                                        <div class="align-self-center d-inline-block">
                                                                            <div class="select_wrap frequency_dd" id="frequency_dd">
                                                                                <ul class="default_option mb-0">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Annually</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <ul class="select_ul">
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Annually</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Quaterly</p>
                                                                                        </div>  
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="option">
                                                                                            <p>Monthly</p>
                                                                                        </div>  
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div>
                                                                        <a href="javascript:void(0);" class="total-payable-amt-box d-block mt-4 mb-0 font-30 text-center line-height-13 text-white font-weight-bold letter-spacing-1">Pay Rs.1,00,000</a>
                                                                    </div>

                                                                    <a type="button" class="text-black text-center font-weight-bold my-3 font-20" data-toggle="modal" data-target="#premiumBreakupTbl">
                                                                        View Premium Breakup
                                                                    </a>

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

            <div class="col-12 px-0" id="product_overview_page">
                <div class="form-card bg-white">

                    <div class="overview-sec-1 px-5 pt-4 pb-5">
                        <h1 class="po-heading text-black text-center font-weight-bold mb-5 letter-spacing-1">Product Overview</h1>
                        <div class="row">
                            <div class="col-md-6 font-20 font-weight-bold text-justify line-height-15 align-self-center">
                                <p>WIN Product from Reliance Nippon Life Insurance, you can plan your investments in such a way that you get to create a corpus for your family to rely on in the future.</p>
                                <p class="mb-0">Additionally, enjoy access to comprehensive wellness with RNLIC Vitality wellness program that helps you to understand, track and improve your health while also rewarding you with premium discounts!</p>
                            </div>
                            <div class="col-md-6 text-center benefits-sec">
                                <h3 class="mb-4">Key Benefits</h3>
                                <div class="key-benefits-sec d-flex justify-content-around mb-5">
                                    <div class="key-main-sec">
                                        <div class="key-circle"></div>
                                        <span class="key-name font-28">Benefit 1</span>
                                    </div>
                                    <div class="key-main-sec">
                                        <div class="key-circle"></div>
                                        <span class="key-name font-28">Benefit 2</span>
                                    </div>
                                    <div class="key-main-sec">
                                        <div class="key-circle"></div>
                                        <span class="key-name font-28">Benefit 3</span>
                                    </div>
                                </div>
                            </div>
    
                            <!-- <a href="javascript:void(0);" id="step_back" class="btn btn-primary">Back</a> -->
                        </div>
                    </div>

                    <div class="overview-sec-2 accordion" id="accordionExample">
                        <div class="card download-card">
                            <div class="card-header py-4" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">     
                                <h1 class="title download-heading text-black text-center font-weight-bold letter-spacing-1">Downloads</h1>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseOne" class="collapse show">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between download-btn-sec">
                                        <div>
                                            <a href="javascript:void(0);" type="submit" id="main_step_1" class="btn btn-download letter-spacing-05 font-18 font-16 font-weight-bold"><img src="./public/images/png/download-img.png" class="img-fluid" alt="Download Image" width="70" title="Download Image" /> Product Brochure</a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" type="submit" id="main_step_1" class="btn btn-download letter-spacing-05 font-18 font-16 font-weight-bold"><img src="./public/images/png/download-img.png" class="img-fluid" alt="Download Image" width="70" title="Download Image" /> Policy Document</a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" type="submit" id="main_step_1" class="btn btn-download letter-spacing-05 font-18 font-16 font-weight-bold"><img src="./public/images/png/download-img.png" class="img-fluid" alt="Download Image" width="70" title="Download Image" /> Premium Rate Table</a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" type="submit" id="main_step_1" class="btn btn-download letter-spacing-05 font-18 font-16 font-weight-bold"><img src="./public/images/png/download-img.png" class="img-fluid" alt="Download Image" width="70" title="Download Image" /> Presentation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card disclaimer-card">
                            <div class="card-header py-4 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
                                <h1 class="title disclaimer-heading text-black text-center font-weight-bold letter-spacing-1">Disclaimer</h1>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseTwo" class="collapse">
                                <div class="card-body font-20 line-height-15 letter-spacing-1 text-justify">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>


<!-- Premium Breakup Table Modal -->
<div class="modal fade premiumBreakupTbl" id="premiumBreakupTbl" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="premiumBreakupTblLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="premiumBreakupTblLabel">Premium Breakup</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body pb-0">
            <table class="table table-bordered tblPremiumDetails">
                <thead>
                    <tr class="tbl-primary">
                        <th scope="col">Your Benefits</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Total Income Benefit in 19 Years (A)</th>
                        <td>10,33,125</td>
                    </tr>
                    <tr>
                        <th scope="row">Fixed Loyality Addition (B)</th>
                        <td>1,96,356</td>
                    </tr>
                    <tr>
                        <th scope="row">Base Sum Assured (C)</th>
                        <td colspan="2">7,85,423</td>
                    </tr>
                    <tr>
                        <th scope="row">Maturity Benefit (D=B+C)</th>
                        <td colspan="2">9,81,779</td>
                    </tr>
                    <tr class="tbl-primary">
                        <th scope="row">Total Benefit Received (A+D)</th>
                        <td colspan="2" class="font-weight-bold">20,14,904</td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="tbl-primary">
                        <th scope="col">Total Premium Paid</th>
                        <th scope="col">7,50,000</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="modal-footer justify-content-center border-0 pt-0">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

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
    $('#product_booking_page').show();
    $("#step_back").on("click", function(){
        // window.location.reload();
        $('#product_booking_page').show();
        $('#product_overview_page').hide();
        $('#plan_booking_tabs a[href="#pills-step3"]').tab('show');
    });

    //Custom Select JS
    $(".default_option").click(function(){
        $(this).parent().toggleClass("active");
    });

    $("#life_cover_dd .select_ul li").click(function(){
        var lifecover = $(this).html();
        $("#life_cover_dd .default_option li").html(lifecover);
        $(this).parents(".select_wrap").removeClass("active");
    });

    $("#upto_age_dd .select_ul li").click(function(){
        var uptoage = $(this).html();
        $("#upto_age_dd .default_option li").html(uptoage);
        $(this).parents(".select_wrap").removeClass("active");
    });

    $("#maturity_amt_dd .select_ul li").click(function(){
        var maturityamt = $(this).html();
        $("#maturity_amt_dd .default_option li").html(maturityamt);
        $(this).parents(".select_wrap").removeClass("active");
    });

    $("#pay_till_dd .select_ul li").click(function(){
        var maturityamt = $(this).html();
        $("#pay_till_dd .default_option li").html(maturityamt);
        $(this).parents(".select_wrap").removeClass("active");
    });

    $("#frequency_dd .select_ul li").click(function(){
        var maturityamt = $(this).html();
        $("#frequency_dd .default_option li").html(maturityamt);
        $(this).parents(".select_wrap").removeClass("active");
    });


    $('#rdoPayEarly a').on('click', function(){
        var sel = $(this).data('title');
        var tog = $(this).data('toggle');
        $('#'+tog).prop('value', sel);
        
        $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
        $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
    })

</script>