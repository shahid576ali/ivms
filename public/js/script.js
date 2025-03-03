// active link class add

// const allSideMenu = document.querySelectorAll('#sidebar .side-menu li a');

// allSideMenu.forEach(item=>{
//     const li = item.parentElement;

//     item.addEventListener('click', function(){
//         allSideMenu.forEach(i=>{
//             i.parentElement.classList.remove('active');
//         })
//         li.classList.add('active');
//     })

// })

// toggle sidebar

const MenuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

MenuBar.addEventListener('click', function(){
    sidebar.classList.toggle('hide');
})