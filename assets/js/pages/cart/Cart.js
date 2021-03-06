var Cart = function(){}

Cart.prototype.removeItem = function(id) {
	this.item.remove.call(this, id);
};

Cart.prototype.item ={db:{}, remove:null, drawRemove:null};



// #Remove step 1
Cart.prototype.item.remove = function(id) {
	var self = this;

	self.item.db.remove.call(self, id).then(function(response){
		if(response.status){
			self.item.drawRemove.call(self, id);
		}
	});
};


// #remove step 2

Cart.prototype.item.db.remove = function(id) {
	var p =  new Promise(function(resolve, reject){
		let response = {status:1, data:{}};
		resolve(response);
	});
	return p;
};



// #remove step 3

Cart.prototype.item.drawRemove = function(id) {
	var $cartItem = $('#cartProduct'+ id);

	$cartItem.css('opacity', 0);

	setTimeout(()=>{
		$cartItem.remove();
		this.adjustAmounts();
		
	}, 400);
};



// adjustAmounts

Cart.prototype.adjustAmounts = function() {
	var subTotal = 0;

	$('#cartPage .cartItem').each(function(item, index){
		var $item = $(this);
		var productTotal = parseInt($item.find('.productTotal .amount').text().replace(',',''));
		subTotal += productTotal;
	})

	$('#paymentCol .subTotal .amount').html(number_format(subTotal));
	var grandTotal = subTotal + config.shippingCost;

	$('#paymentCol .grandTotal .amount').html(number_format(grandTotal));
};

