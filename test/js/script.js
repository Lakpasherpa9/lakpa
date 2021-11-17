
    // function openmenu()
    //   {
    //       document.getElementById("side-menu").style.display="block";
    //       document.getElementById("menu-btn").style.display="none";
    //       document.getElementById("close-btn").style.display="block";
    //   }
    //   function closemenu()
    //   {
    //       document.getElementById("side-menu").style.display="none";
    //       document.getElementById("menu-btn").style.display="block";
    //       document.getElementById("close-btn").style.display="none";
    //   }
 
    
    const menubtn = document.getElementsByClassName("menu");
const list = document.getElementById("list")
 function showMenu () {
     list.classList.toggle("active");
    
}