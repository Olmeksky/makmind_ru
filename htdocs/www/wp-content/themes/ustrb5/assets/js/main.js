function readyFn( jQuery ) {
	// Срабатывает при загрузке документа
	//alert('Загрузка готова');
	console.log('Загрузка готова');
	var contcard = 0;
	console.log('Получилось нажать раз: '+contcard);
	$('.CardClick').on('click', function() {
		//alert('Получилось нажать');
		contcard = contcard+1;
		console.log('Получилось нажать раз: '+contcard);
	});

} // END readyFn

$( window ).on( "load", readyFn );


