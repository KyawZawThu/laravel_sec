$("document").ready(function(){
	showdata();
	$(".code").click(function(){
		// alert("ok");
		var id=$(this).data("id");
		var name=$(this).data("name");
		var photo=$(this).data("photo");
		var teacher=$(this).data("teacher");
		var description=$(this).data("description");

		var pls={
			id:id,
			name:name,
			photo:photo,
			teacher:teacher,
			description:description,
		}

		// console.log(pls);

		var itemlist=localStorage.getItem("item1");
		var itemArray;
		if (itemlist==null){
			itemArray=[];
		}else{
			itemArray=JSON.parse(itemlist);
		}

		itemArray.push(pls);	
		var itemstring=JSON.stringify(itemArray);
		localStorage.setItem('item1', itemstring);
	})

		function showdata(){
		var itemlist=localStorage.getItem("item1");
		console.log(itemlist);
		var itemArray=JSON.parse(itemlist);
			// console.log(itemArray);
			var html="";
			$.each(itemArray,function(i,v){
			html+=`<div class="medium-tiempos bright-red left-aligned student-profile-name">${v.name}</div>
			<h4 class="student-profile-track"></h4>

               
               <div class="html-cta-mobile w-embed">
                  <a href="" 
                     target="_blank" class="pc-student-round-btn-mobile">
                     <div class="text-block-10">Get in touch</div>
                  </a>
               </div>
               <div style="" class=""><img src="${v.photo}"></div>

               <p class="student-profile-text-body">&quot;${v.description}&quot;</p>
               <div class="student-profiles-section-mobile">
                  <div class="pc-student-mobile-headline">Education</div>
                  <p class="student-profile-mobile-text">B.S. Neuroscience &amp; Economics</p>
               </div>
               <div class="student-profiles-section-mobile">
                  <div class="pc-student-mobile-headline">Industry experience</div>
                  <p class="student-profile-mobile-text">Retail, Finance</p>
               </div>
               <div class="student-profiles-section-mobile">
                  <div class="pc-student-mobile-headline">Roles I&#x27;m looking for</div>
                  <p class="student-profile-mobile-text">Data Analyst, Data Engineer, Machine Learning Scientist</p>
               </div>
               <div class="student-profiles-tech-skills">
                  
                  <div class="pc-student-tech-skills-tags">
                     ` 
		})
		$('.suc').html(html);                         	
	}
	
})
