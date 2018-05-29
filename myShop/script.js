// Script for updating product

// Event Listeners
$(".update").on("click", updateProduct);

$(".delete").on("click", deleteProduct);

// Event Functions
function updateProduct() {
    // Store jQuery object of update button that was clicked
	let curObj = $(this);

    // Build an object to store data that will be sent to server / php
	let newData = {};

    // Get product name from paragraph with class="name"
    newData.name = curObj.siblings("p.name").html();

    // Get product description from textarea
	newData.descr = curObj.siblings("textarea").val();

    // Get product price from input element of type number
	newData.price = curObj.siblings("input[type='number']").val();
	
    // Get product image url from input element of type text
	newData.imgUrl = curObj.siblings("input[type='text']").val();
	
	// Use $().post to send data to a php file that would update database with data
	$.post("updateProduct.php", newData, function (data, status, xhr) {
		console.log(data);
		alert("Update is: " + status);
	});
}

function deleteProduct() {
    // Store jQuery object of delete button that was clicked
	let curObj = $(this);
	
    // Get product name from paragraph with class="name"
	let objName = curObj.siblings("p.name").html();

    // Use $().post to send data to a php file that would delete from database
	$.post("deleteProduct.php", {name: objName}, function(data, status, xhr) {
		console.log(data);
		alert("Data delete is: " + status);
	});
	
}
