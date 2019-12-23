function changeColor(color) {
    document.getElementById("change-color-id").style.color = color;

    return false;
}



function changeSize(size) {
    var cellsP = document.getElementsByName("changeSize");
    for (var i = 0; i < cellsP.length; i++) {
        cellsP[i].style.fontSize = size
    }
}
//TODO
/*
2 Таблицы по 5 полей с отношением один ко многим
1 таблица (ОДИН) Программисты ( Конрад,та странная Баба)
1)id_programmer
2)First Name
3)Last Name
4)Date birth
5)img src

2 Таблица (МНОГИЕ) Достижение программиста (алгоритм, машина ) то чем он может войти в историю
1)id_achievement
2)id_programmer (foreign key)
3)img src
4) Description
5)Date publication

 */
function onChangeSelect(val) {
    debugger;
    if (val.length === 0) {
    } else {
        var selectOld = document.getElementById("responseSelectBox");
        var child = selectOld.lastElementChild;
        while (child) {
            selectOld.removeChild(child);
            child = selectOld.lastElementChild;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var select = document.getElementById("responseSelectBox");
                console.log(JSON.parse(this.responseText) + "  " + val);
                var option = JSON.parse(this.responseText);

                for (var     i = 0; i < option.length; i++) {
                    var opt = option[i];
                    var el = document.createElement("option");
                    el.textContent = opt;
                    el.value = opt;
                    select.appendChild(el);
                }
            }
        };
        xmlhttp.open("GET", "main/getAchivments.php?q=" + val, true);
        xmlhttp.send();
    }
}