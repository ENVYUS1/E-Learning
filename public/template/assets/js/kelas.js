function modal_tambah_kelas(){
	Swal.fire({
		title: 'Silahkan masukkan no token kelas',
		input: 'text',
		inputAttributes: {
			autocapitalize: 'off'
		},
		footer: '<a href>Bagaimana menadapatkan nomor token?</a>',
		showCancelButton: true,
		confirmButtonText: 'Gabung',
		cancelButtonText: 'Batal',
		showLoaderOnConfirm: true,
		preConfirm: (login) => {
			return fetch(`//api.github.com/users/${login}`)
			.then(response => {
				if (!response.ok) {
					throw new Error(response.statusText)
				}
				return response.json()
			})
			.catch(error => {
				Swal.showValidationMessage(
					`Request failed: ${error}`
					)
			})
		},
		allowOutsideClick: () => !Swal.isLoading()
	}).then((result) => {
		if (result.value) {
			Swal.fire({
				title: `${result.value.login}'s avatar`,
				imageUrl: result.value.avatar_url
			})
		}
	})
}