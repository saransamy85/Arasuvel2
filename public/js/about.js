let parent=document.querySelectorAll('.item')
console.log(parent[0])
parent[3].addEventListener('mouseover',function()
{
   const a=parent[0]
   const b=parent[1]
   const c=parent[2]
   a.classList.add('test')
   b.classList.add('test2')
   c.classList.add('test3')
   
})
parent[3].addEventListener('mouseout',function()
{
   const a=parent[0]
   const b=parent[1]
   const c=parent[2]
   a.classList.remove('test')
   b.classList.remove('test2')
   c.classList.remove('test3')
   
})

