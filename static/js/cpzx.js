var item = document.querySelectorAll(".item");
var zp = document.querySelectorAll(".zp");
var fu = document.querySelector(".zp1")
for (let i = 0; i < item.length; i++) {
    item[i].onclick = function() {
        for (let k = 0; k < item.length; k++) {

            item[k].style.borderBottom = "none"

        }

        item[i].style.borderBottom = "1px dotted red"
        if (i == 0) {

            zp[0].style.display = "block";
            zp[1].style.display = "block";
            zp[2].style.display = "block";
            zp[3].style.display = "block";
            zp[4].style.display = "block";
            zp[5].style.display = "block";
            zp[6].style.display = "block";
            fu.style.justifyContent = "center";



        }
        if (i == 1) {


            zp[0].style.display = "none";
            zp[1].style.display = "none";
            zp[2].style.display = "none";
            zp[3].style.display = "block";
            zp[4].style.display = "block";
            zp[5].style.display = "none";
            zp[6].style.display = "none";



        }
        if (i == 2) {
            zp[0].style.display = "block";
            zp[1].style.display = "block";
            zp[2].style.display = "block";

            zp[3].style.display = "none";
            zp[4].style.display = "none";
            zp[5].style.display = "none";
            zp[6].style.display = "none";



        }
        if (i == 3) {
            zp[0].style.display = "none";
            zp[1].style.display = "none";
            zp[2].style.display = "none";

            zp[3].style.display = "none";
            zp[4].style.display = "none";
            zp[5].style.display = "block";
            zp[6].style.display = "block";



        }
    }


}