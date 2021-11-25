//Fetch all 3 Inputs
const addDisplay=document.querySelector(".display");
const addButton=document.querySelector(".addButton");
var inputFirst=document.querySelector(".inputtext")
let dateFirst=document.querySelector('input[type="date"]');

//Fetch the Container
const container=document.querySelector('.dataContainer');

//class and constructor
class reminder{

    constructor(reminderName,dateNew){

        this.createReminder(reminderName,dateNew)
    }
//create reminder
createReminder(reminderName,dateNew){

//create divison itembox and later append
let itemBox=document.createElement("div")
itemBox.classList.add("item")
itemBox.style.border='1px solid green'
itemBox.style.marginBottom="10px"

//Append Container
container.appendChild(itemBox)


//create date input
let date=document.createElement('input');
date.setAttribute("type", "date");
date.value=dateNew;
date.disabled=true;
date.classList.add("card-text");
date.classList.add("input1");
date.style.width='13rem';
date.style.margin='5px';
date.style.paddingBottom="7px";

//Append date input box
itemBox.appendChild(date)

//input box create  
let input=document.createElement("input");
input.value=reminderName;
input.disabled=true;
input.classList.add("card-text");
input.classList.add("input2");
input.style.width='13rem';
input.style.margin='5px';
// input.style.paddingTop="5px";
input.style.paddingBottom="7px";

//Append input box
itemBox.appendChild(input)




//create edit button
let editButton=document.createElement("button");

editButton.classList.add("btn");
editButton.classList.add("btn-primary")
editButton.classList.add("btn1");

editButton.style.paddingLeft="20px";
editButton.style.paddingRight="20px";
editButton.style.marginLeft="6px";
editButton.innerHTML="EDIT"

//Append edit button
itemBox.appendChild(editButton)

//create delete button
let removeButton=document.createElement("button");
removeButton.classList.add("btn");
removeButton.classList.add("btn-primary");
removeButton.classList.add("btn2");

removeButton.style.paddingLeft="6px";
removeButton.style.paddingRight="6px";
removeButton.style.marginLeft="6px";
removeButton.innerHTML="DELETE"

//Append delete button
itemBox.appendChild(removeButton)

//Add eventlistener
editButton.addEventListener('click',()=>{
    this.edit(input);
})

//Add eventlistener 
removeButton.addEventListener('click',()=>{
    this.delete(itemBox)
})

}
//edit reminder
edit(reminderitem){
    reminderitem.disabled=!reminderitem.disabled
}
//delete reminder
delete(reminderitem){
    container.removeChild(reminderitem)
}

}


//check whether the reminder and date is entered or not
function check(){
    if(inputFirst.value !='' && dateFirst.value !='' )
    {
        new reminder(inputFirst.value,dateFirst.value);        
        inputFirst.value="";
        dateFirst.value="";
        
    }
}

values = [];

function addRecord() {
  //var inp = document.getElementById('inputtext');
  var inp=inputFirst.value;
  values.push(inp.value);
  inp.value = "";  
}

// function displayRecord() {
//     let para=document.createElement("p");
//     para.classList.add("graph")
//     document.querySelector(".graph").innerHTML = values;
//   }
//check the inputs and date while clicking on adding
addButton.addEventListener("click",check);
addButton.addEventListener("click",addRecord);
// addDisplay.addEventListener("click",displayRecord);