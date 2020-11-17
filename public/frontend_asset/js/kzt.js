$(document).ready(function(){
	showdata();
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
		console.log(itemlist);
		var itemArray=JSON.parse(itemlist);
			// console.log(itemArray);
			var html="";
			$.each(itemArray,function(i,v){
			html+=`<div class="medium-tiempos bright-red left-aligned student-profile-name">${v.name}</div>
			<h4 class="student-profile-track">Web Development</h4>
               
               <ul role="list" class="student-profile-external-links w-list-unstyled">
                  <li class="pc-student-linkedin"><a href="https://www.linkedin.com/in/hira-shahid-991b1583/" target="_blank" class="pc-student-linkedin-link w-inline-block"></a></li>
                  <li class="pc-student-github"><a href="https://github.com/hira63s" target="_blank" class="pc-student-github-link w-inline-block"></a></li>
                  <li class="pc-student-portfolio"><a href="https://hira63s.github.io/" target="_blank" class="pc-student-portfolio-link w-inline-block"></a></li>
               </ul>
               <div class="html-cta-mobile w-embed">
                  <a href="" 
                     target="_blank" class="pc-student-round-btn-mobile">
                     <div class="text-block-10">Get in touch</div>
                  </a>
               </div>
               <div style="" class="student-profile-primary-photo"><img src="${v.photo}"></div>
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
                  <div class="pc-student-technical-skills">Technical skills</div>
                  <div class="pc-student-tech-skills-tags">
                     <div class="pc-student-tech-skill-tag">Python</div>
                     <div class="pc-student-tech-skill-tag">SQL</div>
                     <div class="pc-student-tech-skill-tag">Flask</div>
                     <div class="pc-student-tech-skill-tag">TensorFlow</div>
                     <div class="pc-student-tech-skill-tag">Predictive modeling</div>
                     <div class="pc-student-tech-skill-tag">Data visualization</div>
                     <div class="pc-student-tech-skill-tag">R</div>
                     <div class="pc-student-tech-skill-tag">PyTorch</div>` 
		})
		$('.paw').html(html);                         	
	}
	
	
})