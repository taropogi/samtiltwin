const app = Vue.createApp({
	data() {
		return {
			enteredEmail: "",
			registerFormSubmitted: false,
			isTermsAgreed: false,
		};
	},
	computed: {
		inputEmailClass() {
			return {
				"is-invalid":
					this.registerFormSubmitted &&
					(this.isEmptyEmail || !this.isValidEmail),
			};
		},
		isEmptyEmail() {
			return this.registerFormSubmitted && this.enteredEmail === "";
		},
		isValidEmail() {
			if (
				/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.enteredEmail)
			) {
				return true;
			} else {
				return false;
			}
		},

		registerErrorText() {
			if (this.isEmptyEmail) {
				return "Please enter your email";
			}
			if (!this.isValidEmail && this.registerFormSubmitted) {
				return "Invalid Email";
			}

			return "";
		},
	},
	methods: {
		submitEmail() {
			this.registerFormSubmitted = true;

			if (!this.isEmptyEmail && this.isValidEmail && this.isTermsAgreed) {
				fetch(baseUrl + "welcome/insertEntry", {
					method: "POST",
					headers: {
						"Content-Type": "application/json",
					},
					body: JSON.stringify({
						emailAddress: this.enteredEmail,
					}),
				})
					.then((res) => {
						this.enteredEmail = "";
						this.registerFormSubmitted = false;
						console.log("registered!");
					})
					.catch((err) => {
						//	console.log("ERROR", err);
					});
			} else {
				console.log("error");
			}
		},
	},
});

app.mount("#app");
