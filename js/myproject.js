// let btn=document.getElementById('cont-890');
// btn.addEventListener('click', function() {
//      btn.style.display='none';
// });
// let iconmenu=document.getElementsByClassName("icon-menu01")[0];
// let navbar=document.getElementsByClassName("navigation-items1");
// iconmenu.addEventListener("click",function(){
//      if(navbar[0].style.display == "none" || navbar[0].style.display === "") {
//            navbar[0].style.display = "block";
//      }else{
//           navbar[0].style.display = "none";
//      }
// })
let section = document.getElementsByClassName("lower-section")[0];
let btn = document.getElementsByClassName("cont-890")[0];
if (btn && section) {
    btn.addEventListener("click", function () {
        section.style.display = "none";
    });
}
