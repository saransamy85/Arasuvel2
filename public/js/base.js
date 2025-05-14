let nxt=document.querySelector('.nxt')
let menubtn=document.getElementById('icon')
let mlst=document.getElementById('menulist')

nxt.addEventListener('click',function()
{
    let items=document.querySelectorAll('.heroitem')
    document.querySelector('.herosec').appendChild(items[0])
})

menubtn.addEventListener('click',function()
{
    mlst.style.display=(mlst.style.display=='block') ? 'none':'flex';
})