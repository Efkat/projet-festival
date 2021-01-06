const depts_div = document.getElementById("depts_div");
const styles_div = document.getElementById("styles_div");
const scenes_div = document.getElementById("scenes_div");

var viewBy_dept = document.querySelector('input[value="dept"]');
var viewBy_style = document.querySelector('input[value="style"]');
var viewBy_scene = document.querySelector('input[value="scene"]');
var viewBy_nb = document.querySelector('input[value="nb"]');

viewBy_dept.addEventListener("change", function (event) {
    depts_div.removeAttribute("style");

    styles_div.setAttribute("style","display:none;");
    scenes_div.setAttribute("style","display:none;");
});
viewBy_style.addEventListener("change", function (event) {
    styles_div.removeAttribute("style");

    depts_div.setAttribute("style","display:none;");
    scenes_div.setAttribute("style","display:none;");
});
viewBy_scene.addEventListener("change", function (event) {
    scenes_div.removeAttribute("style");

    depts_div.setAttribute("style","display:none;");
    styles_div.setAttribute("style","display:none;");
});
viewBy_nb.addEventListener("change", function (event) {
    scenes_div.setAttribute("style","display:none;");
    depts_div.setAttribute("style","display:none;");
    styles_div.setAttribute("style","display:none;");
});