// Script for updating product

// Event Listeners
$(".update").on("click", updateProduct);

$(".delete").on("click", deleteProduct);

// Event Functions
function updateProduct() {
	let curObj = $(this);

	let newData = {};

	let nameEl = curObj.siblings("p");
	newData.name = nameEl.html();

	let descrEl = curObj.siblings("textarea");
	newData.descr = descrEl.val();

	let priceInputEl = curObj.siblings("input[type='number']");
	newData.price = priceInputEl.val();

	let imgInputEl = curObj.siblings("input[type='text']");
	newData.imgUrl = imgInputEl.val();

	// Use $().post to send data to a php file that would update database with data
	$.post("updateProduct.php", newData, function (data, status, xhr) {
		console.log(data);
		alert("Update is: " + status);
	});
}

function deleteProduct() {
	let curObj = $(this);
	
	let objName = curObj.siblings("p").html();

	$.post("deleteProduct.php", {name: objName}, function(data, status, xhr) {
		console.log(data);
		alert("Data delete is: " + status);
	});
	
}
