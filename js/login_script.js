const form = document.querySelector('form');
const username = document.querySelector('#username');
const password = document.querySelector('#password');

form.addEventListener('submit', (event) => {
	event.preventDefault();

	const formData = new FormData(form);

	fetch('/login', {
		method: 'POST',
		body: formData
	})
	.then(response => response.json())
	.then(data => {
		if (data.success) {
			window.location.href = '/dashboard';
		} else {
			alert(data.message);
		}
	})
	.catch(error => console.error(error));
});
