let ga=document.querySelectorAll('.box')
let po=document.querySelector('.popup')

ga[0].addEventListener('click',function()
{
   po.style.display="flex";
   let im=ga[0].querySelector('img')  
   po.appendChild(im)
})
ga[1].addEventListener('click',function()
{
   po.style.display="flex";
   let im=ga[1].querySelector('img')  
   po.appendChild(im)
})

po.addEventListener('click',function()
{
    po.style.display="none";
})

let gaitem=document.querySelectorAll('.items')
console.log(gaitem[0])
