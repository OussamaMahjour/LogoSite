const toggleBtn=document.querySelector('.toggle_btn')
const toggleBackIcon=document.querySelector('.left_flech')
const dropDownMenu=document.querySelector('.dropdown_menu')

toggleBtn.onclick = function(){
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')
    
}
toggleBackIcon.onclick = function(){
    dropDownMenu.classList.remove('open')
}


