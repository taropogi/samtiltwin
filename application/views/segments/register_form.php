<form id="register_form" class="form">

    <input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email"
        v-model="enteredEmail">
    <div id="no_email" class="error">
        <img src="https://d2i5a4y6yksdm0.cloudfront.net/images/arrow-up.png" class="arrow-up" />
        Please enter your email
    </div>
    <div id="invalid_email" class="error">
        <img src="https://d2i5a4y6yksdm0.cloudfront.net/images/arrow-up.png" class="arrow" />
        Invalid Email
    </div>


    <input type="hidden" name="redirect_url" value="https://tracker.tiltwin.com/nz/redirect-lp/3065" />
    <input type="hidden" name="page" value="086" />

    <input type="hidden" name="affiliateLink" value="wildz" />
    <input type="hidden" name="templateNumber" value="511" />

    <div @click="submitEmail" class="button form-group btns-group btn btn-primary d-block w-100" type="submit"
        name="submit" id="submit_btn">
        Claim it! </div>


    <div class="checkbox-container">
        <div id="accept_terms" class="error error2">Please agree to the terms and
            conditions</br>
            <img src="https://d2i5a4y6yksdm0.cloudfront.net/images/arrow-down.png" class="arrow-down" />
        </div>


        <p>
            <input type="checkbox" name="terms" value="1" />
            I'm over 18 years of age and accept these <a class="terms-link" href="#">terms and
                conditions</a> Keep me updated on all latest offers, rewards and promotions

            <input type="hidden" name="validate_terms" value="1" />
        </p>
    </div>

</form>