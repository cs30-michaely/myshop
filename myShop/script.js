// Script for updating product

// Event Listeners
$(".update").on("click", updateProduct);

// Event Functions
function updateProduct() {
	let curObj = $(this);
	
	let nameEl =curObj.siblings("p");
	let name = nameEl.html();
	
	let descrEl = curObj.siblings("textarea");
	let descr = descrEl.val();
	
	let priceInputEl = curObj.siblings("input[type='number']");
	let price = priceInputEl.val();
	
	let imgInputEl = curObj.siblings("input[type='text']");
	let imgUrl = imgInputEl.val();
	
	// Use $().post to send data to a php file that would update database with data
	
}
