(function () {
	$('.addBtn').click( function (e) {
		const block = $(e.target).parents('#dateFixBlock')
		const rows = block.find('.dateFixRow');
		const lastRow = rows.last()

		let start =  $(lastRow).find('.start').val()
		let end =  $(lastRow).find('.end').val()
		let date =  $(lastRow).find('.date').val()


		if (!start) {
			alert('Please enter start count')
			return;
		}
		if (!end) {
			alert('Please enter end count')
			return;
		}

		if (!date) {
			alert('Please enter date')
			return;
		}

		if (!isValidDate(date)) {
			alert('Please enter valid date')
			return;
		}

		$('#dateFixBlock').append(
			`<div class="row dateFixRow">
                <div class="column column-offset-25 column-10">
                    <input max="300" min="1" class="start" name="start[]" placeholder="Start" type="number" required>
                </div>
                <div class="column column-10">
                    <input max="300" min="1" class="end" name="end[]" placeholder="End" type="number" required>
                </div>
                <div class="column column-20">
                    <input autocomplete="off" max="300" min="1" class="date" name="date[]" required placeholder="yyyy-mm-dd" type="text">
                </div>
                <div>
                    <button type="button" class="button button-outline deleteBtn">- Delete</button>

                </div>
            </div>`
		)
	})
})();

$(document).on('click', '.deleteBtn', function (e) {
	$(e.target).parents('.dateFixRow').remove()
})

function isValidDate(dateString) {
	var regEx = /^\d{4}-\d{2}-\d{2}$/;
	return dateString.match(regEx) != null;
}



$("form#form").submit(function(e) {
	e.preventDefault();


	let dateNotValid = false;
	$(this).find('.date').each((i, e) => {
		if (!isValidDate($(e).val())) {
			dateNotValid = true;
		}
	})
	if (dateNotValid) {
		alert('Please enter valid date');
		return;
	}

	let formData = new FormData(this);
	let files = $('#file')[0].files;

	if(files.length > 0 ) {
		formData.append('file', files[0]);
	} else  {
		alert('Please choose xlsx file')
		return;
	}
	$('form#form *').prop('disabled', true);
	$.ajax({
		url: 'post.php',
		type: 'POST',
		data: formData,
		success: function (data) {
			console.log(data)
			if (data.includes('{"status":4')) {
				alert(data);
			}
			else {
				$('#script').html(data)
				copy()
			}
			$('.buttons-block').append(`
				<button type="button" onclick="window.location = '/'" class="button button-clear">Reload</button>
			`)
		},
		error: function ({statusText}) {
			alert(statusText)
		},
		cache: false,
		contentType: false,
		processData: false
	});
});

function copy() {
	let textarea = document.getElementById("script");
	textarea.select();
	document.execCommand("copy");
	alert('Copied Successfully!');
}