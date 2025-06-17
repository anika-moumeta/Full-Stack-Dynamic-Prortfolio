navbar = document.getElementsByClassName("navbar");

/*for(i=0; i<navbar[0].children.length; i++)
    navbar[0].children[i].addEventListener("click", function(event) {
        console.log(event.target.innerText);
});*/

document.querySelectorAll('h3').forEach(varName => {
    varName.onclick = function() {
        alert(this.innerHTML);
    }
});

document.querySelectorAll('button').forEach(varName => {
    varName.onclick = function() {
        document.querySelector('.changed').innerHTML = `
        <p>Hello this is an inner html</p>
        `;

        img = document.querySelector("img");
        img.src = "https://www.bing.com/images/search?view=detailV2&ccid=rnW7lSdw&id=F99A600B3D6F1CEBAC715815D8DC2430733867EE&thid=OIP.rnW7lSdwixpRZ5nUyzch0AHaEK&mediaurl=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F165925%2Fpexels-photo-165925.jpeg%3Fcs%3Dsrgb%26dl%3Dnature-flowers-petals-165925.jpg%26fm%3Djpg&cdnurl=https%3A%2F%2Fth.bing.com%2Fth%2Fid%2FR.ae75bb9527708b1a516799d4cb3721d0%3Frik%3D7mc4czAk3NgVWA%26pid%3DImgRaw%26r%3D0&exph=3376&expw=6000&q=flower+pictures&simid=608044491245029762&FORM=IRPRST&ck=E653A383F3E144EDC35887F30F16F2E7&selectedIndex=8&itb=0&cw=683&ch=701&ajaxhist=0&ajaxserp=0";

        this.classList.add("btn");
        img.classList.add("rounded");
    };
});

