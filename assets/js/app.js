const app = Vue.createApp({
	data() {
		return {
			enteredEmail: "",
		};
	},
	methods: {
		submitEmail() {
			fetch("http://samtiltwin.test/welcome/insertEntry", {
				method: "POST",
				headers: {
					"Content-Type": "application-json",
				},
				body: JSON.stringify({
					emailAddress: this.enteredEmail,
				}),
			});

			console.log("done");
		},
	},
});

app.mount("#app");
