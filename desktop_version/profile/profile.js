const Saved=document.querySelector('.Saved')
const Post = document.querySelector('.Post')
const Post_list=document.getElementById("red")
const post_full=document.getElementById("post_full")
const Xbutton = document.getElementById("Xmark")
const like =document.querySelector('.fa-heart')
const likes = document.querySelector('.likes')
x=0
for(i =0;i<5;i++){
    div=document.createElement('div')
    img = document.createElement('img')
    img.src='../post/Sans titre.jpg'
    div.append(img)
    div.className='posting'
    div.onclick=function(){ post_full.style.display="flex"}   
    Post_list.append(div)
   }
    

Post.onclick = function(){
    
    Post.classList.toggle('desactive')
    Saved.classList.toggle('desactive')
    document.querySelector('.content_post').style.display='block'
    
}
    

Saved.onclick = function(){
  
        Post.classList.toggle('desactive')
        Saved.classList.toggle('desactive')
    document.querySelector('.content_post').style.display='none'

    
    
}

Xbutton.onclick = function(){
    post_full.style.display="none"

}
likes.append(document.createElement('p').innerHTML='   '+x+' like')
like.onclick = function(){
    like.classList.toggle('fa-solid')
    like.classList.toggle('fa-regular')
    x+=1
}





