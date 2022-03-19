const app = Vue.createApp({
	data() {
		return {
			enteredEmail: "",
		};
	},
	methods: {
		submitEmail() {
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
					console.log("RESSSSSSSS", res);
					//console.log("Error", res.data);
					//console.log(baseUrl + "welcome/insertEntry");
				})
				.catch((err) => {
					//	console.log("ERROR", err);
				});

			//console.log(baseUrl);
		},
	},
});

app.mount("#app");
