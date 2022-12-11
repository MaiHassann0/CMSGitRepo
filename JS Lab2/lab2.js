//--------part 1--------
function myFunction(){
    let x ={ userName:"",password:""};
    x.username=document.getElementById("username").value;
    x.password=document.getElementById("password").value;

    // document.querySelector("#username").onclick = function(){
    // var username = "admin";
    // var password = "123";
    // }
    //     if(document.querySelectorAll){
    //     alert("Welcome");
    //     return;
    // }else{
    //    alert("Not registered"); 
    // }

    if (x.username=="admin"&& x.password==123){
        document.write("Welcome");
    } else{
        document.write("Not registered");
    }
}

//-------part 2--------

document.querySelector("#add").onclick = function(){
    if(document.querySelector("#newtask input").value.length == 0){
        alert("Enter a todo task");
    }else{
        document.querySelector("#tasks").innerHTML +=
        `<div class="task">
        <span id="taskname">
        ${document.querySelector("#newtask input").value}
        </span>
        <button class="deletetask"> x </button>
        </div>`;
 

var todoTasks = document.querySelectorAll(".deletetask");
for(var i=0; i<todoTasks.length; i++){
    todoTasks[i].onclick = function(){
        this.parentNode.remove();
              }
          }
    }
}
