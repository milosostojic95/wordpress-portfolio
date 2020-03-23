


// contact anim
const contactText = document.querySelectorAll('.form-control');
const labelText = document.querySelectorAll('label');
console.log(contactText)

contactText.forEach((form,index) =>{
  form.addEventListener('click',()=>{
    labelText[index].style.fontSize = '14px';
  });
})
