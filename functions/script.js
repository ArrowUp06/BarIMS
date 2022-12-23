function checkPassword(){
    let password = document.getElementById ("password").value;
    let cpassword = document.getElementById ("cpassword").value;
    console.log(password, cpassword);
    $('#addbtn').modal('show');

}
  
  let arrow = document.querySelectorAll(".arrow");
  for (let index = 0; index < arrow.length; index++) {
    const element = arrow[index].addEventListener("click", (e)=> {
      let arrowParent = e.target.parentElement.parentElement;
      console.log(arrowParent);

    });
    
}
