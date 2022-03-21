<form id="register_form" class="form">
    <input v-model="enteredEmail" placeholder="Please enter your email" type="email" class="form-control"
        :class="inputEmailClass" aria-describedby="inputEmailFeedback" required>
    <div v-if="isEmptyEmail || !isValidEmail" id="inputEmailFeedback" class="invalid-feedback">
        {{ registerErrorText }}
    </div>

    <div @click="submitEmail" class="button form-group btns-group btn btn-primary d-block w-100" type="submit"
        name="submit" id="submit_btn">
        Claim it! </div>


    <div class="checkbox-container">
        <div id="accept_terms" class="text-danger" v-if="!isTermsAgreed && registerFormSubmitted">
            Please agree to the terms and conditions</br>
            <img src="<?= base_url('assets/images/arrow-down.png') ?>" class="arrow-down" />
        </div>


        <p>

            <input type="checkbox" name="terms" v-model="isTermsAgreed" :checked="isTermsAgreed" />
            I'm over 18 years of age and accept these <a class="terms-link" href="#" data-bs-toggle="modal"
                data-bs-target="#modalTerms">terms and
                conditions</a> Keep me updated on all latest offers, rewards and promotions
        </p>
    </div>

</form>