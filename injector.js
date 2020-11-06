const start = new Date().getTime();
call_r_insert();
function call_r_insert(i = 0) {
	window.addEventListener('offline', () => { console.log('Network Disconnected!'); return; });
	let serial = Number(i) + 1;
	if (data.length > 300) { console.log('Please check the xlsx file, You entered more than 300 data.'); return; }
	if (i === data.length) {
		const end = new Date().getTime();
		const msecs = end - start;
		const min = Math.floor(msecs / 60000);
		const sec = Math.ceil((msecs / 1000) % 60);
		console.log('Transaction finished! Time consumed: ' + min + 'm ' + sec + 's');
		return;
	}
	if (Object.keys(data[i]).length) {
		$.post('insert.php', data[i]).done(function( response ) {
			console.log('Success: ' +  serial);
			if (response.includes('Count: 300')) {
				console.log('Count 300 exceed!');
			} else {
				call_r_insert(serial);
			}
		}).catch(function (response) {
			console.log('Failed for ' + serial);
		});
	} else {
		console.log('Data not found for: ' + serial )
	}
}