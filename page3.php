<?php
include 'header.php';
?>


<section data-bs-version="5.1" class="form5 cid-tXnuNLKbMz" id="form5-1f">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Sign Up Form</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="#" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="#class">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <select name="Purpose" class="form-control"> 
                                <option value="Bible Donation">Bible Donation</option> 
                                <option value="Become a Bible Warrior">Become a Bible Warrior</option> 
                            </select>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-1f">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="age">
                            <input type="number" name="age" placeholder="Age" data-form-field="age" class="form-control" value="" id="age-form5-1f">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-1f">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-1f">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-1f"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" class="btn btn-primary display-4">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>