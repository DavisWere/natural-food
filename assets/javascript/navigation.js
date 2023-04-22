const urlConstant = 'http://localhost/naturalfood/pages/'

const routes = [
    {name : 'Login',path: 'http://localhost/naturalfood/'},
    {name : 'Blogs',path: urlConstant +'blogs.php'},
    {name : 'Home',path: urlConstant +'home.php'},
    {name : 'Admin',path: urlConstant +'admin.php'},
    {name : 'Login',path: urlConstant +'login.php'}
    
]

const navigateTo = (text)=>{

    for (var i = 0; i < routes.length;i++) {
        if(text === routes[i].name){
            location.assign(routes[i].path)
        }
    }
}

const displayRoutes = ()=>{
    alert('works yey')
    const navList = document.getElementById('navButtons')

    for (var i = 0; i < routes.length;i++){
        //create link
        let a = document.createElement('a');
        //assign Value and Name to link
        a.setAttribute('href',routes[i].path);
        a.innerHTML = routes[i].name;
        //append Button to DOM
        navList.appendChild(a)
    }
}

