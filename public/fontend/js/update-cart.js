(function($){
	$(document).on('click','a.btn-update-cart',function(ev){
		// Đưa về mạc định
		ev.preventDefault();
		var id = $(this).data('id');
		var qtt = $('input#qtt-'+id).val();
		var href = $(this).attr('href');

		$.ajax({
			url: href,
			type: 'GET',
			data: {id:id,qty:qtt},
			success:function(res){
				$('#dathang').load(location.href + ' #dathang');
			}
		});
		
	});
}(jQuery))
	