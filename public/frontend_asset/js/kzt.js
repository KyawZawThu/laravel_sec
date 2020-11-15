$(document).ready(function(){
	$('.checkout').click(function(){
		// alert("ok");	
		var id=$(this).data("id");
		var name=$(this).data("name");
		var photo=$(this).data("photo");
		var email=$(this).data("email");
		var description=$(this).data("description");

		var item={
			id:id,
			name:name,
			photo:photo,
			email:email,
			description:description,
		}

		// console.log(student);

		var itemlist=localStorage.getItem("items");
		var itemArray;
		if (itemlist==null){
			itemArray=[];
		}else{
			itemArray=JSON.parse(itemlist);
		}

		itemArray.push(item);	
		var itemstring=JSON.stringify(itemArray);
		localStorage.setItem('items', itemstring);
	})


	function showdata(){
		var itemlist=localStorage.getItem("items");
		// console.log(itemlist);                          	
	}
	
	
})