let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
	    menu.classList.toggle('fa-times');
	    navbar.classList.toggle('active');
};

window.onscroll = () =>{
	    menu.classList.remove('fa-times');
	    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
	    loop:true,
	    navigation: {
		            nextEl: ".swiper-button-next",
		            prevEl: ".swiper-button-prev",
		        },
});

var swiper = new Swiper(".reviews-slider", {
	    //loop:true,
	//    spaceBetween: 20,
	//        autoHeight: true,
	//            grabCursor: true,
	//                breakpoints: {
	//                        640: {
	//                                    slidesPerView: 1,
	//                                            },
	//                                                    768: {
	//                                                                slidesPerView: 2,
	//                                                                        },
	//                                                                                1024: {
	//                                                                                            slidesPerView: 3,
	//                                                                                                    },
	//                                                                                                        },
	//                                                                                                        });
	//
	//                                                                                                        //let loadMoreBtn = document.querySelector('.listings .load-more .btn');
	//                                                                                                        //let currentItem = 3;
	//
	//                                                                                                        //loadMoreBtn.addEventListener('click', () => {
	//                                                                                                           // let boxes = [...document.querySelectorAll('.listings .box-container .box')];
	//                                                                                                               //for (var i = currentItem; i < currentItem + 3; i++){
	//                                                                                                                   //    for (let i = currentItem; i < currentItem + 3 && i < boxes.length; i++){
	//                                                                                                                      //     boxes[i].style.display = 'inline-block';
	//                                                                                                                       //   }
	//                                                                                                                          // currentItem += 3;
	//                                                                                                                             // if(currentItem >= boxes.length){
	//                                                                                                                                 //    loadMoreBtn.style.display = 'none';
	//                                                                                                                                    // }
	//                                                                                                                                    //});
	//
	//                                                                                                                                    //$(document).ready(function(){
	//                                                                                                                                        //$(".content").slice(0, 4).show();
	//                                                                                                                                            //$("#loadMore").on("click", function(e){
	//                                                                                                                                                  //e.preventDefault();
	//                                                                                                                                                        //$(".content:hidden").slice(0, 4).slideDown();
	//                                                                                                                                                              //($(".content:hidden").length == 0) {
	//                                                                                                                                                                     // $("#loadMore").text("No Content").addClass("noContent");
	//                                                                                                                                                                          // }
	//                                                                                                                                                                              //});
	//                                                                                                                                                                                  
	//                                                                                                                                                                                    //})
